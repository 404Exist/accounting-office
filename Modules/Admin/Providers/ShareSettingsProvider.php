<?php

namespace Modules\Admin\Providers;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\ServiceProvider;
use Modules\Admin\Entities\PageImage;
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
        $this->app->singleton('site_settings', fn() => $this->setKeyValueCache("settings", Setting::class));
        $this->app->singleton('site_texts', fn() => $this->setKeyValueCache("texts", Text::class));
        $this->app->singleton('site_images', fn() => $this->setCollectionCache("page_images", PageImage::get()));
        $this->app->singleton('team_members', fn() => $this->setCollectionCache(
            "team_members",
            TeamMember::orderBy('order')->orderBy('id')->get()
        ));

        config(['app.name' => ucwords(getSetting('app_name', "404exist"))]);
    }

    protected function setKeyValueCache(string $key, string $model)
    {
        cache()->forget($key);
        return cache()->remember($key, self::YEAR_IN_SECONDS, fn () => $model::pluck('value', 'key'));
    }
    protected function setCollectionCache(string $key, Collection $collection)
    {
        cache()->forget($key);
        return cache()->remember($key, self::YEAR_IN_SECONDS, fn () => $collection);
    }
}
