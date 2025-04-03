<footer class="relative bg-gray-100 text-gray-700 pt-16 pb-12 overflow-hidden border-t border-gray-200">
    <!-- Decorative elements -->
    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-primary via-indigo-400 to-purple-600"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid md:grid-cols-4 gap-10">
            <!-- Brand column -->
            <div class="md:col-span-1">
                <div>
                    <img src="/images/ghost-theme-logo.png" alt="Ghost Theme Logo" class="h-10 w-auto mb-4">
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Premium Ghost CMS themes for bloggers and content creators.
                    </p>
                </div>
            </div>
            
            <!-- Quick links -->
            <div class="md:col-span-3">
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-8">
                    <div>
                        <h4 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Themes</h4>
                        <ul class="space-y-2 text-sm">
                            @foreach($footerLinks['themes'] as $link)
                            <li><a href="{{ $link['url'] }}" class="text-gray-600 hover:text-primary transition duration-150">{{ $link['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Support</h4>
                        <ul class="space-y-2 text-sm">
                            @foreach($footerLinks['support'] as $link)
                            <li><a href="{{ $link['url'] }}" class="text-gray-600 hover:text-primary transition duration-150">{{ $link['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Company</h4>
                        <ul class="space-y-2 text-sm">
                            @foreach($footerLinks['company'] as $link)
                            <li><a href="{{ $link['url'] }}" class="text-gray-600 hover:text-primary transition duration-150">{{ $link['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t border-gray-200 flex flex-col sm:flex-row justify-between items-center">
            <p class="text-xs text-gray-500">&copy; {{ date('Y') }} Ghost Theme - All Rights Reserved</p>
            <p class="text-xs text-gray-500 mt-2 sm:mt-0">Designed and Developed by <a href="#" class="text-primary hover:text-indigo-400 transition duration-150">Anisul Kibria</a></p>
            <div class="flex space-x-4 mt-4 sm:mt-0">
                @foreach($socialLinks as $social)
                <a href="{{ $social['url'] }}" class="text-gray-400 hover:text-primary transition duration-150">
                    <i class="{{ $social['icon'] }}"></i>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</footer> 