<?php $page = basename($_SERVER['PHP_SELF'],'.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="AV Chemicals - Premium chemical solutions for industry. Based in Borivali, Mumbai. GST: 27ABVFA7475M1ZF">
<title><?= isset($page_title) ? $page_title.' | AV Chemicals' : 'AV Chemicals | Chemistry That Performs' ?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>

    
  </div>
</div>

<header class="header" id="header">
  <div class="container">
    <nav class="nav">
      <a href="index.php" class="logo">
        <img src="images/logo.png" alt="AV Chemicals Logo">
        <div class="logo-text">
          <span class="logo-name">AV Chemicals</span>
          <span class="logo-tagline">Chemistry That Performs</span>
        </div>
      </a>
      <ul class="nav-menu" id="navMenu">
        <li><a href="index.php">Home</a></li>
        <li class="has-dropdown">
          <a href="businesses.php">Businesses</a>
          <ul class="dropdown">
            <li><a href="businesses.php#specialty">Specialty Chemicals</a></li>
            <li><a href="businesses.php#industrial">Industrial Chemicals</a></li>
            <li><a href="businesses.php#agro">Agro Chemicals</a></li>
            <li><a href="businesses.php#pharma">Pharma Intermediates</a></li>
            <li><a href="businesses.php#cleaning">Cleaning Compounds</a></li>
            <li><a href="businesses.php#water">Water Treatment</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="industries.php">Industries</a>
          <ul class="dropdown">
            <li><a href="industries.php#textile">Textile</a></li>
            <li><a href="industries.php#pharma">Pharmaceuticals</a></li>
            <li><a href="industries.php#food">Food &amp; Beverage</a></li>
            <li><a href="industries.php#auto">Automotive</a></li>
            <li><a href="industries.php#construction">Construction</a></li>
            <li><a href="industries.php#paint">Paint &amp; Coatings</a></li>
          </ul>
        </li>
        <li><a href="sustainability.php">Sustainability</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
      <div class="nav-cta">
        <a href="contact.php" class="btn btn-primary">Contact Us</a>
      </div>
      <div class="hamburger" id="hamburger">
        <span></span><span></span><span></span>
      </div>
    </nav>
    <nav class="mobile-nav" id="mobileNav">
      <a href="index.php">Home</a>
      <a href="businesses.php">Businesses &amp; Products</a>
      <a href="industries.php">Industries We Serve</a>
      <a href="sustainability.php">Sustainability</a>
      <a href="about.php">About Us</a>
      <a href="contact.php" class="btn btn-primary">Contact Us</a>
    </nav>
  </div>
</header>

<script>
  (function() {
    var header = document.getElementById('header');
    function onScroll() {
      if (window.scrollY > 40) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  })();
</script>
