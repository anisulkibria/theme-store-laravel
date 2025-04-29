<?php

namespace App\Providers;

use App\Services\EnhancedSeoService;
use App\Services\SeoService;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(EnhancedSeoService::class, function ($app) {
            return new EnhancedSeoService();
        });
        
        // Still register the old SeoService for backward compatibility
        $this->app->singleton(SeoService::class, function ($app) {
            return new SeoService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Set default SEO values when the application boots
        $this->setSeoDefaults();
    }
    
    /**
     * Set default SEO values
     */
    private function setSeoDefaults(): void
    {
        SEOTools::setTitle(config('seotools.meta.defaults.title'));
        SEOTools::setDescription(config('seotools.meta.defaults.description'));
        
        if (config('seotools.meta.defaults.canonical') === 'current') {
            SEOTools::setCanonical(url()->current());
        }
        
        // Set OpenGraph defaults
        SEOTools::opengraph()->setTitle(config('seotools.opengraph.defaults.title'));
        SEOTools::opengraph()->setDescription(config('seotools.opengraph.defaults.description'));
        SEOTools::opengraph()->setSiteName(config('seotools.opengraph.defaults.site_name'));
        SEOTools::opengraph()->setType(config('seotools.opengraph.defaults.type'));
        
        if (config('seotools.opengraph.defaults.url') === 'current') {
            SEOTools::opengraph()->setUrl(url()->current());
        }
        
        foreach (config('seotools.opengraph.defaults.images', []) as $image) {
            SEOTools::opengraph()->addImage($image);
        }
        
        // Set Twitter Card defaults
        SEOTools::twitter()->setTitle(config('seotools.twitter.defaults.title'));
        SEOTools::twitter()->setDescription(config('seotools.twitter.defaults.description'));
        SEOTools::twitter()->setImage(config('seotools.twitter.defaults.image'));
        SEOTools::twitter()->setType(config('seotools.twitter.defaults.card'));
        
        // Set JsonLD defaults
        SEOTools::jsonLd()->setTitle(config('seotools.json-ld.defaults.title'));
        SEOTools::jsonLd()->setDescription(config('seotools.json-ld.defaults.description'));
        SEOTools::jsonLd()->setType(config('seotools.json-ld.defaults.type'));
        
        if (config('seotools.json-ld.defaults.url') === 'current') {
            SEOTools::jsonLd()->addValue('url', url()->current());
        }
        
        foreach (config('seotools.json-ld.defaults.images', []) as $image) {
            SEOTools::jsonLd()->addImage($image);
        }
    }
} 