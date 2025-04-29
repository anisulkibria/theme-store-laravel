<x-app-layout>
    <div class="bg-white py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Contact Us</h1>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">Have questions or need assistance? We're here to help.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Contact Information -->
                <div class="md:col-span-1 space-y-8">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Get in Touch</h2>
                        <p class="text-gray-600">We'd love to hear from you. Whether you have a question about our themes, need help with an issue, or want to discuss a custom project, reach out to us.</p>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Email Us</h3>
                        <a href="mailto:info@ghost-theme.com" class="text-primary hover:text-indigo-700 flex items-center">
                            <i class="fas fa-envelope mr-2"></i> info@ghost-theme.com
                        </a>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Support</h3>
                        <a href="mailto:support@ghost-theme.com" class="text-primary hover:text-indigo-700 flex items-center">
                            <i class="fas fa-life-ring mr-2"></i> support@ghost-theme.com
                        </a>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-primary">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-primary">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-primary">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-primary">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Response Time</h3>
                        <p class="text-gray-600">We aim to respond to all inquiries within 24 hours during business days (Monday to Friday).</p>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="md:col-span-2 bg-gray-50 p-8 rounded-xl border border-gray-100">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <form action="https://formspree.io/f/xrgwobbq" method="POST" class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary" required>
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary" required>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary" required></textarea>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-primary focus:ring-2 focus:ring-primary border-gray-300 rounded" required>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-medium text-gray-700">I agree to the <a href="/terms" class="text-primary hover:text-indigo-700">Terms of Service</a> and <a href="/privacy" class="text-primary hover:text-indigo-700">Privacy Policy</a></label>
                            </div>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium px-6 py-3 rounded-lg hover:from-indigo-700 hover:to-purple-700 transition duration-150 shadow-md">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- FAQ Section -->
            <div class="mb-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-xl border border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">How quickly will I receive my theme?</h3>
                        <p class="text-gray-600">After your purchase is confirmed, you'll receive an email with download instructions immediately.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl border border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Do you offer installation services?</h3>
                        <p class="text-gray-600">Yes, we can help you install the theme for an additional fee. Contact us for details.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl border border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Can I get a custom theme developed?</h3>
                        <p class="text-gray-600">Absolutely! We offer custom theme development services. Contact us with your requirements for a quote.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl border border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">How do I report a bug?</h3>
                        <p class="text-gray-600">If you encounter any issues with our themes, please email our support team with details about the problem.</p>
                    </div>
                </div>
                
                <div class="text-center mt-8">
                    <a href="/faqs" class="inline-flex items-center text-primary hover:text-indigo-700 font-medium">
                        View all FAQs <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- CTA Section -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white text-center">
                <h2 class="text-2xl font-bold mb-4">Ready to elevate your Ghost blog?</h2>
                <p class="mb-6 max-w-xl mx-auto">Explore our collection of premium Ghost themes designed for bloggers, content creators, and publishers.</p>
                <a href="/themes" class="inline-flex items-center bg-white text-indigo-600 font-medium px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-150">
                    Browse Themes <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</x-app-layout> 