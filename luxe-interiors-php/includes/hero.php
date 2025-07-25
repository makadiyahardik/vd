<section id="home" class="relative min-h-screen flex items-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1721322800607-8c38375eef04?q=80&w=2070&auto=format&fit=crop"
            alt="Modern interior design"
            class="w-full h-full object-cover"
            loading="eager"
        />
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 font-poppins leading-tight">
                Transform Your
                <span class="block text-amber-400">Living Space</span>
            </h1>
            <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto font-inter leading-relaxed">
                Creating beautiful, functional interiors that reflect your personality and elevate your everyday life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button 
                    onclick="scrollToSection('portfolio')"
                    class="btn-primary bg-amber-500 hover:bg-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center"
                >
                    View Our Work
                    <i data-lucide="arrow-right" class="ml-2 w-5 h-5"></i>
                </button>
                <button 
                    onclick="scrollToSection('contact')"
                    class="border-2 border-white text-white hover:bg-white hover:text-neutral-800 px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 backdrop-blur-sm"
                >
                    Get Started
                </button>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <i data-lucide="chevron-down" class="w-8 h-8 text-white/70"></i>
    </div>
</section> 