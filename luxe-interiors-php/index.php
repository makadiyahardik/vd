<?php
require_once 'config.php';
$page_title = 'Transform Your Living Space';
?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/navigation.php'; ?>

<?php include 'includes/hero.php'; ?>

<?php include 'includes/about.php'; ?>

<?php include 'includes/services.php'; ?>

<?php include 'includes/portfolio.php'; ?>

<?php include 'includes/testimonials.php'; ?>

<?php include 'includes/contact.php'; ?>

<?php include 'includes/footer.php'; ?>

<!-- Additional JavaScript -->
<script src="assets/js/main.js"></script>
<script>
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
        console.log('✅ Lucide icons initialized');
    }
    
    console.log('🎉 Page fully loaded!');
</script> 