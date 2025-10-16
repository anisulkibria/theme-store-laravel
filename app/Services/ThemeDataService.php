<?php

namespace App\Services;

use App\Models\Theme;
use App\Models\Testimonial;

class ThemeDataService
{
    /**
     * Get all theme data
     *
     * @return array
     */
    public function getThemes(): array
    {
        return Theme::active()
            ->ordered()
            ->get()
            ->map(function ($theme) {
                return [
                    'name' => $theme->name,
                    'image' => $theme->image ? $this->getImageUrl($theme->image) : null,
                    'price' => $theme->price,
                    'rating' => $theme->rating,
                    'description' => $theme->description,
                    'detailUrl' => $theme->detail_url,
                    'demoUrl' => $theme->demo_url,
                    'purchaseUrl' => $theme->purchase_url,
                    'sales' => $theme->sales,
                    'fullDescription' => $theme->full_description,
                    'keyBenefits' => $theme->key_benefits ?? [],
                    'technicalDetails' => $theme->technical_details ?? [],
                    'features' => $theme->features ?? [],
                    'designFeatures' => $theme->design_features ?? [],
                    'technicalFeatures' => $theme->technical_features ?? [],
                    'previewImages' => $theme->preview_images ? array_map(function($image) {
                        return $this->getImageUrl($image);
                    }, $theme->preview_images) : [],
                ];
            })
            ->toArray();
    }

    /**
     * Get all testimonial data
     *
     * @return array
     */
    public function getTestimonials(): array
    {
        return Testimonial::active()
            ->ordered()
            ->get()
            ->map(function ($testimonial) {
                return [
                    'quote' => $testimonial->quote,
                    'name' => $testimonial->name,
                    'title' => $testimonial->title,
                    'avatar' => $testimonial->avatar,
                    'rating' => $testimonial->rating,
                    'date' => $testimonial->date,
                ];
            })
            ->toArray();
    }

    /**
     * Get all social links data
     *
     * @return array
     */
    public function getSocialLinks(): array
    {
        return [
            [
                'icon' => 'fab fa-twitter',
                'url' => '#',
                'label' => 'Follow us on Twitter for latest updates and news'
            ],
            [
                'icon' => 'fab fa-instagram',
                'url' => '#',
                'label' => 'View our Instagram for theme previews and tutorials'
            ],
            [
                'icon' => 'fab fa-github',
                'url' => '#',
                'label' => 'Visit our GitHub for theme documentation and support'
            ],
            [
                'icon' => 'fab fa-linkedin-in',
                'url' => '#',
                'label' => 'Connect with us on LinkedIn for business inquiries'
            ]
        ];
    }

    /**
     * Get all footer links data
     *
     * @return array
     */
    public function getFooterLinks(): array
    {
        return [
            'themes' => [
                ['label' => 'Acceler', 'url' => '/themes/acceler'],
                ['label' => 'Colore', 'url' => '/themes/colore'],
                ['label' => 'Bloggie', 'url' => '/themes/bloggie'],
            ],
            'support' => [
                ['label' => 'Documentation', 'url' => '/documentation'],
                ['label' => 'Support', 'url' => '/support'],
                ['label' => 'FAQs', 'url' => '/faqs'],
                ['label' => 'Contact', 'url' => '/contact']
            ],
            'company' => [
                ['label' => 'About', 'url' => '/about'],
                ['label' => 'Blog', 'url' => '/blog'],
                ['label' => 'Privacy', 'url' => '/privacy'],
                ['label' => 'Terms', 'url' => '/terms']
            ]
        ];
    }

    /**
     * Get related themes for a specific theme
     * 
     * @param string $currentThemeSlug The slug of the current theme
     * @param int $limit Maximum number of related themes to return
     * @return array
     */
    public function getRelatedThemes(string $currentThemeSlug, int $limit = 3): array
    {
        $allThemes = $this->getThemes();
        $relatedThemes = [];
        $count = 0;

        foreach ($allThemes as $theme) {
            // Skip the current theme
            $themeSlug = $this->getSlugFromUrl($theme['detailUrl']);
            if ($themeSlug === $currentThemeSlug) {
                continue;
            }

            $relatedThemes[] = $theme;
            $count++;

            if ($count >= $limit) {
                break;
            }
        }

        return $relatedThemes;
    }

    /**
     * Extract slug from the URL
     * 
     * @param string $url
     * @return string
     */
    private function getSlugFromUrl(string $url): string
    {
        $parts = explode('/', rtrim($url, '/'));
        return end($parts);
    }

    /**
     * Get the full URL for an image path
     * 
     * @param string $imagePath
     * @return string
     */
    private function getImageUrl(string $imagePath): string
    {
        // If the path starts with /images/, it's a static image
        if (str_starts_with($imagePath, '/images/')) {
            return asset($imagePath);
        }
        
        // Otherwise, it's an uploaded image stored in storage
        return asset('storage/' . $imagePath);
    }

    /**
     * Get all website data
     * 
     * @return array
     */
    public function getAllData(): array
    {
        return [
            'themes' => $this->getThemes(),
            'testimonials' => $this->getTestimonials(),
            'socialLinks' => $this->getSocialLinks(),
            'footerLinks' => $this->getFooterLinks(),
        ];
    }
}
