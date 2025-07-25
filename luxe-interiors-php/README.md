# Luxe Interiors - PHP Frontend Website

A beautiful, professional interior design website converted from React to PHP, featuring modern design, responsive layout, and interactive frontend functionality.

## Features

- **Modern Design**: Professional interior design layout with beautiful animations
- **Responsive**: Mobile-first design that works on all devices  
- **Interactive Contact Form**: Frontend form with email client integration
- **Portfolio Filtering**: Interactive portfolio with category filtering
- **SEO Optimized**: Proper meta tags and performance optimization
- **Pure Frontend**: No database or backend processing required

## Requirements

- PHP 7.4 or higher (for basic templating)
- Web server (Apache/Nginx)
- No database required

## Quick Installation

### 1. Upload Files
```bash
# Upload all files to your web server directory
# e.g., /var/www/html/ or /htdocs/
```

### 2. Configuration
Edit `config.php` and update the site URL and contact information:

```php
// Site configuration
define('SITE_URL', 'http://your-domain.com');

// Contact information
define('CONTACT_EMAIL', 'your-email@domain.com');
define('CONTACT_PHONE', '(555) 123-4567');
define('CONTACT_ADDRESS', 'Your Business Address');
```

### 3. File Permissions
```bash
# Basic permissions for web server
chmod 755 luxe-interiors-php/
chmod 644 luxe-interiors-php/*.php
chmod -R 755 luxe-interiors-php/assets/
```

### 4. Test the Website
Visit `http://your-domain.com` and verify all features work correctly.

## File Structure

```
luxe-interiors-php/
├── config.php              # Basic configuration
├── index.php               # Main page
├── README.md               # This file
├── .htaccess               # Apache configuration
├── includes/               # PHP includes
│   ├── header.php          # HTML head section
│   ├── navigation.php      # Navigation component
│   ├── hero.php            # Hero section
│   ├── about.php           # About section
│   ├── services.php        # Services section
│   ├── portfolio.php       # Portfolio section
│   ├── testimonials.php    # Testimonials section
│   ├── contact.php         # Contact form section
│   └── footer.php          # Footer component
└── assets/                 # Static assets
    ├── css/
    │   └── style.css       # Custom CSS
    ├── js/
    │   └── main.js         # Interactive JavaScript
    └── images/             # Local images (add your own)
```

## Features & Functionality

### 1. Navigation
- Fixed navigation with scroll effects
- Mobile responsive hamburger menu
- Smooth scrolling to sections
- Dynamic styling based on scroll position

### 2. Hero Section
- Full-screen background image
- Call-to-action buttons with smooth scrolling
- Animated scroll indicator

### 3. About Section
- Company statistics and information
- Animated content on scroll
- Professional layout with decorative elements

### 4. Services
- Dynamic service cards with hover effects
- Professional animations
- Easy to customize content

### 5. Portfolio
- **Interactive filtering by category**
- Smooth animations when switching categories
- Hover overlays with project details
- Responsive grid layout

### 6. Testimonials
- Customer reviews with star ratings
- Hover animations
- Responsive card layout

### 7. Contact Form
- **Frontend-only processing**
- JavaScript validation
- Opens email client with pre-filled information
- Success/error messaging
- Responsive design

## Interactive Features

### Portfolio Filtering
The portfolio section includes interactive category filtering:
- Click category buttons to filter projects
- Smooth fade animations
- "All" button shows all projects
- Categories: Living Rooms, Bedrooms, Kitchens, Bathrooms

### Contact Form Processing
The contact form works entirely on the frontend:
1. User fills out the form
2. JavaScript validates the input
3. Form data is formatted into an email
4. User's email client opens with pre-filled message
5. Success message is shown

### Responsive Navigation
- Mobile hamburger menu
- Smooth menu transitions
- Navigation changes style on scroll
- Auto-close mobile menu when navigating

## Customization

### Adding New Services
Edit `includes/services.php` and modify the `$services` array:

```php
$services[] = [
    "title" => "New Service",
    "description" => "Service description",
    "image" => "image-url"
];
```

### Adding Portfolio Items
Edit `includes/portfolio.php` and modify the `$projects` array:

```php
$projects[] = [
    "title" => "Project Name",
    "category" => "Category Name",
    "image" => "image-url"
];
```

### Styling Changes
Edit `assets/css/style.css` to modify:
- Colors and fonts
- Animation timings
- Layout spacing
- Hover effects

### Contact Information
Update contact details in `config.php`:
- Email address
- Phone number  
- Physical address

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+ (with graceful degradation)

## Performance Features

- **Optimized Loading**: Lazy loading for images
- **Caching**: Browser caching for static assets
- **Compression**: Gzip compression enabled
- **Minified Assets**: Optimized CSS and JavaScript
- **Fast Rendering**: Efficient DOM manipulation

## SEO Features

- **Meta Tags**: Proper descriptions and keywords
- **Open Graph**: Social media sharing optimization
- **Semantic HTML**: Proper HTML5 structure
- **Fast Loading**: Optimized for Core Web Vitals
- **Mobile-First**: Google mobile-friendly design

## Deployment

### Basic Web Hosting
1. Upload files via FTP/cPanel
2. Update `config.php` with your domain
3. Test all functionality
4. Ready to go live!

### Advanced Hosting
1. Setup SSL certificate
2. Configure CDN for images
3. Enable server-side compression
4. Monitor performance

## Troubleshooting

### JavaScript Not Working
1. Check browser console for errors
2. Verify Lucide icons are loading from CDN
3. Ensure main.js is accessible

### Images Not Loading
1. Check image URLs in PHP files
2. Verify internet connection (using external images)
3. Consider downloading images locally

### Styling Issues
1. Check if Tailwind CSS is loading from CDN
2. Verify custom CSS file is accessible
3. Clear browser cache

### Contact Form Issues
1. Verify email client is configured on user's device
2. Check if mailto links are being blocked
3. Test with different browsers

## Going Live Checklist

- [ ] Update `SITE_URL` in config.php
- [ ] Update contact information
- [ ] Test on multiple devices
- [ ] Verify all animations work
- [ ] Check contact form functionality
- [ ] Test portfolio filtering
- [ ] Verify mobile menu works
- [ ] Check page load speed
- [ ] Test on different browsers

## License

This project is proprietary. All rights reserved.

---

**Perfect for**: Small businesses, design agencies, portfolios, and any site needing beautiful interactive design without complex backend requirements. 