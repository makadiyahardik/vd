<?php
$categories = ['All', 'Living Rooms', 'Bedrooms', 'Kitchens', 'Bathrooms'];

$projects = [
    [
        "title" => "Modern Living Space",
        "category" => "Living Rooms",
        "image" => "https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=2070&auto=format&fit=crop"
    ],
    [
        "title" => "Luxury Bedroom Suite",
        "category" => "Bedrooms",
        "image" => "https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=2070&auto=format&fit=crop"
    ],
    [
        "title" => "Contemporary Kitchen",
        "category" => "Kitchens",
        "image" => "https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?q=80&w=2070&auto=format&fit=crop"
    ],
    [
        "title" => "Elegant Bathroom",
        "category" => "Bathrooms",
        "image" => "https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=2070&auto=format&fit=crop"
    ],
    [
        "title" => "Cozy Reading Nook",
        "category" => "Living Rooms",
        "image" => "https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2070&auto=format&fit=crop"
    ],
    [
        "title" => "Master Bedroom",
        "category" => "Bedrooms",
        "image" => "https://images.unsplash.com/photo-1540518614846-7eded47432f5?q=80&w=2070&auto=format&fit=crop"
    ]
];
?>

<section id="portfolio" class="py-20 bg-gradient-to-tr from-white via-neutral-50 to-amber-50/40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-neutral-800 mb-4 font-poppins">
                Our Portfolio
            </h2>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto font-inter mb-8">
                Explore our collection of beautifully designed spaces that inspire and delight.
            </p>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-12" id="portfolio-filters">
                <?php foreach ($categories as $index => $category): ?>
                <button
                    class="filter-btn px-6 py-3 rounded-full font-medium transition-all duration-300 <?php echo $index === 0 ? 'bg-amber-500 text-white shadow-lg' : 'bg-neutral-100 text-neutral-700 hover:bg-neutral-200'; ?>"
                    data-category="<?php echo htmlspecialchars($category); ?>"
                    onclick="filterPortfolio('<?php echo addslashes($category); ?>')"
                >
                    <?php echo htmlspecialchars($category); ?>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Portfolio Grid -->
            <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($projects as $index => $project): ?>
                <div
                    class="portfolio-item group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 card-hover"
                    data-category="<?php echo htmlspecialchars($project['category']); ?>"
                >
                    <img
                        src="<?php echo htmlspecialchars($project['image']); ?>"
                        alt="<?php echo htmlspecialchars($project['title']); ?>"
                        class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                        onerror="this.src='https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=2070&auto=format&fit=crop'"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p class="text-white/80"><?php echo htmlspecialchars($project['category']); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section> 