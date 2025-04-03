<?php

namespace App\Providers;

use App\Services\ThemeDataService;
use Illuminate\Support\ServiceProvider;

class ThemeDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ThemeDataService::class, function ($app) {
            return new ThemeDataService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share common data with all views
        view()->composer('*', function ($view) {
            $themeDataService = app(ThemeDataService::class);
            
            $view->with([
                'themes' => $themeDataService->getThemes(),
                'testimonials' => $themeDataService->getTestimonials(),
                'socialLinks' => $themeDataService->getSocialLinks(),
                'footerLinks' => $themeDataService->getFooterLinks(),
            ]);
        });
    }
} 