<div id="contact" class="py-16 md:py-24 relative overflow-hidden bg-black">
    <!-- Background gradient and shapes -->
    <div class="absolute top-0 right-0 opacity-10">
        <svg width="600" height="600" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(300,300)">
                <path d="M140.5,-191.2C177.8,-168.1,201.3,-123.1,223,-75.7C244.8,-28.3,264.9,21.5,253.6,64C242.2,106.5,199.5,141.8,156.3,170.8C113.1,199.8,69.5,222.5,18.7,234.9C-32.1,247.3,-90,249.5,-131.2,223.5C-172.4,197.5,-197,143.3,-216.4,87.4C-235.9,31.4,-250.2,-26.3,-235.7,-74.4C-221.3,-122.5,-178.1,-161.1,-133,-182.5C-87.9,-203.9,-43.9,-208.2,2.1,-211.2C48.2,-214.2,103.2,-214.3,140.5,-191.2Z" fill="white" />
            </g>
        </svg>
    </div>
    
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-white">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm text-white text-sm font-medium mb-6">Contact Us</span>
            <h2 class="text-3xl font-extrabold sm:text-5xl mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-indigo-200">Get in Touch</h2>
            <p class="text-lg text-indigo-100 max-w-xl mx-auto">Have questions about our themes? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
        
        <!-- Contact form -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <form class="p-8" action="{{ $formAction }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" name="name" id="name" class="text-gray-600 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-150" placeholder="Your name" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" id="email" class="text-gray-600 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-150" placeholder="your@email.com" required>
                    </div>
                    <div class="md:col-span-2">
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <input type="text" name="subject" id="subject" class="text-gray-600 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-150" placeholder="How can we help?" required>
                    </div>
                    <div class="md:col-span-2">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea name="message" id="message" rows="4" class="text-gray-600 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-150" placeholder="Your message..." required></textarea>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full py-3 px-4 border border-transparent rounded-full text-base font-medium text-white bg-gradient-to-r from-primary to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-150 shadow-lg">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Social links -->
        <div class="mt-12 flex justify-center space-x-6" role="navigation" aria-label="Social media links">
            @foreach($socialLinks as $social)
            <a href="{{ $social['url'] }}" 
               class="h-12 w-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition duration-200 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2"
               aria-label="{{ $social['label'] }}"
               title="{{ $social['label'] }}">
                <i class="{{ $social['icon'] }} text-lg" aria-hidden="true"></i>
                <span class="sr-only">{{ $social['label'] }}</span>
            </a>
            @endforeach
        </div>
    </div>
</div> 