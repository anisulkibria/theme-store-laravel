<footer class="relative bg-gray-100 text-gray-800 pt-16 pb-12 overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-primary via-indigo-400 to-purple-600"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid md:grid-cols-4 gap-10">
            <!-- Brand column -->
            <div class="md:col-span-1">
                <div>
                    <a href="/">
                        <h2 class="text-3xl font-asv font-bold mb-2">Ghost Theme</h2>
                    </a>
                    {{-- <img src="/images/ghost-theme-logo.png" alt="Ghost Theme Logo" class="h-10 w-auto mb-4"> --}}
                    <p class="text-gray-800 text-sm leading-relaxed mb-6">
                        Ghost Theme - Premium Ghost CMS themes for bloggers and content creators.
                    </p>
                </div>
            </div>
            
            <!-- Quick links -->
            <div class="md:col-span-3">
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-8">
                    <nav aria-labelledby="themes-heading">
                        <h2 id="themes-heading" class="text-base font-semibold text-gray-900 uppercase tracking-wider mb-4">Themes</h2>
                        <ul class="space-y-2 text-sm">
                            @foreach($footerLinks['themes'] as $link)
                            <li><a href="{{ $link['url'] }}" class="text-gray-900 hover:text-indigo-900 transition duration-150 underline-offset-4 hover:underline">{{ $link['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                    
                    <nav aria-labelledby="support-heading">
                        <h2 id="support-heading" class="text-base font-semibold text-gray-900 uppercase tracking-wider mb-4">Support</h2>
                        <ul class="space-y-2 text-sm">
                            @foreach($footerLinks['support'] as $link)
                            <li><a href="{{ $link['url'] }}" class="text-gray-900 hover:text-indigo-900 transition duration-150 underline-offset-4 hover:underline">{{ $link['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                    
                    <nav aria-labelledby="company-heading">
                        <h2 id="company-heading" class="text-base font-semibold text-gray-900 uppercase tracking-wider mb-4">Company</h2>
                        <ul class="space-y-2 text-sm">
                            @foreach($footerLinks['company'] as $link)
                            <li><a href="{{ $link['url'] }}" class="text-gray-900 hover:text-indigo-900 transition duration-150 underline-offset-4 hover:underline">{{ $link['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t border-gray-200 flex flex-col sm:flex-row justify-between items-center">
            <p class="text-xs text-gray-900">&copy; {{ date('Y') }} Ghost Theme - All Rights Reserved</p>
            <p class="text-xs text-gray-900 mt-2 sm:mt-0">Designed and Developed by <a href="https://anisul.com" class="text-indigo-900 hover:text-indigo-950 transition duration-150 underline underline-offset-4 hover:underline">Anisul Kibria</a></p>
            <nav class="flex space-x-4 mt-4 sm:mt-0" aria-label="Social media links">
                @foreach($socialLinks as $social)
                    <a href="{{ $social['url'] ?? '#' }}" 
                       class="inline-flex items-center px-2 py-2 rounded-full bg-white/10 hover:bg-white/20 transition duration-200 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2"
                       aria-label="{{ $social['label'] }}"
                       title="{{ $social['label'] }}">
                        <i class="{{ $social['icon'] ?? 'fas fa-link' }} text-gray-900" aria-hidden="true"></i>
                        <span class="sr-only">{{ $social['label'] }}</span>
                    </a>
                @endforeach
            </nav>
        </div>
    </div>
</footer> 