<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theme;
use App\Models\Testimonial;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Themes
        Theme::create([
            'name' => 'Acceler',
            'image' => '/images/acceler-1.webp',
            'price' => '9',
            'rating' => '4.9',
            'description' => 'Bootstrap Ghost theme with 2 hours free customization service. Speed, simplicity, and style.',
            'detail_url' => '/themes/acceler',
            'demo_url' => 'https://acceler.ghost-theme.com',
            'purchase_url' => 'https://anisul.lemonsqueezy.com/buy/d5cc9715-97ed-4e05-bfdc-0bee0bd5ed69',
            'sales' => '50+',
            'full_description' => 'Acceler is a modern, responsive Ghost theme built with Bootstrap 5. It\'s designed to provide a fast, clean, and professional look for your blog or content website. The theme comes with a variety of features and customization options to help you create the perfect website for your needs.',
            'key_benefits' => [
                'Lightning-fast performance optimized for Ghost CMS',
                'Mobile-first responsive design that works on all devices',
                'Built with Bootstrap 5 for easy customization',
                'Dark mode support for better reading experience',
                'SEO optimized structure',
                'Regular updates and support'
            ],
            'technical_details' => [
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
            'design_features' => [
                'Responsive design for all devices',
                'Dark mode support',
                'Customizable color schemes',
                'Typography optimization'
            ],
            'technical_features' => [
                'Bootstrap 5 integration',
                'SEO optimized structure',
                'Fast loading performance',
                'Cross-browser compatibility'
            ],
            'preview_images' => [
                '/images/acceler-1.webp'
            ],
            'is_active' => true,
            'sort_order' => 1,
        ]);

        Theme::create([
            'name' => 'Bloggie',
            'image' => '/images/bloggie.jpg',
            'price' => '19',
            'rating' => '5.0',
            'description' => 'Bloggie - A clean, minimal, and modern theme for the Ghost publishing platform. Designed for bloggers, content creators, and publishers who want a professional and elegant website',
            'detail_url' => '/themes/bloggie',
            'purchase_url' => 'https://shop.ghost-theme.com/buy/96bf281d-23e3-4767-ae4c-c08180f8c369',
            'demo_url' => 'https://bloggie.ghost-theme.com',
            'sales' => '30+',
            'full_description' => 'Bloggie ia a clean, minimal, and modern theme for the Ghost publishing platform. Designed for bloggers, content creators, and publishers who want a professional and elegant website.',
            'key_benefits' => [
                'Lightning-fast performance optimized for Ghost CMS',
                'Mobile-first responsive design that works on all devices',
                'Built with TailwindCSS for easy customization',
                'Dark mode support for better reading experience',
                'SEO optimized structure',
                'Regular updates and support'
            ],
            'technical_details' => [
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
            'design_features' => [
                'Responsive design for all devices',
                'Dark mode support',
                'Customizable color schemes',
                'Typography optimization'
            ],
            'technical_features' => [
                'TailwindCSS integration',
                'SEO optimized structure',
                'Fast loading performance',
                'Cross-browser compatibility'
            ],
            'preview_images' => [
                '/images/bloggie.jpg'
            ],
            'is_active' => true,
            'sort_order' => 2,
        ]);

        Theme::create([
            'name' => 'Colore',
            'image' => '/images/colore-1-768x559.webp',
            'price' => '9',
            'rating' => '4.8',
            'description' => 'A clean and simple premium Ghost theme with elegant design and modern features.',
            'detail_url' => '/themes/colore',
            'purchase_url' => 'https://anisul.lemonsqueezy.com/buy/d5cc9715-97ed-4e05-bfdc-0bee0bd5ed69',
            'sales' => '15+',
            'features' => [
                'Colorful Design',
                'Modern Layout',
                'Custom Color Options',
                'Membership Ready'
            ],
            'preview_images' => [
                '/images/colore-1-768x559.webp',
            ],
            'is_active' => true,
            'sort_order' => 3,
        ]);

        // Seed Testimonials
        Testimonial::create([
            'quote' => 'The Acceler theme completely transformed my blog. It\'s fast, beautiful, and my readers love the experience.',
            'name' => 'Marlon Misra',
            'title' => 'Cofounder/CEO',
            'avatar' => '/images/avatar-1.jpg',
            'rating' => 5,
            'date' => '2 months ago',
            'is_active' => true,
            'sort_order' => 1,
        ]);

        Testimonial::create([
            'quote' => 'I\'ve tried many Ghost themes, but the quality and support I get from Ghost Theme is unmatched. Highly recommended!',
            'name' => 'Sarah Kloboves',
            'title' => 'Content and Marketing Manager',
            'avatar' => '/images/avatar-2.jpg',
            'rating' => 5,
            'date' => '1 month ago',
            'is_active' => true,
            'sort_order' => 2,
        ]);

        Testimonial::create([
            'quote' => 'The customization service was a game-changer for me. I got exactly what I wanted without needing to touch any code.',
            'name' => 'Fouad AlFarhan',
            'title' => 'Co-Founder',
            'avatar' => '/images/avatar-3.jpg',
            'rating' => 5,
            'date' => '2 weeks ago',
            'is_active' => true,
            'sort_order' => 3,
        ]);
    }
}
