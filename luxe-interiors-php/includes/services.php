<?php
$services = [
    [
        "title" => "Residential Design",
        "description" => "Complete home interior design from concept to completion, creating spaces that perfectly reflect your lifestyle.",
        "image" => "https://images.unsplash.com/photo-1483058712412-4245e9b90334?q=80&w=2070&auto=format&fit=crop"
    ],
    [
        "title" => "Commercial Spaces",
        "description" => "Professional office and retail design that enhances productivity and creates memorable experiences.",
        "image" => "https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2070&auto=format&fit=crop"
    ],
    [
        "title" => "Luxury Renovations",
        "description" => "High-end renovation projects that transform existing spaces into extraordinary environments.",
        "image" => "https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=2070&auto=format&fit=crop"
    ]
];
?>

<section id="services" class="py-20 bg-gradient-to-bl from-neutral-50 via-amber-50/20 to-neutral-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-neutral-800 mb-4 font-poppins">
                Our Services
            </h2>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto font-inter">
                We offer comprehensive interior design services tailored to your unique needs and vision.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($services as $index => $service): ?>
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden card-hover">
                <div class="relative overflow-hidden">
                    <img
                        src="<?php echo htmlspecialchars($service['image']); ?>"
                        alt="<?php echo htmlspecialchars($service['title']); ?>"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-neutral-800 mb-4 font-poppins">
                        <?php echo htmlspecialchars($service['title']); ?>
                    </h3>
                    <p class="text-neutral-600 font-inter leading-relaxed">
                        <?php echo htmlspecialchars($service['description']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 