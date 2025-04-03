<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Premium Ghost CMS Themes by Anisul Kibria' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B4NFMJ7ZXD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-B4NFMJ7ZXD');
    </script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">
    <!-- Navigation -->
    @include('partials.navigation')

    <!-- Main Content -->
    {{ $slot }}

    <!-- Footer -->
    @include('partials.footer', ['footerLinks' => $footerLinks ?? [], 'socialLinks' => $socialLinks ?? []])
</body>
</html> 