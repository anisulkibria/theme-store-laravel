<div class="py-16 md:py-24 bg-[#211D1D]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl mb-4">What Our Clients Say</h2>
            <p class="text-lg text-gray-100">Hear from bloggers and content creators who love our themes</p>
        </div>
        <div class="grid gap-10 md:grid-cols-3">
            @foreach($testimonials as $testimonial)
            <div class="bg-gray-50 p-8 rounded-xl shadow-sm relative">
                <div class="absolute -top-4 -left-4 h-10 w-10 rounded-full bg-primary text-white flex items-center justify-center">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">{{ $testimonial['quote'] }}</p>
                <div class="flex items-center">
                    <img src="{{ $testimonial['avatar'] }}" alt="User avatar" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-medium text-gray-900">{{ $testimonial['name'] }}</p>
                        <p class="text-sm text-gray-500">{{ $testimonial['title'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> 