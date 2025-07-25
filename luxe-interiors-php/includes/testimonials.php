<?php
$testimonials = [
    [
        "name" => "Sarah Johnson",
        "role" => "Homeowner",
        "content" => "The team at Luxe Interiors transformed our home beyond our wildest dreams. Their attention to detail and creative vision is unmatched.",
        "rating" => 5
    ],
    [
        "name" => "Michael Chen",
        "role" => "Business Owner",
        "content" => "Our office renovation increased productivity and impressed our clients. The design perfectly balances functionality with aesthetics.",
        "rating" => 5
    ],
    [
        "name" => "Emily Rodriguez",
        "role" => "Interior Enthusiast",
        "content" => "Working with Luxe Interiors was an absolute pleasure. They listened to our needs and delivered a space that exceeds expectations.",
        "rating" => 5
    ]
];
?>

<section class="py-20 bg-gradient-to-br from-neutral-50 via-amber-50/30 to-neutral-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-neutral-800 mb-4 font-poppins">
                Client Testimonials
            </h2>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto font-inter">
                Don't just take our word for it—hear what our satisfied clients have to say.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 card-hover">
                <div class="flex mb-4">
                    <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                    <i data-lucide="star" class="w-5 h-5 text-amber-400 fill-current"></i>
                    <?php endfor; ?>
                </div>
                <p class="text-neutral-600 font-inter leading-relaxed mb-6">
                    "<?php echo htmlspecialchars($testimonial['content']); ?>"
                </p>
                <div>
                    <h4 class="font-semibold text-neutral-800 font-poppins">
                        <?php echo htmlspecialchars($testimonial['name']); ?>
                    </h4>
                    <p class="text-neutral-500 text-sm"><?php echo htmlspecialchars($testimonial['role']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 