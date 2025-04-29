@php
    // Set default values if $seo is empty or keys are missing
    $defaults = [
        'title' => 'Ghost Themes - Premium Ghost CMS Themes Collection',
        'description' => 'Discover beautifully designed, responsive Ghost themes for your blog or website.',
        'keywords' => 'ghost themes, ghost cms, blog themes, premium themes',
        'canonical' => url()->current(),
        'og_url' => url()->current(),
        'og_title' => 'Ghost Themes - Premium Ghost CMS Themes Collection',
        'og_description' => 'Discover beautifully designed, responsive Ghost themes for your blog or website.',
        'og_image' => asset('/images/og-image.jpg'),
        'twitter_card' => 'summary_large_image',
        'twitter_title' => 'Ghost Themes - Premium Ghost CMS Themes Collection',
        'twitter_description' => 'Discover beautifully designed, responsive Ghost themes for your blog or website.',
        'twitter_image' => asset('/images/og-image.jpg'),
    ];
    
    // Merge defaults with provided $seo data
    $seo = isset($seo) && is_array($seo) ? array_merge($defaults, $seo) : $defaults;
@endphp

<!-- SEO Meta Tags -->
<title>{{ $seo['title'] }}</title>
<meta name="description" content="{{ $seo['description'] }}">
<meta name="keywords" content="{{ $seo['keywords'] }}">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ $seo['canonical'] }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $seo['og_url'] }}">
<meta property="og:title" content="{{ $seo['og_title'] }}">
<meta property="og:description" content="{{ $seo['og_description'] }}">
<meta property="og:image" content="{{ $seo['og_image'] }}">

<!-- Twitter -->
<meta property="twitter:card" content="{{ $seo['twitter_card'] }}">
<meta property="twitter:url" content="{{ $seo['og_url'] }}">
<meta property="twitter:title" content="{{ $seo['twitter_title'] }}">
<meta property="twitter:description" content="{{ $seo['twitter_description'] }}">
<meta property="twitter:image" content="{{ $seo['twitter_image'] }}">

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "{{ $seo['title'] }}",
    "description": "{{ $seo['description'] }}",
    "url": "{{ url('/') }}"
}
</script> 