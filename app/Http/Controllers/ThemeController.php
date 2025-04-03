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
     * Example of using the data in a view.
     *
     * @return \Illuminate\View\View
     */
    public function showThemesPage()
    {
        // Since we're using view composer, you don't need to pass the data
        // to the view. It's already available.
        return view('theme');
        
        // Alternatively, if you need specific data or need to transform it:
        // $specificTheme = $this->themeDataService->getThemes()[0];
        // return view('theme-detail', ['theme' => $specificTheme]);
    }
} 