<?php
// Determine current page for nav active state
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Auto-detect base URL from server configuration
$script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = rtrim($script_dir, '/');
// If we're in a subdirectory (e.g. includes/), go up one level
if (basename($base_url) === 'includes' || basename($base_url) === 'api') {
    $base_url = str_replace('\\', '/', dirname($base_url));
}
$base_url = rtrim($base_url, '/');
// Handle root case — empty string means site is at document root
if ($base_url === '' || $base_url === '.') {
    $base_url = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php if ($current_page === 'index'): ?>
  <title>A.V. Chemical — Your One-Stop Source for Premium Chemical Raw Materials</title>
  <meta name="description" content="A.V. Chemical is a Mumbai-based chemical trading and distribution company specialising in raw materials for Food & Beverage, Nutraceutical, Cosmetics, Pharmaceuticals, and Feed & Poultry industries.">
  <meta name="keywords" content="AV Chemical, chemical raw materials, food ingredients, nutraceuticals, sweeteners, amino acids, vitamins, Mumbai, India, chemical distributor">
  <meta property="og:title" content="A.V. Chemical — Premium Chemical Raw Materials">
  <meta property="og:description" content="Import, sourcing & distribution of premium chemical raw materials for Food & Beverage, Nutraceuticals, Cosmetics, Pharmaceuticals, and Feed industries.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://avchemicals.com">
  <?php elseif ($current_page === 'about'): ?>
  <title>About Us — A.V. Chemical | Mumbai Chemical Distributor</title>
  <meta name="description" content="Learn about A.V. Chemical's mission, vision, and journey as a leading chemical raw material distributor based in Borivali West, Mumbai.">
  <meta property="og:title" content="About A.V. Chemical">
  <meta property="og:description" content="Discover our story, expertise, and commitment to quality chemical distribution across India.">
  <?php elseif ($current_page === 'products'): ?>
  <title>Product Catalogue — A.V. Chemical | Chemical Raw Materials</title>
  <meta name="description" content="Explore our comprehensive catalogue of 500+ chemical raw materials including amino acids, sweeteners, vitamins, excipients, solvents, and more.">
  <meta property="og:title" content="A.V. Chemical Product Catalogue">
  <meta property="og:description" content="Browse 10+ categories of premium chemical raw materials for food, pharma, nutraceutical, and industrial applications.">
  <?php elseif ($current_page === 'industries'): ?>
  <title>Industries We Serve — A.V. Chemical</title>
  <meta name="description" content="A.V. Chemical serves Food & Beverage, Nutraceuticals, Cosmetics, Pharmaceuticals, Feed & Poultry, and Industrial Chemical industries across India.">
  <meta property="og:title" content="Industries Served by A.V. Chemical">
  <meta property="og:description" content="Trusted raw material supply for 6 major industry verticals.">
  <?php elseif ($current_page === 'contact'): ?>
  <title>Contact Us — A.V. Chemical | Get in Touch</title>
  <meta name="description" content="Contact A.V. Chemical for chemical raw material enquiries. Located at Sureshwari Techno IT Park, Borivali West, Mumbai – 400092.">
  <meta property="og:title" content="Contact A.V. Chemical">
  <meta property="og:description" content="Reach out for product enquiries, quotes, and partnership opportunities.">
  <?php endif; ?>

  <!-- Favicon (Base64 Data URI) -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='4' fill='%230A0A0A'/%3E%3Ctext x='50%25' y='54%25' dominant-baseline='middle' text-anchor='middle' font-family='Orbitron,sans-serif' font-size='11' font-weight='700' fill='%23FFB300'%3EAVC%3C/text%3E%3C/svg%3E">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Base URL for JavaScript -->
  <script>window.BASE_URL = '<?php echo $base_url; ?>';</script>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/navbar.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/animations.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/responsive.css">

  <?php if ($current_page === 'index'): ?>
  <!-- Structured Data: LocalBusiness -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "A.V. Chemical",
    "description": "Import, sourcing & distribution of premium chemical raw materials for Food & Beverage, Nutraceuticals, Cosmetics, Pharmaceuticals, and Feed industries.",
    "url": "https://avchemicals.com",
    "telephone": "+91-XXXXXXXXXX",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "901, 9th Floor, Sureshwari Techno IT Park, Link Road",
      "addressLocality": "Borivali West",
      "addressRegion": "Maharashtra",
      "postalCode": "400092",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "19.2307",
      "longitude": "72.8567"
    },
    "openingHours": "Mo-Sa 09:00-19:00",
    "priceRange": "$$"
  }
  </script>
  <?php endif; ?>
</head>
<body>

  <!-- Preloader -->
  <div class="preloader">
    <div class="preloader-inner">
      <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="AV Chemical" class="preloader-logo" onerror="this.style.display='none'">
      <div class="preloader-ring"></div>
    </div>
  </div>

  <!-- Mobile Nav Overlay -->
  <div class="nav-overlay"></div>

  <!-- Navbar -->
  <nav class="navbar">
    <a href="<?php echo $base_url; ?>/index.php" class="nav-brand">
      <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="AV Chemical Logo" class="nav-logo" onerror="this.style.display='none'">
    </a>

    <div class="nav-menu">
      <a href="<?php echo $base_url; ?>/index.php" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">Home</a>
      <a href="<?php echo $base_url; ?>/about.php" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">About</a>
      <a href="<?php echo $base_url; ?>/products.php" class="nav-link <?php echo $current_page === 'products' ? 'active' : ''; ?>">Products</a>
      <a href="<?php echo $base_url; ?>/industries.php" class="nav-link <?php echo $current_page === 'industries' ? 'active' : ''; ?>">Industries</a>
      <a href="<?php echo $base_url; ?>/contact.php" class="nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>">Contact</a>
    </div>

    <button class="hamburger" aria-label="Toggle Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>
