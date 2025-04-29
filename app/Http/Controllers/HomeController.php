<?php

namespace App\Http\Controllers;

use App\Services\EnhancedSeoService;
use App\Services\ThemeDataService;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Setup SEO data for the home page
        $this->seoService->setupHomePageSeo();
        
        // Get theme data
        $themes = $this->themeDataService->getThemes();
        
        // Get testimonials
        $testimonials = $this->themeDataService->getTestimonials();
        
        // Get footer links
        $footerLinks = $this->themeDataService->getFooterLinks();
        
        // Get social links
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('home', compact('themes', 'testimonials', 'footerLinks', 'socialLinks'));
    }
} 