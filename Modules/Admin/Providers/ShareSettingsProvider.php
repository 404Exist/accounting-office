<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Entities\Setting;
use Modules\Admin\Entities\Text;

class ShareSettingsProvider extends ServiceProvider
{
    public const YEAR_IN_SECONDS = 31104000;
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('site_settings', fn() => $this->setCache("settings", Setting::class));
        $this->app->singleton('site_texts', fn() => $this->setCache("texts", Text::class));
    }

    protected function setCache(string $key, string $model)
    {
        cache()->forget($key);
        return cache()->remember($key, self::YEAR_IN_SECONDS, fn () => $model::pluck('value', 'key'));
    }
}
