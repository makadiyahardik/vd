<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Transform your living space with Luxe Interiors - Professional interior design services for residential and commercial spaces.">
    <meta name="keywords" content="interior design, home decoration, luxury interiors, residential design, commercial design">
    <meta name="author" content="Luxe Interiors">
    
    <!-- Open Graph tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?>">
    <meta property="og:description" content="Transform your living space with professional interior design services.">
    <meta property="og:image" content="assets/images/og-image.jpg">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME . ' - Transform Your Living Space'; ?></title>
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <!-- IMMEDIATE JavaScript for Navigation -->
    <script>
        // Global functions available immediately
        function scrollToSection(sectionId) {
            console.log('🎯 Scrolling to section:', sectionId);
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
                console.log('✅ Scrolled to:', sectionId);
            } else {
                console.error('❌ Section not found:', sectionId);
            }
        }
        
        // Global portfolio filter function
        function filterPortfolio(category) {
            console.log(`🔍 FILTERING BY: "${category}"`);
            
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            
            console.log(`Found ${filterButtons.length} buttons, ${portfolioItems.length} items`);

            // Update active button
            filterButtons.forEach(btn => {
                const btnCategory = btn.getAttribute('data-category');
                if (btnCategory === category) {
                    btn.classList.remove('bg-neutral-100', 'text-neutral-700');
                    btn.classList.add('bg-amber-500', 'text-white', 'shadow-lg');
                    console.log(`✅ Activated: "${btnCategory}"`);
                } else {
                    btn.classList.remove('bg-amber-500', 'text-white', 'shadow-lg');
                    btn.classList.add('bg-neutral-100', 'text-neutral-700');
                }
            });

            // Filter portfolio items
            let visibleCount = 0;
            portfolioItems.forEach((item, index) => {
                const itemCategory = item.getAttribute('data-category');
                const shouldShow = category === 'All' || itemCategory === category;
                
                console.log(`Item ${index}: "${itemCategory}" -> ${shouldShow ? 'SHOW' : 'HIDE'}`);
                
                if (shouldShow) {
                    item.style.display = 'block';
                    item.style.opacity = '1';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            
            console.log(`✅ FILTER COMPLETE: ${visibleCount} items visible`);
            return true;
        }
        
        console.log('🚀 Navigation functions loaded immediately!');
    </script>
</head>
<body class="min-h-screen bg-neutral-50"><?php echo "\n"; ?> 