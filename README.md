# A.V. Chemical — Corporate Website

A futuristic, multi-page corporate website for **A.V. Chemical**, a Mumbai-based chemical trading and distribution company.

## Tech Stack

- **Backend:** PHP 8.x
- **Frontend:** Vanilla JavaScript (ES6+), CSS3
- **Data:** JSON files (products, industries, testimonials)
- **Styling:** Pure CSS with CSS Variables, Flexbox, Grid, Glassmorphism
- **Animations:** CSS 3D Flip Cards, Scroll Reveals, Particle Effects
- **No frameworks** — lightweight and server-compatible

## Folder Structure

```
avchemicals/
├── index.php                    # Home page
├── about.php                    # About Us
├── products.php                 # Product Catalogue
├── industries.php               # Industries We Serve
├── contact.php                  # Contact page with AJAX form
├── includes/
│   ├── header.php               # Sticky nav + meta tags
│   ├── footer.php               # Footer + scripts
│   ├── db_config.php            # Database config placeholder
│   └── mailer.php               # PHP mailer for contact form
├── assets/
│   ├── css/                     # Stylesheets
│   ├── js/                      # JavaScript files
│   ├── images/                  # Logo and images
│   └── data/                    # JSON data files
├── api/
│   ├── get_products.php         # Products API
│   ├── get_industries.php       # Industries API
│   └── submit_contact.php       # Contact form handler
├── .htaccess                    # Apache config
└── README.md                    # This file
```

## Deployment on cPanel / Apache

### 1. Upload Files
- Upload the entire `avchemicals/` folder to your `public_html/` directory via cPanel File Manager or FTP.
- Your site will be accessible at `https://yourdomain.com/avchemicals/`

### 2. Replace Logo
- Replace `assets/images/logo.png` with your actual AV Chemical logo (recommended: 200x200px PNG with transparent background).

### 3. Update Contact Details
- Search for `+91-XXXXXXXXXX` across all files and replace with actual phone number.
- Update `info@avchemicals.com` with actual email in:
  - `includes/footer.php`
  - `includes/mailer.php`
  - `contact.php`

### 4. Configure Email
- Update the `$to` email address in `includes/mailer.php` to receive form submissions.
- If PHP `mail()` doesn't work on your host, integrate PHPMailer or use SMTP.

### 5. Enable HTTPS
- Uncomment the HTTPS redirect rules in `.htaccess` once SSL is configured.

### 6. Google Maps
- Replace the Google Maps embed URL in `about.php` and `contact.php` with your actual Google Maps embed link for the Borivali West office.

### 7. Database (Optional)
- Update `includes/db_config.php` if you plan to add database functionality later.

### 8. File Permissions
```
Files:  644
Directories: 755
contact_log.csv: 666 (writable by PHP)
```

## Features

- Responsive design (mobile-first)
- CSS 3D flip cards for products and features
- Glassmorphism navigation bar
- AJAX-powered contact form with server-side validation
- JSON-driven product catalogue with search & filter
- Animated number counters
- Auto-sliding testimonials carousel
- Scroll reveal animations via IntersectionObserver
- Preloader with spinning ring
- Back-to-top button
- SEO meta tags + JSON-LD structured data
- Security headers via .htaccess
- Rate-limited form submissions
- CSV backup logging for contact submissions

## Browser Support

- Chrome 80+
- Firefox 75+
- Safari 13+
- Edge 80+
- Mobile Safari / Chrome for Android

## License

© 2026 A.V. Chemical. All rights reserved.
