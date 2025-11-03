<?php

namespace App\Services;

use Artesaos\SEOTools\Facades\SEOTools;

class EnhancedSeoService
{
    /**
     * Setup SEO data for the home page
     *
     * @return void
     */
    public function setupHomePageSeo(): void
    {
        $title = 'Ghost Theme | Premium Ghost CMS Themes';
        $description = 'Elevate your Ghost blog with our premium, responsive themes - designed for performance, SEO, and user experience.';
        
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url('/'));
        
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('/images/og-image.jpg'));
        
        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl(url('/'));
        SEOTools::twitter()->setImage(asset('/images/og-image.jpg'));
        SEOTools::twitter()->setType('summary_large_image');
        
        SEOTools::jsonLd()->setTitle($title);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->addImage(asset('/images/og-image.jpg'));
        SEOTools::jsonLd()->setType('WebSite');
        SEOTools::jsonLd()->addValue('url', url('/'));
    }
    
    /**
     * Setup SEO data for the themes page
     *
     * @return void
     */
    public function setupThemesPageSeo(): void
    {
        $title = 'Premium Ghost Themes | Ghost Theme';
        $description = 'Explore premium Ghost themes. Each theme is crafted with attention to detail, ensuring a perfect showcase for your content.';
        
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url('/themes'));
        
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl(url('/themes'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('/images/themes-og-image.jpg'));
        
        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl(url('/themes'));
        SEOTools::twitter()->setImage(asset('/images/themes-og-image.jpg'));
        SEOTools::twitter()->setType('summary_large_image');
        
        SEOTools::jsonLd()->setTitle($title);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->addImage(asset('/images/themes-og-image.jpg'));
        SEOTools::jsonLd()->setType('ItemList');
        SEOTools::jsonLd()->addValue('url', url('/themes'));
    }
    
    /**
     * Setup SEO data for a theme detail page
     *
     * @param array $theme
     * @return void
     */
    public function setupThemeDetailPageSeo(array $theme): void
    {
        // Create a more descriptive title
        $title = "{$theme['name']} - Premium Ghost Theme";
        if (isset($theme['price'])) {
            $title .= " | \${$theme['price']}";
        }
        
        // Create a more descriptive meta description using the theme description
        $baseDescription = $theme['description'] ?? "Discover the {$theme['name']} for Ghost CMS";
        $description = $baseDescription;
        
        // Add features to description if available
        if (isset($theme['features']) && is_array($theme['features']) && count($theme['features']) > 0) {
            // Filter out empty values and ensure all items are strings
            $validFeatures = array_filter($theme['features'], function($feature) {
                return !empty($feature) && is_string($feature);
            });
            
            if (count($validFeatures) > 0) {
                $featuresText = ' Features include: ' . implode(', ', array_slice($validFeatures, 0, 3));
                // Make sure description with features doesn't exceed reasonable meta description length
                if (strlen($baseDescription . $featuresText) <= 160) {
                    $description .= $featuresText;
                }
            }
        }
        
        // Generate keywords based on theme attributes and features
        $keywordParts = [
            "ghost theme",
            strtolower($theme['name']),
            "premium theme",
            "responsive theme"
        ];
        
        // Add some features as keywords if available
        if (isset($theme['features']) && is_array($theme['features']) && count($theme['features']) > 0) {
            // Filter out empty values and ensure all items are strings
            $validFeatures = array_filter($theme['features'], function($feature) {
                return !empty($feature) && is_string($feature);
            });
            
            foreach (array_slice($validFeatures, 0, 3) as $feature) {
                $keywordParts[] = strtolower($feature);
            }
        }
        
        // Use theme image for social shares if available
        $image = isset($theme['image']) ? asset($theme['image']) : asset('/images/og-image.jpg');
        
        // Extract slug from detail_url if available, otherwise use the slug field
        if (isset($theme['detailUrl'])) {
            $slug = $this->extractSlugFromUrl($theme['detailUrl']);
        } else {
            $slug = $theme['slug'] ?? strtolower(str_replace(' ', '-', $theme['name']));
        }
        $url = url("/themes/{$slug}");
        
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical($url);
        SEOTools::metatags()->addKeyword($keywordParts);
        
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl($url);
        SEOTools::opengraph()->addProperty('type', 'product');
        SEOTools::opengraph()->addImage($image);
        
        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl($url);
        SEOTools::twitter()->setImage($image);
        SEOTools::twitter()->setType('summary_large_image');
        
        // Setup JSON-LD Product schema
        SEOTools::jsonLd()->setType('Product');
        SEOTools::jsonLd()->setTitle($title);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->addValue('url', $url);
        SEOTools::jsonLd()->addImage($image);
        
        if (isset($theme['price'])) {
            SEOTools::jsonLd()->addValue('offers', [
                '@type' => 'Offer',
                'price' => $theme['price'],
                'priceCurrency' => 'USD',
                'availability' => 'https://schema.org/InStock',
                'url' => $url
            ]);
        }
        
        if (isset($theme['rating'])) {
            SEOTools::jsonLd()->addValue('aggregateRating', [
                '@type' => 'AggregateRating',
                'ratingValue' => $theme['rating'],
                'bestRating' => '5',
                'worstRating' => '1',
                'ratingCount' => $theme['sales'] ?? '100'
            ]);
        }
        
        SEOTools::jsonLd()->addValue('brand', [
            '@type' => 'Brand',
            'name' => 'Ghost Theme'
        ]);
    }
    
    /**
     * Setup SEO data for the about page
     *
     * @return void
     */
    public function setupAboutPageSeo(): void
    {
        $title = 'About Us | Ghost Theme - Premium Ghost CMS Themes';
        $description = 'Learn about our story and mission to create beautiful, functional Ghost themes for bloggers and content creators.';
        
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url('/about'));
        
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl(url('/about'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('/images/about-og-image.jpg'));
        
        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl(url('/about'));
        SEOTools::twitter()->setImage(asset('/images/about-og-image.jpg'));
        SEOTools::twitter()->setType('summary_large_image');
        
        SEOTools::jsonLd()->setTitle($title);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->addImage(asset('/images/about-og-image.jpg'));
        SEOTools::jsonLd()->setType('WebPage');
        SEOTools::jsonLd()->addValue('url', url('/about'));
    }
    
    /**
     * Setup SEO data for the terms page
     *
     * @return void
     */
    public function setupTermsPageSeo(): void
    {
        $title = 'Terms of Service | Ghost Theme';
        $description = 'Read our terms of service agreement for using Ghost Theme products and services.';
        
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url('/terms'));
        
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl(url('/terms'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('/images/og-image.jpg'));
        
        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl(url('/terms'));
        SEOTools::twitter()->setImage(asset('/images/og-image.jpg'));
        SEOTools::twitter()->setType('summary_large_image');
        
        SEOTools::jsonLd()->setTitle($title);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->addImage(asset('/images/og-image.jpg'));
        SEOTools::jsonLd()->setType('WebPage');
        SEOTools::jsonLd()->addValue('url', url('/terms'));
    }
    
    /**
     * Setup SEO data for the privacy page
     *
     * @return void
     */
    public function setupPrivacyPageSeo(): void
    {
        $title = 'Privacy Policy | Ghost Theme';
        $description = 'Learn how we collect, use, and protect your personal information when you use our Ghost theme products and services.';
        
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url('/privacy'));
        
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl(url('/privacy'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('/images/og-image.jpg'));
        
        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl(url('/privacy'));
        SEOTools::twitter()->setImage(asset('/images/og-image.jpg'));
        SEOTools::twitter()->setType('summary_large_image');
        
        SEOTools::jsonLd()->setTitle($title);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->addImage(asset('/images/og-image.jpg'));
        SEOTools::jsonLd()->setType('WebPage');
        SEOTools::jsonLd()->addValue('url', url('/privacy'));
    }
    
    /**
     * Setup SEO data for the blog page
     *
     * @return void
     */
    public function setupBlogPageSeo(): void
    {
        $title = 'Blog | Ghost Theme - News & Updates';
        $description = 'Stay updated with the latest news, tutorials, and insights about Ghost themes and website development.';
        
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url('/blog'));
        
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl(url('/blog'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('/images/blog-og-image.jpg'));
        
        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl(url('/blog'));
        SEOTools::twitter()->setImage(asset('/images/blog-og-image.jpg'));
        SEOTools::twitter()->setType('summary_large_image');
        
        SEOTools::jsonLd()->setTitle($title);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->addImage(asset('/images/blog-og-image.jpg'));
        SEOTools::jsonLd()->setType('WebPage');
        SEOTools::jsonLd()->addValue('url', url('/blog'));
    }
    
    /**
     * Setup SEO data for a generic page
     *
     * @param string $title The page title
     * @param string $description The page description
     * @param string $path The page path (defaults to current URL path)
     * @return void
     */
    public function setupGenericPageSeo(string $title, string $description, string $path = null): void
    {
        $fullTitle = $title . ' | Ghost Theme';
        $path = $path ?? request()->path();
        $url = url('/' . ltrim($path, '/'));
        
        SEOTools::setTitle($fullTitle);
        SEOTools::setDescription($description);
        SEOTools::setCanonical($url);
        
        SEOTools::opengraph()->setTitle($fullTitle);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl($url);
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('/images/og-image.jpg'));
        
        SEOTools::twitter()->setTitle($fullTitle);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl($url);
        SEOTools::twitter()->setImage(asset('/images/og-image.jpg'));
        SEOTools::twitter()->setType('summary_large_image');
        
        SEOTools::jsonLd()->setTitle($fullTitle);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->addImage(asset('/images/og-image.jpg'));
        SEOTools::jsonLd()->setType('WebPage');
        SEOTools::jsonLd()->addValue('url', $url);
    }
    
    /**
     * Extract slug from the detail URL
     *
     * @param string $url
     * @return string
     */
    private function extractSlugFromUrl($url)
    {
        $parts = explode('/', rtrim($url, '/'));
        return end($parts);
    }
} 