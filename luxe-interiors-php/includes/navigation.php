<nav id="navigation" class="fixed top-0 w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div id="logo" class="text-2xl font-bold font-poppins text-white transition-colors duration-300">
                Luxe Interiors
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8">
                <button onclick="scrollToSection('home')" class="nav-link font-medium transition-colors duration-200 text-white hover:text-amber-400">
                    Home
                </button>
                <button onclick="scrollToSection('about')" class="nav-link font-medium transition-colors duration-200 text-white hover:text-amber-400">
                    About
                </button>
                <button onclick="scrollToSection('services')" class="nav-link font-medium transition-colors duration-200 text-white hover:text-amber-400">
                    Services
                </button>
                <button onclick="scrollToSection('portfolio')" class="nav-link font-medium transition-colors duration-200 text-white hover:text-amber-400">
                    Portfolio
                </button>
                <button onclick="scrollToSection('contact')" class="nav-link font-medium transition-colors duration-200 text-white hover:text-amber-400">
                    Contact
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-white transition-colors duration-300">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="mobile-menu md:hidden bg-white/95 backdrop-blur-md rounded-lg mt-2 p-4 shadow-lg">
            <button onclick="scrollToSection('home')" class="block w-full text-left py-3 text-neutral-700 hover:text-amber-600 transition-colors duration-200">
                Home
            </button>
            <button onclick="scrollToSection('about')" class="block w-full text-left py-3 text-neutral-700 hover:text-amber-600 transition-colors duration-200">
                About
            </button>
            <button onclick="scrollToSection('services')" class="block w-full text-left py-3 text-neutral-700 hover:text-amber-600 transition-colors duration-200">
                Services
            </button>
            <button onclick="scrollToSection('portfolio')" class="block w-full text-left py-3 text-neutral-700 hover:text-amber-600 transition-colors duration-200">
                Portfolio
            </button>
            <button onclick="scrollToSection('contact')" class="block w-full text-left py-3 text-neutral-700 hover:text-amber-600 transition-colors duration-200">
                Contact
            </button>
        </div>
    </div>
</nav> 