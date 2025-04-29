<?php

namespace App\Services;

class SeoService
{
    /**
     * Get default SEO data
     * 
     * @return array
     */
    public function getDefaultSeoData(): array
    {
        return [
            'title' => 'Premium Ghost CMS Themes by Anisul Kibria',
            'description' => 'Discover beautifully designed, responsive Ghost themes that transform your blog into a professional online presence.',
            'keywords' => 'ghost themes, ghost cms, blog themes, premium themes, responsive themes',
            'og_title' => 'Premium Ghost CMS Themes by Anisul Kibria',
            'og_description' => 'Discover beautifully designed, responsive Ghost themes that transform your blog into a professional online presence.',
            'og_image' => asset('/images/og-image.jpg'),
            'og_url' => url()->current(),
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'Premium Ghost CMS Themes by Anisul Kibria',
            'twitter_description' => 'Discover beautifully designed, responsive Ghost themes that transform your blog into a professional online presence.',
            'twitter_image' => asset('/images/twitter-image.jpg'),
            'canonical' => url()->current(),
        ];
    }
    
    /**
     * Get home page SEO data
     * 
     * @return array
     */
    public function getHomePageSeoData(): array
    {
        return [
            'title' => 'Premium Ghost CMS Themes | Beautiful and Responsive Designs',
            'description' => 'Elevate your Ghost blog with our collection of premium, responsive themes. Designed for performance, SEO, and user experience.',
            'keywords' => 'ghost themes, ghost cms, blog themes, premium themes, responsive themes, ghost blog themes',
            'og_title' => 'Premium Ghost CMS Themes | Beautiful and Responsive Designs',
            'og_description' => 'Elevate your Ghost blog with our collection of premium, responsive themes. Designed for performance, SEO, and user experience.',
            'og_image' => asset('/images/og-image.jpg'),
            'og_url' => url('/'),
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'Premium Ghost CMS Themes | Beautiful and Responsive Designs',
            'twitter_description' => 'Elevate your Ghost blog with our collection of premium, responsive themes. Designed for performance, SEO, and user experience.',
            'twitter_image' => asset('/images/og-image.jpg'),
            'canonical' => url('/'),
        ];
    }
    
    /**
     * Get themes page SEO data
     * 
     * @return array
     */
    public function getThemesPageSeoData(): array
    {
        return [
            'title' => 'Browse Our Premium Ghost Themes | Modern & Responsive',
            'description' => 'Explore our collection of premium Ghost themes. Each theme is crafted with attention to detail, ensuring a perfect showcase for your content.',
            'keywords' => 'ghost themes, premium themes, ghost cms themes, responsive themes, blog themes, ghost theme collection',
            'og_title' => 'Browse Our Premium Ghost Themes | Modern & Responsive',
            'og_description' => 'Explore our collection of premium Ghost themes. Each theme is crafted with attention to detail, ensuring a perfect showcase for your content.',
            'og_image' => asset('/images/themes-og-image.jpg'),
            'og_url' => url('/themes'),
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'Browse Our Premium Ghost Themes | Modern & Responsive',
            'twitter_description' => 'Explore our collection of premium Ghost themes. Each theme is crafted with attention to detail, ensuring a perfect showcase for your content.',
            'twitter_image' => asset('/images/themes-og-image.jpg'),
            'canonical' => url('/themes'),
        ];
    }
    
    /**
     * Get theme detail page SEO data
     * 
     * @param array $theme
     * @return array
     */
    public function getThemeDetailSeoData(array $theme): array
    {
        // Extract features for keywords
        $featureKeywords = '';
        if (isset($theme['features']) && is_array($theme['features'])) {
            $featureKeywords = strtolower(implode(', ', array_slice($theme['features'], 0, 3)));
        }
        
        // Create a more descriptive title
        $title = "{$theme['name']} - Premium Ghost Theme";
        if (isset($theme['price'])) {
            $title .= " | \${$theme['price']}";
        }
        
        // Create a more descriptive meta description using the theme description
        $baseDescription = $theme['description'] ?? "Discover the {$theme['name']} theme for Ghost CMS";
        $description = $baseDescription;
        
        // Add features to description if available
        if (isset($theme['features']) && count($theme['features']) > 0) {
            $featuresText = ' Features include: ' . implode(', ', array_slice($theme['features'], 0, 3));
            // Make sure description with features doesn't exceed reasonable meta description length
            if (strlen($baseDescription . $featuresText) <= 160) {
                $description .= $featuresText;
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
        if (isset($theme['features']) && count($theme['features']) > 0) {
            foreach (array_slice($theme['features'], 0, 3) as $feature) {
                $keywordParts[] = strtolower($feature);
            }
        }
        
        $keywords = implode(', ', $keywordParts);
        
        // Use theme image for social shares if available
        $image = $theme['image'] ? asset($theme['image']) : asset('/images/og-image.jpg');
        
        return [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'og_title' => $title,
            'og_description' => $description,
            'og_image' => $image,
            'og_url' => url("/themes/{$theme['slug']}"),
            'twitter_card' => 'summary_large_image',
            'twitter_title' => $title,
            'twitter_description' => $description,
            'twitter_image' => $image,
            'canonical' => url("/themes/{$theme['slug']}"),
        ];
    }
} 