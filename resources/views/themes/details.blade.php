<x-app-layout>
    <!-- Product Details Section -->
    <div class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2 text-sm text-gray-500">
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
                        <span class="text-gray-900">{{ $theme['name'] }} Theme</span>
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
                </div>

                <!-- Product Info -->
                <div class="space-y-8">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $theme['name'] }} Theme</h1>
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1"><i class="fas fa-star"></i></span>
                                <span class="text-gray-700">{{ $theme['rating'] }}</span>
                            </div>
                            @if(isset($theme['sales']))
                            <span class="text-gray-500">|</span>
                            <span class="text-gray-500">{{ $theme['sales'] }} Sales</span>
                            @endif
                        </div>
                        <p class="text-gray-600 text-lg">{{ $theme['description'] }}</p>
                    </div>

                    <!-- Features List -->
                    @if(isset($theme['features']))
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-900">Key Features</h3>
                        <ul class="space-y-3">
                            @foreach($theme['features'] as $feature)
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Purchase Options -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-900">Purchase</h3>
                        <div class="grid gap-4">
                            <a href="{{ $theme['purchaseUrl'] }}" class="flex items-center justify-between p-4 border border-primary rounded-lg bg-primary/5">
                                <div>
                                    <h4 class="font-medium text-gray-900">Theme License</h4>
                                    <p class="text-sm text-gray-500">For a single website</p>
                                </div>
                                <span class="text-xl font-bold text-primary">${{ $theme['price'] }}</span>
                            </a>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ $theme['purchaseUrl'] }}" class="flex-1 py-3 px-6 bg-primary text-white rounded-lg hover:bg-indigo-700 transition duration-150 text-center font-medium">
                            Purchase Now
                        </a>
                        <!-- <a href="#" class="flex-1 py-3 px-6 border border-gray-300 rounded-lg hover:border-primary transition duration-150 text-center font-medium">
                            Live Preview
                        </a> -->
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="mt-20">
                <!-- Tabs -->
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                        <button class="border-primary text-primary whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Description
                        </button>
                        <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Features
                        </button>
                        <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Documentation
                        </button>
                        <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Reviews
                        </button>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="mt-8">
                    <!-- Description Tab -->
                    <div id="description-tab" class="prose prose-lg max-w-none">
                        <h2>About {{ $theme['name'] }} Theme</h2>
                        <p>{{ $theme['fullDescription'] ?? $theme['description'] }}</p>
                        
                        @if(isset($theme['keyBenefits']))
                        <h3>Key Benefits</h3>
                        <ul>
                            @foreach($theme['keyBenefits'] as $benefit)
                            <li>{{ $benefit }}</li>
                            @endforeach
                        </ul>
                        @endif

                        @if(isset($theme['technicalDetails']))
                        <h3>Technical Details</h3>
                        <ul>
                            @foreach($theme['technicalDetails'] as $detail)
                            <li>{{ $detail }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <!-- Features Tab -->
                    <div id="features-tab" class="prose prose-lg max-w-none hidden">
                        <h2>Detailed Features</h2>
                        <div class="grid md:grid-cols-2 gap-8">
                            @if(isset($theme['designFeatures']))
                            <div>
                                <h3 class="text-xl font-semibold mb-4">Design Features</h3>
                                <ul class="space-y-3">
                                    @foreach($theme['designFeatures'] as $feature)
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-primary mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>{{ $feature }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            
                            @if(isset($theme['technicalFeatures']))
                            <div>
                                <h3 class="text-xl font-semibold mb-4">Technical Features</h3>
                                <ul class="space-y-3">
                                    @foreach($theme['technicalFeatures'] as $feature)
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-primary mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>{{ $feature }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Documentation Tab -->
                    <div id="documentation-tab" class="prose prose-lg max-w-none hidden">
                        <h2>Documentation</h2>
                        <p>Comprehensive documentation is included with your purchase to help you get started quickly and customize your theme.</p>
                        
                        <h3>Getting Started</h3>
                        <ol>
                            <li>Download the theme files from your purchase</li>
                            <li>Upload the theme to your Ghost installation</li>
                            <li>Activate the theme in your Ghost admin panel</li>
                            <li>Configure theme settings as needed</li>
                        </ol>

                        <h3>Theme Customization</h3>
                        <p>Learn how to customize your theme:</p>
                        <ul>
                            <li>Changing colors and typography</li>
                            <li>Modifying layout options</li>
                            <li>Adding custom CSS</li>
                            <li>Configuring navigation menus</li>
                        </ul>

                        <h3>Support Resources</h3>
                        <ul>
                            <li>Detailed documentation PDF</li>
                            <li>Video tutorials</li>
                            <li>FAQ section</li>
                            <li>Email support</li>
                        </ul>
                    </div>

                    <!-- Reviews Tab -->
                    <div id="reviews-tab" class="prose prose-lg max-w-none hidden">
                        <h2>Customer Reviews</h2>
                        <div class="space-y-8">
                            @foreach($testimonials as $review)
                            <div class="border-b border-gray-200 pb-8">
                                <div class="flex items-center mb-4">
                                    <div class="flex items-center">
                                        @for($i = 0; $i < $review['rating']; $i++)
                                        <span class="text-yellow-500 mr-1"><i class="fas fa-star"></i></span>
                                        @endfor
                                    </div>
                                    <span class="text-gray-500 ml-2">{{ $review['date'] }}</span>
                                </div>
                                <p class="text-gray-600 mb-4">"{{ $review['quote'] }}"</p>
                                <div class="flex items-center">
                                    <img src="{{ $review['avatar'] }}" alt="User avatar" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <h4 class="font-medium">{{ $review['name'] }}</h4>
                                        <p class="text-sm text-gray-500">{{ $review['title'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Themes -->
            @if(isset($relatedThemes) && count($relatedThemes) > 0)
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Related Themes</h2>
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
    
    <!-- Add JavaScript for tab functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('button[class*="whitespace-nowrap"]');
            const tabContents = [
                document.getElementById('description-tab'),
                document.getElementById('features-tab'),
                document.getElementById('documentation-tab'),
                document.getElementById('reviews-tab')
            ];
            
            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    // Update active tab
                    tabs.forEach(t => {
                        t.classList.remove('border-primary', 'text-primary');
                        t.classList.add('border-transparent', 'text-gray-500');
                    });
                    
                    tab.classList.remove('border-transparent', 'text-gray-500');
                    tab.classList.add('border-primary', 'text-primary');
                    
                    // Show selected tab content
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });
                    
                    tabContents[index].classList.remove('hidden');
                });
            });
        });
    </script>
</x-app-layout> 