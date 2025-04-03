<?php

namespace App\Http\Controllers;

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
     * Create a new controller instance.
     *
     * @param ThemeDataService $themeDataService
     * @return void
     */
    public function __construct(ThemeDataService $themeDataService)
    {
        $this->themeDataService = $themeDataService;
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
        return view('themes.index');
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
        $relatedThemes = collect($this->themeDataService->getThemes())
            ->filter(function($item) use ($theme) {
                return $item['name'] !== $theme['name'];
            })
            ->take(3)
            ->all();
            
        return view('themes.details', compact('theme', 'relatedThemes'));
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