<x-app-layout>
    <!-- Product Details Section -->
    <div class="py-16 md:py-24 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2 text-sm text-gray-100">
                    <li><a href="/" class="hover:text-primary">Home</a></li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="/themes" class="hover:text-primary">Themes</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-white">{{ $theme['name'] }}</span>
                    </li>
                </ol>
            </nav>

            <!-- Product Grid -->
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Product Images -->
                <div class="space-y-6">
                    <!-- Main Image -->
                    <div class="relative rounded-2xl overflow-hidden shadow-xl">
                        <img src="{{ $theme['image'] }}" alt="{{ $theme['name'] }} Theme Preview" class="w-full h-auto">
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1.5 bg-white text-primary font-bold rounded-full shadow-lg">${{ $theme['price'] }}</span>
                        </div>
                    </div>
                    
                    <!-- Thumbnail Grid -->
                    @if(isset($theme['previewImages']) && count($theme['previewImages']) > 1)
                    <div class="grid grid-cols-4 gap-4">
                        @foreach($theme['previewImages'] as $index => $image)
                        <div class="relative rounded-lg overflow-hidden cursor-pointer border-2 border-transparent hover:border-primary transition duration-200">
                            <img src="{{ $image }}" alt="{{ $theme['name'] }} Theme Preview {{ $index + 1 }}" class="w-full h-auto">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    
                    <!-- Social Share -->
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="text-sm font-medium text-gray-100 mb-3">Share this theme</h3>
                        <div class="flex space-x-4">
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($theme['name'] . ' - Premium Ghost Theme') }}" target="_blank" rel="noopener noreferrer" class="p-2 bg-[#1DA1F2] text-white rounded-full hover:bg-opacity-90 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="p-2 bg-[#1877F2] text-white rounded-full hover:bg-opacity-90 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="p-2 bg-[#0A66C2] text-white rounded-full hover:bg-opacity-90 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19.7 3H4.3A1.3 1.3 0 003 4.3v15.4A1.3 1.3 0 004.3 21h15.4a1.3 1.3 0 001.3-1.3V4.3A1.3 1.3 0 0019.7 3zM8.339 18.338H5.667v-8.59h2.672v8.59zM7.004 8.574a1.548 1.548 0 11-.002-3.096 1.548 1.548 0 01.002 3.096zm11.335 9.764H15.67v-4.177c0-.996-.017-2.278-1.387-2.278-1.389 0-1.601 1.086-1.601 2.206v4.249h-2.667v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.779 3.203 4.092v4.711z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="mailto:?subject={{ urlencode($theme['name'] . ' - Premium Ghost Theme') }}&body={{ urlencode('Check out this premium Ghost theme: ' . url()->current()) }}" class="p-2 bg-gray-500 text-white rounded-full hover:bg-opacity-90 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="space-y-8">
                    <div>
                        <h1 class="text-5xl font-bold text-white mb-4">{{ $theme['name'] }}</h1>
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1"><i class="fas fa-star"></i></span>
                                <span class="text-gray-200">{{ $theme['rating'] }}</span>
                            </div>
                            @if(isset($theme['sales']))
                            <span class="text-gray-100">|</span>
                            <span class="text-gray-100">{{ $theme['sales'] }} Sales</span>
                            @endif
                        </div>
                        <p class="text-gray-200 text-lg">{{ $theme['description'] }}</p>
                    </div>

                    <!-- Features List -->
                    @if(isset($theme['features']) && is_array($theme['features']) && count(array_filter($theme['features'])) > 0)
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-900">Key Features</h3>
                        <ul class="space-y-3">
                            @foreach($theme['features'] as $feature)
                                @if(!empty($feature))
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">{{ $feature }}</span>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Purchase Options -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-white">Purchase</h3>
                        <div class="grid gap-4">
                            <a href="{{ $theme['purchaseUrl'] }}" class="flex items-center justify-between p-4 border border-primary rounded-lg bg-primary/5">
                                <div>
                                    <h4 class="font-medium text-gray-200">Theme License</h4>
                                    <p class="text-sm text-gray-100">For a single website</p>
                                </div>
                                <span class="text-xl font-bold text-primary">${{ $theme['price'] }}</span>
                            </a>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ $theme['purchaseUrl'] }}" class="flex-1 py-3 px-6 bg-primary text-white rounded-full hover:bg-indigo-700 transition duration-150 text-center font-medium">
                            Purchase Now
                        </a>
                        @if(isset($theme['demoUrl']))<a href="{{ $theme['demoUrl'] }}" class="flex-1 py-3 px-6 border border-gray-300 rounded-full hover:border-primary transition duration-150 text-center font-medium">
                            Live Preview
                        </a>@endif
                    </div>
                </div>
            </div>

            <!-- Theme Details -->
            @if(isset($theme['detailsContent']) && !empty($theme['detailsContent']))
            <div class="mt-20">
                <div class="prose text-white prose-md max-w-none prose-headings:font-bold prose-h2:text-3xl prose-h2:mt-8 prose-h2:mb-4 prose-h3:text-xl prose-h3:mt-6 prose-h3:mb-3 prose-h2:text-white prose-h3:text-white prose-hr:border-t-gray-900 prose-p:text-gray-100 prose-p:leading-relaxed prose-p:mb-4 prose-a:text-gray-100 prose-a:no-underline hover:prose-a:underline prose-strong:text-white prose-strong:font-semibold prose-ul:list-disc prose-ul:pl-6 prose-ul:mb-4 prose-ol:list-decimal prose-ol:pl-6 prose-ol:mb-4 prose-li:text-gray-100 prose-li:mb-1 prose-blockquote:border-l-4 prose-blockquote:border-primary prose-blockquote:pl-4 prose-blockquote:italic prose-blockquote:text-gray-200 prose-code:bg-gray-100 prose-code:px-2 prose-code:py-1 prose-code:rounded prose-code:text-sm prose-code:text-gray-800 prose-pre:bg-gray-900 prose-pre:text-gray-100 prose-pre:p-4 prose-pre:rounded-lg prose-pre:overflow-x-auto">
                    {!! $theme['detailsContent'] !!}
                </div>
            </div>
            @endif

            <!-- Related Themes -->
            @if(isset($relatedThemes) && count($relatedThemes) > 0)
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-gray-100 mb-8">Related Themes</h2>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($relatedThemes as $relatedTheme)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative pb-64">
                            <img class="absolute h-full w-full object-cover" src="{{ $relatedTheme['image'] }}" alt="{{ $relatedTheme['name'] }} theme preview">
                            <div class="absolute inset-0 bg-gradient-to-t from-black opacity-60"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <span class="px-2 py-1 text-xs font-semibold bg-primary rounded-md">Premium</span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1.5 bg-white text-primary font-bold rounded-full shadow-lg">${{ $relatedTheme['price'] }}</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $relatedTheme['name'] }}</h3>
                            <p class="text-gray-600 mb-5">{{ $relatedTheme['description'] }}</p>
                            <a href="{{ $relatedTheme['detailUrl'] }}" class="group inline-flex items-center text-primary font-medium">
                                <span class="border-b border-transparent group-hover:border-primary transition-all duration-200">View Details</span>
                                <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout> 