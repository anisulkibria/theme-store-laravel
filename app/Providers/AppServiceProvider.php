<?php

namespace App\Providers;

use App\Services\EnhancedSeoService;
use App\Services\ThemeDataService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ThemeDataService::class, function ($app) {
            return new ThemeDataService();
        });
        
        // Register SEOTools package provider first
        $this->app->register(\Artesaos\SEOTools\Providers\SEOToolsServiceProvider::class);
        
        // Register our SeoServiceProvider
        $this->app->register(SeoServiceProvider::class);

        // Better fix for URL generator in console commands
        if ($this->app->runningInConsole()) {
            $url = $this->app['config']->get('app.url', 'http://localhost');
            $this->app->instance('request', \Illuminate\Http\Request::create($url));
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force URL scheme if configuration specifies HTTPS
        if (str_starts_with($this->app['config']->get('app.url', ''), 'https://')) {
            URL::forceScheme('https');
        }
        
        Blade::component('layouts.app', 'app-layout');
        
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
