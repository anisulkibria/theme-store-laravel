<?php

namespace App\Http\Controllers;

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
     * Show the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Since we're using view composer in AppServiceProvider, 
        // the data is already available to all views
        return view('home');
    }
} 