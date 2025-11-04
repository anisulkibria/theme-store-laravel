<x-app-layout>
    <div class="py-16 md:py-24 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h1 class="text-3xl font-extrabold text-white sm:text-4xl mb-4">Browse Our Premium Ghost Themes</h1>
                <p class="text-lg text-gray-100">Discover our collection of beautifully designed, responsive Ghost themes for your blog or website</p>
            </div>

            <!-- Themes Grid -->
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                @foreach($themes as $theme)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2 hover:shadow-xl flex flex-col h-full">
                    <!-- Card Content Area -->
                    <div class="flex-grow flex flex-col">
                        <!-- Thumbnail -->
                        <a href="{{ $theme['detailUrl'] }}" class="block relative pb-64">
                            <img class="absolute h-full w-full object-contain" src="{{ $theme['image'] }}" alt="{{ $theme['name'] }} theme preview">
                            <div class="absolute inset-0 bg-gradient-to-t from-black opacity-60"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <span class="px-2 py-1 text-xs font-semibold bg-primary rounded-full">Premium</span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1.5 bg-white text-primary font-bold rounded-full shadow-lg">${{ $theme['price'] }}</span>
                            </div>
                        </a>
    
                        <!-- Theme Info -->
                        <div class="p-6 flex-grow">
                            <div class="flex justify-between items-center mb-2">
                                <a href="{{ $theme['detailUrl'] }}" class="hover:text-primary transition duration-200">
                                    <h3 class="text-xl font-semibold text-gray-900">{{ $theme['name'] }}</h3>
                                </a>
                                <div class="flex items-center">
                                    <span class="text-yellow-500 mr-1"><i class="fas fa-star"></i></span>
                                    <span class="text-gray-700 text-sm">{{ $theme['rating'] }}</span>
                                </div>
                            </div>
                            <p class="text-gray-600">{{ $theme['description'] }}</p>
                        </div>
                    </div>
    
                    <!-- Card Buttons (Fixed at Bottom) -->
                    <div class="p-6 pt-0">
                        <div class="flex justify-between items-center">
                            @if(isset($theme['demoUrl']))
                            <a href="{{ $theme['demoUrl'] }}" class="px-4 py-2 border border-primary text-primary rounded-full hover:bg-primary hover:text-white transition duration-150 shadow-sm text-sm font-medium">
                                Demo
                            </a>
                            @else
                            <div class="invisible px-4 py-2"></div>
                            @endif
                            <a href="{{ $theme['purchaseUrl'] }}" class="px-4 py-2 bg-primary text-white rounded-full hover:bg-indigo-700 transition duration-150 shadow-sm text-sm font-medium">
                                Purchase
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout> 