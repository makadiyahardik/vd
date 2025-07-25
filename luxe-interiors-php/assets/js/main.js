// Main JavaScript file for Luxe Interiors

// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    initNavigation();
    initPortfolioFilters();
    initContactForm();
    initScrollAnimations();
});

// Navigation functionality
function initNavigation() {
    const nav = document.getElementById('navigation');
    const logo = document.getElementById('logo');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    let isScrolled = false;

    // Handle scroll events for navbar styling
    function handleScroll() {
        const scrollY = window.scrollY;
        const shouldBeScrolled = scrollY > 50;

        if (shouldBeScrolled !== isScrolled) {
            isScrolled = shouldBeScrolled;
            
            if (isScrolled) {
                nav.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-lg');
                nav.classList.remove('bg-black/20', 'backdrop-blur-sm');
                logo.classList.add('text-neutral-800');
                logo.classList.remove('text-white');
                
                navLinks.forEach(link => {
                    link.classList.add('text-neutral-700', 'hover:text-amber-600');
                    link.classList.remove('text-white', 'hover:text-amber-400');
                });
                
                mobileMenuButton.classList.add('text-neutral-800');
                mobileMenuButton.classList.remove('text-white');
            } else {
                nav.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-lg');
                nav.classList.add('bg-black/20', 'backdrop-blur-sm');
                logo.classList.remove('text-neutral-800');
                logo.classList.add('text-white');
                
                navLinks.forEach(link => {
                    link.classList.remove('text-neutral-700', 'hover:text-amber-600');
                    link.classList.add('text-white', 'hover:text-amber-400');
                });
                
                mobileMenuButton.classList.remove('text-neutral-800');
                mobileMenuButton.classList.add('text-white');
            }
        }
    }

    // Mobile menu toggle
    let isMobileMenuOpen = false;
    mobileMenuButton.addEventListener('click', function() {
        isMobileMenuOpen = !isMobileMenuOpen;
        
        if (isMobileMenuOpen) {
            mobileMenu.classList.add('open');
            mobileMenuButton.innerHTML = '<i data-lucide="x" class="w-6 h-6"></i>';
        } else {
            mobileMenu.classList.remove('open');
            mobileMenuButton.innerHTML = '<i data-lucide="menu" class="w-6 h-6"></i>';
        }
        
        // Re-initialize lucide icons
        lucide.createIcons();
    });

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Initial call
    handleScroll();
}

// Smooth scrolling to sections
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
        
        // Close mobile menu if open
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        
        if (mobileMenu.classList.contains('open')) {
            mobileMenu.classList.remove('open');
            mobileMenuButton.innerHTML = '<i data-lucide="menu" class="w-6 h-6"></i>';
            lucide.createIcons();
        }
    }
}

// Portfolio filtering functionality
function initPortfolioFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    // Set initial active state for "All" button
    if (filterButtons.length > 0) {
        filterButtons[0].classList.add('bg-amber-500', 'text-white', 'shadow-lg');
        filterButtons[0].classList.remove('bg-neutral-100', 'text-neutral-700');
    }
}

function filterPortfolio(category) {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    // Update active button
    filterButtons.forEach(btn => {
        const btnCategory = btn.getAttribute('data-category');
        if (btnCategory === category) {
            btn.classList.add('bg-amber-500', 'text-white', 'shadow-lg');
            btn.classList.remove('bg-neutral-100', 'text-neutral-700');
        } else {
            btn.classList.remove('bg-amber-500', 'text-white', 'shadow-lg');
            btn.classList.add('bg-neutral-100', 'text-neutral-700');
        }
    });

    // Filter portfolio items
    portfolioItems.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        
        if (category === 'All' || itemCategory === category) {
            item.style.display = 'block';
            // Add fade-in animation
            item.style.opacity = '0';
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transition = 'opacity 0.5s ease-in-out';
            }, 100);
        } else {
            item.style.display = 'none';
        }
    });
}

// Contact form functionality (frontend only)
function initContactForm() {
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Always prevent default submission
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const submitText = submitBtn.querySelector('.submit-text');
            const loadingText = submitBtn.querySelector('.loading-text');
            const successMessage = document.getElementById('form-success-message');
            const errorMessage = document.getElementById('form-error-message');
            
            // Hide previous messages
            successMessage.classList.add('hidden');
            errorMessage.classList.add('hidden');
            
            // Show loading state
            submitText.classList.add('hidden');
            loadingText.classList.remove('hidden');
            submitBtn.disabled = true;
            
            // Form validation
            const name = this.querySelector('#name').value.trim();
            const email = this.querySelector('#email').value.trim();
            const message = this.querySelector('#message').value.trim();
            
            if (!name || !email || !message) {
                showFormError('Please fill in all required fields.');
                resetSubmitButton(submitBtn, submitText, loadingText);
                return;
            }
            
            if (!isValidEmail(email)) {
                showFormError('Please enter a valid email address.');
                resetSubmitButton(submitBtn, submitText, loadingText);
                return;
            }
            
            // Simulate form processing
            setTimeout(() => {
                // Create mailto link with form data
                const subject = encodeURIComponent('New Project Inquiry from ' + name);
                const body = encodeURIComponent(
                    `Name: ${name}\n` +
                    `Email: ${email}\n` +
                    `Phone: ${this.querySelector('#phone').value || 'Not provided'}\n\n` +
                    `Message:\n${message}`
                );
                
                const mailtoLink = `mailto:hello@luxeinteriors.com?subject=${subject}&body=${body}`;
                
                // Open email client
                window.location.href = mailtoLink;
                
                // Show success message
                successMessage.classList.remove('hidden');
                
                // Reset form
                this.reset();
                
                resetSubmitButton(submitBtn, submitText, loadingText);
                
                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 1500);
        });
    }
}

function resetSubmitButton(submitBtn, submitText, loadingText) {
    submitText.classList.remove('hidden');
    loadingText.classList.add('hidden');
    submitBtn.disabled = false;
}

function showFormError(message) {
    const errorMessage = document.getElementById('form-error-message');
    errorMessage.textContent = message;
    errorMessage.classList.remove('hidden');
    
    // Scroll to error message
    errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        errorMessage.classList.add('hidden');
    }, 5000);
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Scroll animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    // Observe elements with fade-in animation
    const animatedElements = document.querySelectorAll('.animate-fade-in, .card-hover');
    animatedElements.forEach(el => observer.observe(el));
}

// Utility function for smooth scrolling (used by inline onclick handlers)
window.scrollToSection = scrollToSection;
window.filterPortfolio = filterPortfolio; 