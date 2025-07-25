<?php
// Basic configuration for Luxe Interiors website

// Site configuration
define('SITE_NAME', 'Luxe Interiors');
define('SITE_URL', 'http://localhost/luxe-interiors-php');

// Contact information
define('CONTACT_EMAIL', 'hello@luxeinteriors.com');
define('CONTACT_PHONE', '(555) 123-4567');
define('CONTACT_ADDRESS', '123 Design Street, Creative District, NY 10001');

// Error reporting (set to 0 for production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session for any future functionality
session_start();

// Utility functions
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}
?> 