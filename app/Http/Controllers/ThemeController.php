<?php

namespace App\Http\Controllers;

use App\Services\EnhancedSeoService;
use App\Services\ThemeDataService;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * The ThemeDataService instance.
     *
     * @var ThemeDataService
     */
    protected $themeDataService;

    /**
     * The EnhancedSeoService instance.
     *
     * @var EnhancedSeoService
     */
    protected $seoService;

    /**
     * Create a new controller instance.
     *
     * @param ThemeDataService $themeDataService
     * @param EnhancedSeoService $seoService
     * @return void
     */
    public function __construct(ThemeDataService $themeDataService, EnhancedSeoService $seoService)
    {
        $this->themeDataService = $themeDataService;
        $this->seoService = $seoService;
    }

    /**
     * Example of getting all data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllData()
    {
        // Get all data from the service
        $data = $this->themeDataService->getAllData();
        
        // You can return it as JSON for an API
        return response()->json($data);
    }

    /**
     * Example of getting specific data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getThemesData()
    {
        // Get just the themes data
        $themes = $this->themeDataService->getThemes();
        
        return response()->json($themes);
    }
    
    /**
     * Show the themes page.
     *
     * @return \Illuminate\View\View
     */
    public function showThemesPage()
    {
        // Get all themes
        $themes = $this->themeDataService->getThemes();
        
        // Get testimonials
        $testimonials = $this->themeDataService->getTestimonials();
        
        // Get footer links
        $footerLinks = $this->themeDataService->getFooterLinks();
        
        // Get social links
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        // Setup SEO data for the themes page
        $this->seoService->setupThemesPageSeo();
        
        return view('themes.index', compact('themes', 'testimonials', 'footerLinks', 'socialLinks'));
    }

    /**
     * Show a specific theme details page.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function showThemeDetails($slug)
    {
        $theme = $this->findThemeBySlug($slug);
        
        if (!$theme) {
            abort(404);
        }
        
        // Get related themes (excluding the current theme)
        $relatedThemes = $this->themeDataService->getRelatedThemes($slug, 3);
        
        // Get testimonials
        $testimonials = $this->themeDataService->getTestimonials();
        
        // Get footer links
        $footerLinks = $this->themeDataService->getFooterLinks();
        
        // Get social links
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        // Setup SEO data for the theme details page
        $this->seoService->setupThemeDetailPageSeo($theme);
            
        return view('themes.details', compact('theme', 'relatedThemes', 'testimonials', 'footerLinks', 'socialLinks'));
    }
    
    /**
     * Find a theme by its URL slug.
     *
     * @param string $slug
     * @return array|null
     */
    private function findThemeBySlug($slug)
    {
        $themes = $this->themeDataService->getThemes();
        
        foreach ($themes as $theme) {
            $themeSlug = $this->generateSlug($theme['name']);
            
            if ($themeSlug === $slug) {
                // Add the slug to the theme array
                $theme['slug'] = $themeSlug;
                return $theme;
            }
        }
        
        return null;
    }
    
    /**
     * Generate a URL-friendly slug from a string.
     *
     * @param string $name
     * @return string
     */
    private function generateSlug($name)
    {
        return strtolower(str_replace(' ', '-', $name));
    }
} 