<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ThemeDataService;
use Illuminate\Support\Facades\File;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate {--domain=ghost-theme.test}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a sitemap.xml file for the website';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(ThemeDataService $themeDataService)
    {
        // Get domain from options
        $domain = $this->option('domain');
        $baseUrl = "https://{$domain}";
        
        $this->info("Generating sitemap for {$baseUrl}...");
        
        try {
            // Generate XML content
            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
            
            // Add static pages
            $staticPages = [
                ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
                ['loc' => '/themes', 'priority' => '0.9', 'changefreq' => 'weekly'],
                ['loc' => '/about', 'priority' => '0.8', 'changefreq' => 'monthly'],
                ['loc' => '/blog', 'priority' => '0.8', 'changefreq' => 'weekly'],
                ['loc' => '/documentation', 'priority' => '0.8', 'changefreq' => 'monthly'],
                ['loc' => '/support', 'priority' => '0.8', 'changefreq' => 'monthly'],
                ['loc' => '/faqs', 'priority' => '0.8', 'changefreq' => 'monthly'],
                ['loc' => '/contact', 'priority' => '0.8', 'changefreq' => 'monthly'],
                ['loc' => '/terms', 'priority' => '0.5', 'changefreq' => 'yearly'],
                ['loc' => '/privacy', 'priority' => '0.5', 'changefreq' => 'yearly'],
            ];
            
            foreach ($staticPages as $page) {
                $xml .= $this->formatUrlXml($baseUrl . $page['loc'], $page['priority'], $page['changefreq']);
            }
            
            // Add theme pages
            $themes = $themeDataService->getThemes();
            foreach ($themes as $theme) {
                $slug = $this->generateSlug($theme['name']);
                $xml .= $this->formatUrlXml(
                    $baseUrl . "/themes/{$slug}", 
                    '0.9', 
                    'monthly'
                );
            }
            
            $xml .= '</urlset>';
            
            // Write to file - avoid using public_path helper
            $path = base_path('public/sitemap.xml');
            File::put($path, $xml);
            
            $this->info('Sitemap successfully generated at: ' . $path);
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Error generating sitemap: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
    
    /**
     * Format URL XML entry
     *
     * @param string $loc
     * @param string $priority
     * @param string $changefreq
     * @return string
     */
    protected function formatUrlXml($loc, $priority, $changefreq)
    {
        return '    <url>' . PHP_EOL .
               '        <loc>' . htmlspecialchars($loc) . '</loc>' . PHP_EOL .
               '        <changefreq>' . $changefreq . '</changefreq>' . PHP_EOL .
               '        <priority>' . $priority . '</priority>' . PHP_EOL .
               '    </url>' . PHP_EOL;
    }
    
    /**
     * Generate a slug from a theme name
     *
     * @param string $name
     * @return string
     */
    private function generateSlug($name)
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', $name));
    }
}