<x-app-layout>
    <div class="bg-white py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Frequently Asked Questions</h1>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">Find answers to the most common questions about our Ghost themes.</p>
            </div>
            
            <!-- FAQs Categories -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="px-6 py-2 bg-primary text-white rounded-full font-medium">All Questions</button>
                <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-medium hover:bg-gray-200 transition">Purchasing</button>
                <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-medium hover:bg-gray-200 transition">Installation</button>
                <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-medium hover:bg-gray-200 transition">Customization</button>
                <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-medium hover:bg-gray-200 transition">Support</button>
            </div>
            
            <!-- FAQs Accordion -->
            <div class="space-y-4 mb-16">
                <!-- Purchasing FAQs -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">What payment methods do you accept?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">We accept all major credit cards (Visa, MasterCard, American Express, Discover) and PayPal. All payments are processed securely through our payment processor.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">Do you offer refunds?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">Due to the digital nature of our products, all sales are final and we do not offer refunds. However, we provide extensive documentation and support to ensure your satisfaction with our themes.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">Can I use one theme purchase on multiple websites?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">Each theme purchase includes a license for use on a single website/domain. If you want to use the theme on multiple websites, you'll need to purchase additional licenses.</p>
                    </div>
                </div>
                
                <!-- Installation FAQs -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">How do I install a Ghost theme?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">To install a Ghost theme, follow these steps:</p>
                        <ol class="list-decimal list-inside mt-2 space-y-1 text-gray-600 ml-4">
                            <li>Download the theme files from your purchase email or account.</li>
                            <li>Log in to your Ghost admin panel.</li>
                            <li>Navigate to "Settings" > "Design".</li>
                            <li>Click "Upload a theme" and select the theme zip file.</li>
                            <li>After upload, click "Activate" to make it your active theme.</li>
                        </ol>
                        <p class="mt-2 text-gray-600">For more detailed instructions, please refer to our <a href="/documentation" class="text-primary hover:text-indigo-700">documentation</a>.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">What Ghost version do your themes support?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">All our themes are compatible with Ghost 5.x and above. We regularly update our themes to ensure compatibility with the latest Ghost versions.</p>
                    </div>
                </div>
                
                <!-- Customization FAQs -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">Can I customize the colors and fonts?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">Yes, all our themes include customization options for colors, fonts, and other visual elements. These can be adjusted through the Ghost admin panel under "Settings" > "Design" > "Site wide".</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">Do you offer custom theme development?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">Yes, we offer custom theme development services for clients who need specific features or designs. Please <a href="/contact" class="text-primary hover:text-indigo-700">contact us</a> with your requirements for a quote.</p>
                    </div>
                </div>
                
                <!-- Support FAQs -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">How long does theme support last?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">We provide 6 months of support from the date of purchase. This includes assistance with theme installation, setup, and bug fixes.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-medium text-gray-900">How can I get support if I have issues?</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">You can reach our support team by emailing <a href="mailto:support@ghost-theme.com" class="text-primary hover:text-indigo-700">support@ghost-theme.com</a> or through the contact form on our <a href="/support" class="text-primary hover:text-indigo-700">support page</a>. We aim to respond to all support inquiries within 24 hours on business days.</p>
                    </div>
                </div>
            </div>
            
            <!-- Still Have Questions -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white text-center">
                <h2 class="text-2xl font-bold mb-4">Still Have Questions?</h2>
                <p class="mb-6 max-w-xl mx-auto">If you couldn't find the answer to your question, feel free to reach out to our support team.</p>
                <a href="/contact" class="inline-flex items-center bg-white text-indigo-600 font-medium px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-150">
                    Contact Support
                </a>
            </div>
        </div>
    </div>

    <!-- FAQ Accordion JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionHeaders = document.querySelectorAll('.bg-gray-50.px-6.py-4.flex');
            
            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    
                    // Toggle icon
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-up');
                    
                    // Toggle content visibility
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });
            
            // Initialize the first item as open
            if (accordionHeaders.length > 0) {
                accordionHeaders[0].click();
            }
        });
    </script>
</x-app-layout> 