<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Admin';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'admin';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);
        $this->app->register(ShareSettingsProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower,
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/globalTexts.php'),
            "{$this->moduleNameLower}.global_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/homeTexts.php'),
            "{$this->moduleNameLower}.home_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/aboutUsTexts.php'),
            "{$this->moduleNameLower}.about_us_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/fullAccountancyTexts.php'),
            "{$this->moduleNameLower}.full_accountancy_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/kpirAccountingTexts.php'),
            "{$this->moduleNameLower}.ledger_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/registerdLumpSumTexts.php'),
            "{$this->moduleNameLower}.registerd_lump_sum_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/hrAndPayrollTexts.php'),
            "{$this->moduleNameLower}.hr_and_payroll_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/taxConsultancyTexts.php'),
            "{$this->moduleNameLower}.tax_consultancy_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/establishmentOfTheCompanyTexts.php'),
            "{$this->moduleNameLower}.establishment_of_the_company_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/virtualOfficeTexts.php'),
            "{$this->moduleNameLower}.virtual_office_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/freeWebsiteTexts.php'),
            "{$this->moduleNameLower}.free_website_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/contactTexts.php'),
            "{$this->moduleNameLower}.contact_texts",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/siteSettings.php'),
            "{$this->moduleNameLower}.site_settings",
        );
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/siteImages.php'),
            "{$this->moduleNameLower}.site_images",
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
            $this->loadJsonTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
            $this->loadJsonTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
        return $paths;
    }
}
