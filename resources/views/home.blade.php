<x-app-layout :footer-links="$footerLinks" :social-links="$socialLinks">
    <x-hero />
    
    <x-themes :themes="$themes" />
    
    <x-features />
    
    <x-testimonials :testimonials="$testimonials" />
    
    <x-contact :form-action="'https://formspree.io/f/xrgwobbq'" :social-links="$socialLinks" />
</x-app-layout> 