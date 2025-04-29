<?php

namespace App\Http\Controllers;

use App\Services\EnhancedSeoService;
use App\Services\ThemeDataService;
use Illuminate\Http\Request;

class PageController extends Controller
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
     * Show the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        // Setup SEO
        $this->seoService->setupAboutPageSeo();
        
        // Get data for footer
        $footerLinks = $this->themeDataService->getFooterLinks();
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('pages.about', compact('footerLinks', 'socialLinks'));
    }

    /**
     * Show the terms page.
     *
     * @return \Illuminate\View\View
     */
    public function terms()
    {
        // Setup SEO
        $this->seoService->setupTermsPageSeo();
        
        // Get data for footer
        $footerLinks = $this->themeDataService->getFooterLinks();
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('pages.terms', compact('footerLinks', 'socialLinks'));
    }

    /**
     * Show the privacy page.
     *
     * @return \Illuminate\View\View
     */
    public function privacy()
    {
        // Setup SEO
        $this->seoService->setupPrivacyPageSeo();
        
        // Get data for footer
        $footerLinks = $this->themeDataService->getFooterLinks();
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('pages.privacy', compact('footerLinks', 'socialLinks'));
    }

    /**
     * Show the blog page.
     *
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        // Setup SEO
        $this->seoService->setupBlogPageSeo();
        
        // Get data for footer
        $footerLinks = $this->themeDataService->getFooterLinks();
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('pages.blog', compact('footerLinks', 'socialLinks'));
    }
    
    /**
     * Show the documentation page.
     *
     * @return \Illuminate\View\View
     */
    public function documentation()
    {
        // Setup SEO
        $this->seoService->setupGenericPageSeo('Documentation', 'Learn how to install, configure, and customize our Ghost themes.');
        
        // Get data for footer
        $footerLinks = $this->themeDataService->getFooterLinks();
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('pages.documentation', compact('footerLinks', 'socialLinks'));
    }
    
    /**
     * Show the support page.
     *
     * @return \Illuminate\View\View
     */
    public function support()
    {
        // Setup SEO
        $this->seoService->setupGenericPageSeo('Support', 'Get help with our Ghost themes. Find answers to your questions and get in touch with our support team.');
        
        // Get data for footer
        $footerLinks = $this->themeDataService->getFooterLinks();
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('pages.support', compact('footerLinks', 'socialLinks'));
    }
    
    /**
     * Show the FAQs page.
     *
     * @return \Illuminate\View\View
     */
    public function faqs()
    {
        // Setup SEO
        $this->seoService->setupGenericPageSeo('Frequently Asked Questions', 'Find answers to common questions about our Ghost themes, purchasing, installation, and support.');
        
        // Get data for footer
        $footerLinks = $this->themeDataService->getFooterLinks();
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('pages.faqs', compact('footerLinks', 'socialLinks'));
    }
    
    /**
     * Show the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        // Setup SEO
        $this->seoService->setupGenericPageSeo('Contact Us', 'Get in touch with our team. We\'re here to help with your Ghost theme questions and needs.');
        
        // Get data for footer
        $footerLinks = $this->themeDataService->getFooterLinks();
        $socialLinks = $this->themeDataService->getSocialLinks();
        
        return view('pages.contact', compact('footerLinks', 'socialLinks'));
    }
} 