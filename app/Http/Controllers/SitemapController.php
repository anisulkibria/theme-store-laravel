<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Serve the sitemap.xml file
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = public_path('sitemap.xml');
        
        // If sitemap doesn't exist, return 404
        if (!file_exists($path)) {
            abort(404, 'Sitemap not found');
        }
        
        // Return the sitemap.xml with proper content type
        return response(file_get_contents($path))
            ->header('Content-Type', 'application/xml');
    }
} 