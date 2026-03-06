<?php
// Determine current page for nav active state
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Auto-detect base URL from server configuration
$script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = rtrim($script_dir, '/');
if (basename($base_url) === 'includes' || basename($base_url) === 'api') {
    $base_url = str_replace('\\', '/', dirname($base_url));
}
$base_url = rtrim($base_url, '/');
if ($base_url === '' || $base_url === '.') {
    $base_url = '';
}

$site_url = 'https://avchemicals.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php if ($current_page === 'index'): ?>
  <title>A.V. Chemical | Chemical Raw Material Distributor in Mumbai, India</title>
  <meta name="description" content="A.V. Chemical is Mumbai's trusted chemical raw material distributor. We supply 500+ premium chemicals including amino acids, sweeteners, vitamins, excipients & solvents to food, pharma, nutraceutical & industrial sectors across India.">
  <meta name="keywords" content="chemical raw material supplier Mumbai, chemical distributor India, amino acids supplier, sweeteners supplier India, pharmaceutical excipients, nutraceutical raw materials, food grade chemicals, AV Chemical">
  <link rel="canonical" href="<?php echo $site_url; ?>/">
  <meta property="og:title" content="A.V. Chemical | Chemical Raw Material Distributor in Mumbai">
  <meta property="og:description" content="Mumbai's trusted supplier of 500+ premium chemical raw materials for food, pharma, nutraceutical, cosmetics & industrial industries. Pan-India distribution.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $site_url; ?>/">
  <meta property="og:image" content="<?php echo $site_url; ?>/assets/images/logo.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="A.V. Chemical | Chemical Raw Material Distributor in Mumbai">
  <meta name="twitter:description" content="Mumbai's trusted supplier of 500+ premium chemical raw materials for food, pharma, nutraceutical, cosmetics & industrial industries.">
  <?php elseif ($current_page === 'about'): ?>
  <title>About Us | A.V. Chemical — Mumbai's Trusted Chemical Distributor Since 2021</title>
  <meta name="description" content="Learn about A.V. Chemical's mission, team, and journey. Founded in 2021, we are a Mumbai-based partnership firm distributing 500+ chemical raw materials to 100+ clients across India.">
  <meta name="keywords" content="about AV Chemical, chemical distributor Mumbai, chemical trading company India, Virang Sanghvi, chemical raw material company">
  <link rel="canonical" href="<?php echo $site_url; ?>/about">
  <meta property="og:title" content="About A.V. Chemical | Mumbai Chemical Distributor">
  <meta property="og:description" content="Founded in 2021 in Mumbai, A.V. Chemical bridges global chemical manufacturers with Indian industries. 500+ products, 100+ clients, pan-India reach.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $site_url; ?>/about">
  <meta property="og:image" content="<?php echo $site_url; ?>/assets/images/logo.png">
  <?php elseif ($current_page === 'products'): ?>
  <title>Chemical Products Catalogue | A.V. Chemical — 500+ Raw Materials</title>
  <meta name="description" content="Browse A.V. Chemical's extensive product catalogue: amino acids, sweeteners, vitamins & minerals, pharmaceutical excipients, nutraceutical raw materials, organic solvents, food ingredients & more. Request a quote today.">
  <meta name="keywords" content="chemical product catalogue India, amino acids buy India, sweeteners supplier, pharmaceutical excipients Mumbai, nutraceutical ingredients, organic solvents supplier, food chemicals">
  <link rel="canonical" href="<?php echo $site_url; ?>/products">
  <meta property="og:title" content="Chemical Products Catalogue | A.V. Chemical">
  <meta property="og:description" content="500+ premium chemical raw materials across 10 categories. Amino acids, sweeteners, vitamins, excipients, solvents & more. Pan-India delivery.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $site_url; ?>/products">
  <meta property="og:image" content="<?php echo $site_url; ?>/assets/images/logo.png">
  <?php elseif ($current_page === 'industries'): ?>
  <title>Industries Served | A.V. Chemical — Food, Pharma, Nutraceuticals & More</title>
  <meta name="description" content="A.V. Chemical supplies raw materials to Food & Beverage, Pharmaceuticals, Nutraceuticals, Cosmetics, Feed & Poultry, and Industrial sectors across India. Trusted by 100+ companies nationwide.">
  <meta name="keywords" content="chemical supplier food industry India, pharmaceutical raw material supplier, nutraceutical ingredients supplier, cosmetics raw materials, feed additives India, industrial chemicals Mumbai">
  <link rel="canonical" href="<?php echo $site_url; ?>/industries">
  <meta property="og:title" content="Industries Served by A.V. Chemical">
  <meta property="og:description" content="Raw material supply for 6 major industries: Food & Beverage, Pharmaceuticals, Nutraceuticals, Cosmetics, Feed & Poultry, Industrial.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $site_url; ?>/industries">
  <meta property="og:image" content="<?php echo $site_url; ?>/assets/images/logo.png">
  <?php elseif ($current_page === 'contact'): ?>
  <title>Contact A.V. Chemical | Get a Quote for Chemical Raw Materials</title>
  <meta name="description" content="Contact A.V. Chemical for chemical raw material enquiries, pricing, and bulk orders. Located in Borivali West, Mumbai. Call or email us Monday–Saturday, 9 AM–7 PM.">
  <meta name="keywords" content="contact AV Chemical, chemical raw material enquiry, bulk chemical order India, chemical supplier contact Mumbai">
  <link rel="canonical" href="<?php echo $site_url; ?>/contact">
  <meta property="og:title" content="Contact A.V. Chemical | Chemical Raw Material Enquiries">
  <meta property="og:description" content="Get in touch with A.V. Chemical for product enquiries, bulk pricing, and partnerships. Mumbai-based, pan-India service.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $site_url; ?>/contact">
  <meta property="og:image" content="<?php echo $site_url; ?>/assets/images/logo.png">
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
  <!-- Structured Data: LocalBusiness + Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "Organization"],
    "name": "A.V. Chemical",
    "alternateName": "AV Chemical",
    "description": "Mumbai-based chemical raw material distributor supplying 500+ premium chemicals to food, pharma, nutraceutical, cosmetics, and industrial sectors across India.",
    "url": "https://avchemicals.com",
    "logo": "https://avchemicals.com/assets/images/logo.png",
    "image": "https://avchemicals.com/assets/images/logo.png",
    "telephone": "+91-XXXXXXXXXX",
    "email": "info@avchemicals.com",
    "foundingDate": "2021",
    "numberOfEmployees": "10",
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
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
      "opens": "09:00",
      "closes": "19:00"
    },
    "areaServed": {
      "@type": "Country",
      "name": "India"
    },
    "sameAs": [
      "https://avchemicals.com"
    ]
  }
  </script>
  <?php elseif ($current_page === 'products'): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "A.V. Chemical Product Catalogue",
    "description": "500+ premium chemical raw materials across 10 product categories",
    "numberOfItems": 500,
    "url": "https://avchemicals.com/products"
  }
  </script>
  <?php elseif ($current_page === 'contact'): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact A.V. Chemical",
    "url": "https://avchemicals.com/contact",
    "description": "Contact A.V. Chemical for chemical raw material enquiries and bulk orders."
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
  <nav class="navbar" aria-label="Main Navigation">
    <a href="<?php echo $base_url; ?>/" class="nav-brand" aria-label="A.V. Chemical Home">
      <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="A.V. Chemical Logo" class="nav-logo" onerror="this.style.display='none'">
    </a>

    <div class="nav-menu">
      <a href="<?php echo $base_url; ?>/" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">Home</a>
      <a href="<?php echo $base_url; ?>/about" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">About</a>
      <a href="<?php echo $base_url; ?>/products" class="nav-link <?php echo $current_page === 'products' ? 'active' : ''; ?>">Products</a>
      <a href="<?php echo $base_url; ?>/industries" class="nav-link <?php echo $current_page === 'industries' ? 'active' : ''; ?>">Industries</a>
      <a href="<?php echo $base_url; ?>/contact" class="nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>">Contact</a>
    </div>

    <button class="hamburger" aria-label="Toggle Menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>
