<?php

namespace Modules\Admin\Providers;

use App\Models\TeamMember;
use Illuminate\Support\ServiceProvider;
use Modules\Admin\Entities\PageImage;
use Modules\Admin\Entities\Setting;
use Modules\Admin\Entities\Text;

class AppConfigrationFromDBProvider extends ServiceProvider
{
    public const YEAR_IN_SECONDS = 31104000;

    public function register()
    {
        $this->singleton('site_settings', (new Setting())->getTable(), fn () => Setting::pluck('value', 'key'));
        $this->singleton('site_texts', (new Text())->getTable(), fn () => Text::pluck('value', 'key'));
        $this->singleton('site_images', (new PageImage())->getTable(), fn () => PageImage::get());
        $this->singleton(
            'team_members',
            (new TeamMember())->getTable(),
            fn () => TeamMember::orderBy('order')->orderBy('id')->get()
        );

        $this->setAppConfigruation();
    }

    protected function singleton(string $appKey, string $cacheKey, callable $closure)
    {
        $this->app->singleton($appKey, fn() => $this->cache($cacheKey, $closure));
    }

    protected function cache(string $key, callable $closure)
    {
        return cache()->remember($key, self::YEAR_IN_SECONDS, $closure);
    }

    protected function setAppConfigruation()
    {
        $this->app->setLocale(getSetting('default_locale', "en"));

        config(['app.name' => ucwords(getSetting('app_name', "404exist"))]);

        $this->setLaravelPWA();

        $this->setAppMailProvider();
    }

    protected function setLaravelPWA()
    {
        config(['laravelpwa.manifest.name' => getSetting('app_name')]);
        config(['laravelpwa.manifest.short_name' => getSetting('app_name')]);
        config(['laravelpwa.manifest.background_color' => getSetting('primary_color')]);
        config(['laravelpwa.manifest.theme_color' => getSetting('secondary_color')]);
    }

    protected function setAppMailProvider()
    {
        config(['mail.mailers.smtp' => [
            'transport' => 'smtp',
            'host' => getSetting('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => getSetting('MAIL_PORT', 587),
            'encryption' => getSetting('MAIL_ENCRYPTION', 'tls'),
            'username' => getSetting('MAIL_USERNAME'),
            'password' => getSetting('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => getSetting('MAIL_EHLO_DOMAIN'),
        ]]);

        config(['mail.from.address' => getSetting('MAIL_FROM_ADDRESS', 'hello@example.com')]);
    }
}
