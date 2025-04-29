<x-app-layout>
    <div class="bg-white py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">About Us</h1>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">We create premium Ghost themes for content creators, bloggers, and publishers.</p>
            </div>
            
            <!-- Our Story Section -->
            <div class="prose prose-lg prose-indigo mx-auto mb-16">
                <h2>Our Story</h2>
                <p>Founded in 2020, Ghost Theme started with a simple mission: to create premium Ghost CMS themes that combine beautiful aesthetics with powerful functionality.</p>
                <p>Our founder, Anisul Kibria, noticed that while Ghost CMS was gaining popularity as a powerful publishing platform, there was a gap in the market for premium themes that truly showcased the platform's potential. With a background in web development and design, Anisul set out to create themes that would help content creators stand out.</p>
                <p>What began as a small collection of custom-designed themes has now grown into a comprehensive library of premium Ghost themes used by bloggers, publishers, and businesses worldwide.</p>
            </div>
            
            <!-- Our Mission/Values -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <div class="text-primary mb-4">
                        <i class="fas fa-bullseye text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600">To empower content creators with premium Ghost themes that are not only visually stunning but also optimized for performance, engagement, and conversion.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <div class="text-primary mb-4">
                        <i class="fas fa-gem text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Our Values</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li><span class="font-medium">Quality:</span> We create themes with meticulous attention to detail</li>
                        <li><span class="font-medium">Innovation:</span> We constantly push the boundaries of design</li>
                        <li><span class="font-medium">Support:</span> We provide exceptional customer service</li>
                    </ul>
                </div>
            </div>
            
            <!-- Team Section -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Our Team</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <img src="/images/about-team-1.jpg" alt="Anisul Kibria" class="w-48 h-48 rounded-full mx-auto object-cover mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">Anisul Kibria</h3>
                        <p class="text-primary">Founder & Lead Designer</p>
                    </div>
                    <div class="text-center">
                        <img src="/images/about-team-2.jpg" alt="Sophia Chen" class="w-48 h-48 rounded-full mx-auto object-cover mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">Sophia Chen</h3>
                        <p class="text-primary">UI/UX Designer</p>
                    </div>
                    <div class="text-center">
                        <img src="/images/about-team-3.jpg" alt="Marco Rodriguez" class="w-48 h-48 rounded-full mx-auto object-cover mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">Marco Rodriguez</h3>
                        <p class="text-primary">Lead Developer</p>
                    </div>
                </div>
            </div>
            
            <!-- Contact CTA -->
            <x-contact :form-action="'https://formspree.io/f/xrgwobbq'" :social-links="$socialLinks" />
        </div>
    </div>
</x-app-layout> 