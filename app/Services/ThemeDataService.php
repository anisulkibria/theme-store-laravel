<?php

namespace App\Services;

class ThemeDataService
{
    /**
     * Get all theme data
     *
     * @return array
     */
    public function getThemes(): array
    {
        return [
            [
                'name' => 'Acceler',
                'image' => '/images/acceler-1.webp',
                'price' => '9',
                'rating' => '4.9',
                'description' => 'Bootstrap Ghost theme with 2 hours free customization service. Speed, simplicity, and style.',
                'detailUrl' => '/themes/acceler',
                'demoUrl' => 'https://acceler.ghost-theme.com',
                'purchaseUrl' => 'https://anisul.lemonsqueezy.com/buy/d5cc9715-97ed-4e05-bfdc-0bee0bd5ed69',
                'sales' => '50+',
                'fullDescription' => 'Acceler is a modern, responsive Ghost theme built with Bootstrap 5. It\'s designed to provide a fast, clean, and professional look for your blog or content website. The theme comes with a variety of features and customization options to help you create the perfect website for your needs.',
                'keyBenefits' => [
                    'Lightning-fast performance optimized for Ghost CMS',
                    'Mobile-first responsive design that works on all devices',
                    'Built with Bootstrap 5 for easy customization',
                    'Dark mode support for better reading experience',
                    'SEO optimized structure',
                    'Regular updates and support'
                ],
                'technicalDetails' => [
                    'Compatible with Ghost 5.x',
                    'Built with Bootstrap 5',
                    'Uses modern CSS features',
                    'Optimized for performance',
                    'Includes documentation'
                ],
                'features' => [
                    'Responsive Design',
                    'Bootstrap 5 Framework',
                    'Dark Mode Support',
                    'Customizable Colors'
                ],
                'designFeatures' => [
                    'Responsive design for all devices',
                    'Dark mode support',
                    'Customizable color schemes',
                    'Typography optimization'
                ],
                'technicalFeatures' => [
                    'Bootstrap 5 integration',
                    'SEO optimized structure',
                    'Fast loading performance',
                    'Cross-browser compatibility'
                ],
                'previewImages' => [
                    '/images/acceler-1.webp'
                ]
            ],
            [
                'name' => 'Bloggie',
                'image' => '/images/bloggie.jpg',
                'price' => '19',
                'rating' => '5.0',
                'description' => 'Bloggie - A clean, minimal, and modern theme for the Ghost publishing platform. Designed for bloggers, content creators, and publishers who want a professional and elegant website',
                'detailUrl' => '/themes/bloggie',
                'purchaseUrl' => 'https://shop.ghost-theme.com/buy/96bf281d-23e3-4767-ae4c-c08180f8c369',
                'demoUrl' => 'https://bloggie.ghost-theme.com',
                'sales' => '30+',
                'fullDescription' => 'Bloggie ia a clean, minimal, and modern theme for the Ghost publishing platform. Designed for bloggers, content creators, and publishers who want a professional and elegant website.',
                'keyBenefits' => [
                    'Lightning-fast performance optimized for Ghost CMS',
                    'Mobile-first responsive design that works on all devices',
                    'Built with TailwindCSS for easy customization',
                    'Dark mode support for better reading experience',
                    'SEO optimized structure',
                    'Regular updates and support'
                ],
                'technicalDetails' => [
                    'Compatible with Ghost 5.x',
                    'Built with TailwindCSS',
                    'Uses modern CSS features',
                    'Optimized for performance',
                    'Includes documentation'
                ],
                'features' => [
                    'Responsive Design',
                    'TailwindCSS',
                    'Dark Mode Support',
                    'Customizable Colors'
                ],
                'designFeatures' => [
                    'Responsive design for all devices',
                    'Dark mode support',
                    'Customizable color schemes',
                    'Typography optimization'
                ],
                'technicalFeatures' => [
                    'TailwindCSS integration',
                    'SEO optimized structure',
                    'Fast loading performance',
                    'Cross-browser compatibility'
                ],
                'previewImages' => [
                    '/images/bloggie.jpg'
                ]
            ],
            [
                'name' => 'Colore',
                'image' => '/images/colore-1-768x559.webp',
                'price' => '9',
                'rating' => '4.8',
                'description' => 'A clean and simple premium Ghost theme with elegant design and modern features.',
                'detailUrl' => '/themes/colore',
                'purchaseUrl' => 'https://anisul.lemonsqueezy.com/buy/d5cc9715-97ed-4e05-bfdc-0bee0bd5ed69',
                'sales' => '15+',
                'features' => [
                    'Colorful Design',
                    'Modern Layout',
                    'Custom Color Options',
                    'Membership Ready'
                ],
                'previewImages' => [
                    '/images/colore-1-768x559.webp',
                ]
            ]
        ];
    }

    /**
     * Get all testimonial data
     *
     * @return array
     */
    public function getTestimonials(): array
    {
        return [
            [
                'quote' => 'The Acceler theme completely transformed my blog. It\'s fast, beautiful, and my readers love the experience.',
                'name' => 'Marlon Misra',
                'title' => 'Cofounder/CEO',
                'avatar' => '/images/avatar-1.jpeg',
                'rating' => 5,
                'date' => '2 months ago'
            ],
            [
                'quote' => 'I\'ve tried many Ghost themes, but the quality and support I get from Ghost Theme is unmatched. Highly recommended!',
                'name' => 'Sarah Kloboves',
                'title' => 'Content and Marketing Manager',
                'avatar' => '/images/avatar-2.jpeg',
                'rating' => 5,
                'date' => '1 month ago'
            ],
            [
                'quote' => 'The customization service was a game-changer for me. I got exactly what I wanted without needing to touch any code.',
                'name' => 'Fouad AlFarhan',
                'title' => 'Co-Founder',
                'avatar' => '/images/avatar-3.jpeg',
                'rating' => 5,
                'date' => '2 weeks ago'
            ]
        ];
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
