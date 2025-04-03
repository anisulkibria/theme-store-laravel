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
                'detailUrl' => 'acceler.html',
                'purchaseUrl' => 'https://anisul.lemonsqueezy.com/buy/d5cc9715-97ed-4e05-bfdc-0bee0bd5ed69'
            ],
            [
                'name' => 'Colore',
                'image' => '/images/colore-1-768x559.webp',
                'price' => '59',
                'rating' => '4.8',
                'description' => 'A clean and simple premium Ghost theme with elegant design and modern features.',
                'detailUrl' => '#',
                'purchaseUrl' => 'https://anisul.lemonsqueezy.com/buy/d5cc9715-97ed-4e05-bfdc-0bee0bd5ed69'
            ],
            [
                'name' => 'Limite',
                'image' => '/images/limite-1-768x557.webp',
                'price' => '49',
                'rating' => '4.7',
                'description' => 'A clean and simple premium Ghost theme with minimalist design and great readability.',
                'detailUrl' => '#',
                'purchaseUrl' => '#'
            ],
            [
                'name' => 'Agreable',
                'image' => '/images/agreeable-1-768x576.webp',
                'price' => '39',
                'rating' => '4.9',
                'description' => 'A clean and simple premium Ghost theme perfect for personal blogs and publications.',
                'detailUrl' => '#',
                'purchaseUrl' => '#'
            ],
            [
                'name' => 'Facile',
                'image' => '/images/facile-768x572.webp',
                'price' => '45',
                'rating' => '4.8',
                'description' => 'A very clean and simple premium Ghost theme with elegant design and smooth interactions.',
                'detailUrl' => '#',
                'purchaseUrl' => '#'
            ],
            [
                'name' => 'Noire',
                'image' => '/images/noir-768x593.webp',
                'price' => '65',
                'rating' => '5.0',
                'description' => 'A striking black premium Ghost theme perfect for photography and creative portfolios.',
                'detailUrl' => '#',
                'purchaseUrl' => '#'
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
                'title' => 'Food Blogger'
            ],
            [
                'quote' => 'I\'ve tried many Ghost themes, but the quality and support I get from Ghost Theme is unmatched. Highly recommended!',
                'name' => 'Mark Thompson',
                'title' => 'Tech Writer'
            ],
            [
                'quote' => 'The customization service was a game-changer for me. I got exactly what I wanted without needing to touch any code.',
                'name' => 'Jessica Lee',
                'title' => 'Lifestyle Blogger'
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
                ['label' => 'Acceler', 'url' => '#'],
                ['label' => 'Colore', 'url' => '#'],
                ['label' => 'Limite', 'url' => '#'],
                ['label' => 'Agreable', 'url' => '#'],
                ['label' => 'Facile', 'url' => '#'],
                ['label' => 'Noire', 'url' => '#']
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