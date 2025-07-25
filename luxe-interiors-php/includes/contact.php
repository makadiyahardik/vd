<section id="contact" class="py-20 bg-gradient-to-tl from-white via-neutral-50 to-amber-50/25">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-neutral-800 mb-6 font-poppins">
                    Let's Create Something Beautiful Together
                </h2>
                <p class="text-xl text-neutral-600 mb-8 font-inter leading-relaxed">
                    Ready to transform your space? Get in touch with us today to discuss your interior design project.
                </p>
                
                <div class="space-y-6">
                    <div>
                        <h3 class="font-semibold text-neutral-800 mb-2">Office Location</h3>
                        <p class="text-neutral-600"><?php echo CONTACT_ADDRESS; ?></p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-800 mb-2">Phone</h3>
                        <p class="text-neutral-600">
                            <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', CONTACT_PHONE); ?>" 
                               class="hover:text-amber-600 transition-colors">
                                <?php echo CONTACT_PHONE; ?>
                            </a>
                        </p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-800 mb-2">Email</h3>
                        <p class="text-neutral-600">
                            <a href="mailto:<?php echo CONTACT_EMAIL; ?>" 
                               class="hover:text-amber-600 transition-colors">
                                <?php echo CONTACT_EMAIL; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-neutral-50 rounded-2xl p-8">
                <div id="form-success-message" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    Thank you for your message! We'll get back to you soon.
                </div>

                <div id="form-error-message" class="hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    Please fill in all required fields correctly.
                </div>

                <form id="contact-form" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-neutral-700 mb-2">
                            Full Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            required
                            class="form-input w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all duration-200"
                        />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-700 mb-2">
                            Email Address
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            class="form-input w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all duration-200"
                        />
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-neutral-700 mb-2">
                            Phone Number
                        </label>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            class="form-input w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all duration-200"
                        />
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-neutral-700 mb-2">
                            Project Details
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            required
                            class="form-input w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all duration-200 resize-none"
                            placeholder="Tell us about your project..."
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="btn-primary w-full bg-amber-500 hover:bg-amber-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center"
                    >
                        <span class="submit-text">Send Message</span>
                        <span class="loading-text hidden">
                            <span class="spinner mr-2"></span>
                            Sending...
                        </span>
                        <i data-lucide="arrow-right" class="ml-2 w-5 h-5"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section> 