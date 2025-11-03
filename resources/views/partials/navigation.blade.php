<nav class="glass-nav sticky top-0 z-50 border-b border-[#211D1D]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between py-3">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <h2 class="text-3xl font-asv font-bold">Ghost Theme</h2>
                    {{-- <img src="/images/ghost-theme-logo.png" alt="Ghost Theme Logo" class="h-10 w-auto mr-3"> --}}
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-10">
                <a href="/#contact" class="text-gray-700 hover:text-primary font-medium transition duration-150 relative group">
                    Contact
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="/themes" class="inline-flex items-center px-5 py-2.5 border border-transparent text-sm font-medium rounded-full text-white bg-linear-to-r from-primary to-purple-600 hover:from-indigo-700 hover:to-purple-700 transition duration-150 shadow-md">
                    Themes
                </a>
            </div>
            <div class="md:hidden flex items-center">
                <button type="button" 
                        id="mobile-menu-button" 
                        class="text-gray-700 hover:text-primary transition duration-150"
                        aria-label="Toggle mobile menu"
                        aria-expanded="false"
                        aria-controls="mobile-menu">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <span class="sr-only">Toggle mobile menu</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state -->
    <div id="mobile-menu" 
         class="md:hidden hidden" 
         role="menu" 
         aria-labelledby="mobile-menu-button">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg rounded-b-lg mx-4">
            <a href="/#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50" role="menuitem">
                Contact
            </a>
            <a href="/themes" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-primary hover:bg-indigo-700" role="menuitem">
                Themes
            </a>
        </div>
    </div>

    <!-- JavaScript for mobile menu toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            // Toggle mobile menu visibility when hamburger is clicked
            mobileMenuButton.addEventListener('click', function() {
                const isExpanded = mobileMenu.classList.toggle('hidden');
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            });
            
            // Close mobile menu when clicking outside of it
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnButton = mobileMenuButton.contains(event.target);
                
                if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    mobileMenuButton.setAttribute('aria-expanded', 'false');
                }
            });
        });
    </script>
</nav>