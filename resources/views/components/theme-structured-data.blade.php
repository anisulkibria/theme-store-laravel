<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ $theme['name'] }} Ghost Theme",
    "description": "{{ $theme['description'] }}",
    "image": "{{ asset($theme['image']) }}",
    "brand": {
        "@type": "Brand",
        "name": "Ghost Theme"
    },
    "offers": {
        "@type": "Offer",
        "url": "{{ url()->current() }}",
        "priceCurrency": "USD",
        "price": "{{ $theme['price'] }}",
        "availability": "https://schema.org/InStock"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "{{ $theme['rating'] }}",
        "bestRating": "5",
        "worstRating": "1",
        "ratingCount": "{{ $theme['sales'] ?? '100' }}"
    }
}
</script> 