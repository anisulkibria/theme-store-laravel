<x-app-layout>
    <div class="bg-white py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Support</h1>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">We're here to help you get the most out of your Ghost theme.</p>
            </div>
            
            <!-- Support Options -->
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-100">
                    <div class="text-primary mb-4">
                        <i class="fas fa-envelope-open-text text-3xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2">Email Support</h2>
                    <p class="text-gray-600 mb-4">Send us an email with your questions or issues, and we'll get back to you within 24 hours on business days.</p>
                    <a href="mailto:support@ghost-theme.com" class="inline-flex items-center text-primary hover:text-indigo-700 font-medium">
                        support@ghost-theme.com <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-100">
                    <div class="text-primary mb-4">
                        <i class="fas fa-book text-3xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2">Documentation</h2>
                    <p class="text-gray-600 mb-4">Browse our detailed documentation for step-by-step guides on installing and customizing your theme.</p>
                    <a href="/documentation" class="inline-flex items-center text-primary hover:text-indigo-700 font-medium">
                        View documentation <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-100">
                    <div class="text-primary mb-4">
                        <i class="fas fa-question-circle text-3xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2">FAQs</h2>
                    <p class="text-gray-600 mb-4">Find answers to commonly asked questions about our themes, licensing, and customization.</p>
                    <a href="/faqs" class="inline-flex items-center text-primary hover:text-indigo-700 font-medium">
                        View FAQs <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-100">
                    <div class="text-primary mb-4">
                        <i class="fas fa-comments text-3xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2">Community Forum</h2>
                    <p class="text-gray-600 mb-4">Join our community forum to connect with other theme users and share tips and solutions.</p>
                    <a href="#" class="inline-flex items-center text-primary hover:text-indigo-700 font-medium">
                        Coming soon <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
            
            <!-- Support Policy -->
            <div class="bg-white p-8 rounded-xl border border-gray-200 mb-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Support Policy</h2>
                <div class="space-y-4">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">What's Included:</h3>
                        <ul class="mt-2 space-y-1 text-gray-600 list-disc list-inside ml-4">
                            <li>Theme installation assistance</li>
                            <li>Help with theme setup and configuration</li>
                            <li>Guidance on using built-in theme features</li>
                            <li>Bug fixes and troubleshooting</li>
                            <li>6 months of support from purchase date</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">What's Not Included:</h3>
                        <ul class="mt-2 space-y-1 text-gray-600 list-disc list-inside ml-4">
                            <li>Custom code development</li>
                            <li>Theme modifications beyond built-in options</li>
                            <li>Third-party plugin compatibility issues</li>
                            <li>Server or hosting-related issues</li>
                            <li>Support for heavily modified themes</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white">
                <h2 class="text-2xl font-bold mb-6 text-center">Contact Support</h2>
                <form class="space-y-4">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-indigo-100 mb-1">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-lg text-gray-900" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-indigo-100 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg text-gray-900" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-indigo-100 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 rounded-lg text-gray-900" required>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-indigo-100 mb-1">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 rounded-lg text-gray-900" required></textarea>
                    </div>
                    
                    <div class="flex justify-center">
                        <button type="submit" class="bg-white text-indigo-600 font-medium px-8 py-3 rounded-lg hover:bg-gray-100 transition duration-150">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> 