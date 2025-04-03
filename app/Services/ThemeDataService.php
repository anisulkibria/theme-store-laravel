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
                'price' => '49',
                'rating' => '4.9',
                'description' => 'Bootstrap Ghost theme with 2 hours free customization service. Speed, simplicity, and style.',
                'detailUrl' => '/themes/acceler',
                'purchaseUrl' => 'https://anisul.lemonsqueezy.com/buy/d5cc9715-97ed-4e05-bfdc-0bee0bd5ed69',
                'sales' => '500+',
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
                    '/images/acceler-1.webp',
                    '/images/acceler-2.webp',
                    '/images/acceler-3.webp',
                    '/images/acceler-4.webp'
                ]
            ],
            [
                'name' => 'Colore',
                'image' => '/images/colore-1-768x559.webp',
                'price' => '59',
                'rating' => '4.8',
                'description' => 'A clean and simple premium Ghost theme with elegant design and modern features.',
                'detailUrl' => '/themes/colore',
                'purchaseUrl' => 'https://anisul.lemonsqueezy.com/buy/d5cc9715-97ed-4e05-bfdc-0bee0bd5ed69',
                'sales' => '450+',
                'features' => [
                    'Colorful Design',
                    'Modern Layout',
                    'Custom Color Options',
                    'Membership Ready'
                ],
                'previewImages' => [
                    '/images/colore-1-768x559.webp',
                ]
            ],
            [
                'name' => 'Limite',
                'image' => '/images/limite-1-768x557.webp',
                'price' => '49',
                'rating' => '4.7',
                'description' => 'A clean and simple premium Ghost theme with minimalist design and great readability.',
                'detailUrl' => '/themes/limite',
                'purchaseUrl' => '#',
                'sales' => '350+',
                'features' => [
                    'Minimalist Design',
                    'Focus on Typography',
                    'Clean Reading Experience',
                    'Fast Performance'
                ],
                'previewImages' => [
                    '/images/limite-1-768x557.webp',
                ]
            ],
            [
                'name' => 'Agreable',
                'image' => '/images/agreeable-1-768x576.webp',
                'price' => '39',
                'rating' => '4.9',
                'description' => 'A clean and simple premium Ghost theme perfect for personal blogs and publications.',
                'detailUrl' => '/themes/agreable',
                'purchaseUrl' => '#',
                'sales' => '400+',
                'features' => [
                    'Personal Blog Focus',
                    'Author Showcase',
                    'Related Posts',
                    'Newsletter Integration'
                ],
                'previewImages' => [
                    '/images/agreeable-1-768x576.webp',
                ]
            ],
            [
                'name' => 'Facile',
                'image' => '/images/facile-768x572.webp',
                'price' => '45',
                'rating' => '4.8',
                'description' => 'A very clean and simple premium Ghost theme with elegant design and smooth interactions.',
                'detailUrl' => '/themes/facile',
                'purchaseUrl' => '#',
                'sales' => '300+',
                'features' => [
                    'Easy Setup',
                    'Smooth Animations',
                    'Elegant Design',
                    'Mobile Optimized'
                ],
                'previewImages' => [
                    '/images/facile-768x572.webp',
                ]
            ],
            [
                'name' => 'Noire',
                'image' => '/images/noir-768x593.webp',
                'price' => '65',
                'rating' => '5.0',
                'description' => 'A striking black premium Ghost theme perfect for photography and creative portfolios.',
                'detailUrl' => '/themes/noire',
                'purchaseUrl' => '#',
                'sales' => '250+',
                'features' => [
                    'Dark Mode by Default',
                    'Photography Focus',
                    'Portfolio Layouts',
                    'Advanced Image Handling'
                ],
                'previewImages' => [
                    '/images/noir-768x593.webp',
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
                'name' => 'Sarah Johnson',
                'title' => 'Food Blogger',
                'avatar' => '/images/avatar-1.jpeg',
                'rating' => 5,
                'date' => '2 months ago'
            ],
            [
                'quote' => 'I\'ve tried many Ghost themes, but the quality and support I get from Ghost Theme is unmatched. Highly recommended!',
                'name' => 'Mark Thompson',
                'title' => 'Tech Writer',
                'avatar' => '/images/avatar-2.jpeg',
                'rating' => 5,
                'date' => '1 month ago'
            ],
            [
                'quote' => 'The customization service was a game-changer for me. I got exactly what I wanted without needing to touch any code.',
                'name' => 'Jessica Lee',
                'title' => 'Lifestyle Blogger',
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
                'url' => '#'
            ],
            [
                'icon' => 'fab fa-instagram',
                'url' => '#'
            ],
            [
                'icon' => 'fab fa-github',
                'url' => '#'
            ],
            [
                'icon' => 'fab fa-linkedin-in',
                'url' => '#'
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
                ['label' => 'Limite', 'url' => '/themes/limite'],
                ['label' => 'Agreable', 'url' => '/themes/agreable'],
                ['label' => 'Facile', 'url' => '/themes/facile'],
                ['label' => 'Noire', 'url' => '/themes/noire']
            ],
            'support' => [
                ['label' => 'Documentation', 'url' => '#'],
                ['label' => 'Support', 'url' => '#'],
                ['label' => 'FAQs', 'url' => '#'],
                ['label' => 'Contact', 'url' => '#']
            ],
            'company' => [
                ['label' => 'About', 'url' => '#'],
                ['label' => 'Blog', 'url' => '#'],
                ['label' => 'Privacy', 'url' => '#'],
                ['label' => 'Terms', 'url' => '#']
            ]
        ];
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