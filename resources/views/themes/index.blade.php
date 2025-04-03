<x-app-layout>
    <div class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4">Browse Our Premium Ghost Themes</h1>
                <p class="text-lg text-gray-600">Discover our collection of beautifully designed, responsive Ghost themes for your blog or website</p>
            </div>

            <!-- Themes Grid -->
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                @foreach($themes as $theme)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="relative pb-64">
                        <img class="absolute h-full w-full object-cover" src="{{ $theme['image'] }}" alt="{{ $theme['name'] }} theme preview">
                        <div class="absolute inset-0 bg-gradient-to-t from-black opacity-60"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <span class="px-2 py-1 text-xs font-semibold bg-primary rounded-md">Premium</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1.5 bg-white text-primary font-bold rounded-full shadow-lg">${{ $theme['price'] }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">{{ $theme['name'] }}</h3>
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-1"><i class="fas fa-star"></i></span>
                                <span class="text-gray-700 text-sm">{{ $theme['rating'] }}</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-5">{{ $theme['description'] }}</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ $theme['detailUrl'] }}" class="group inline-flex items-center text-primary font-medium">
                                <span class="border-b border-transparent group-hover:border-primary transition-all duration-200">View Details</span>
                                <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                            <a href="{{ $theme['purchaseUrl'] }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-indigo-700 transition duration-150 shadow-sm text-sm font-medium">
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