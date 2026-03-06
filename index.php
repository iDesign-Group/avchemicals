<?php include 'includes/header.php'; ?>

  <!-- ====== HERO SECTION ====== -->
  <section class="hero">
    <div class="hero-bg-pattern"></div>
    <div class="hero-hexagons">
      <div class="hex"></div>
      <div class="hex"></div>
      <div class="hex"></div>
      <div class="hex"></div>
      <div class="hex"></div>
      <div class="hex"></div>
    </div>

    <!-- Molecule SVG Background -->
    <svg class="molecule-bg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
      <circle cx="100" cy="40" r="12" fill="none" stroke="#FFB300" stroke-width="1.5"/>
      <circle cx="50" cy="120" r="10" fill="none" stroke="#2E7D32" stroke-width="1.5"/>
      <circle cx="150" cy="120" r="10" fill="none" stroke="#FFB300" stroke-width="1.5"/>
      <circle cx="100" cy="170" r="8" fill="none" stroke="#2E7D32" stroke-width="1.5"/>
      <line x1="100" y1="52" x2="55" y2="112" stroke="#FFB300" stroke-width="1" opacity="0.5"/>
      <line x1="100" y1="52" x2="145" y2="112" stroke="#2E7D32" stroke-width="1" opacity="0.5"/>
      <line x1="55" y1="128" x2="95" y2="164" stroke="#FFB300" stroke-width="1" opacity="0.5"/>
      <line x1="145" y1="128" x2="105" y2="164" stroke="#2E7D32" stroke-width="1" opacity="0.5"/>
    </svg>

    <div class="hero-content">
      <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="A.V. Chemical Logo" class="hero-logo" onerror="this.style.display='none'">
      <h1>
        <span>A.V. Chemical</span>
      </h1>
      <p class="hero-subtitle">Importing &amp; Distributing Premium Raw Materials across India</p>
      <div class="hero-buttons">
        <a href="<?php echo $base_url; ?>/products.php" class="btn btn-gold">Explore Products</a>
        <a href="<?php echo $base_url; ?>/contact.php" class="btn btn-green-outline">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- ====== STATS COUNTER STRIP ====== -->
  <section class="stats-strip">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item reveal">
          <h3 data-target="10" data-suffix="+">0+</h3>
          <p>Years Experience</p>
        </div>
        <div class="stat-item reveal reveal-delay-1">
          <h3 data-target="500" data-suffix="+">0+</h3>
          <p>Products</p>
        </div>
        <div class="stat-item reveal reveal-delay-2">
          <h3 data-target="50" data-suffix="+">0+</h3>
          <p>Industries Served</p>
        </div>
        <div class="stat-item reveal reveal-delay-3">
          <h3 data-target="100" data-suffix="+">0+</h3>
          <p>Happy Clients</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== ABOUT SNAPSHOT ====== -->
  <section class="about-snapshot">
    <div class="container">
      <div class="about-grid">
        <div class="about-text reveal">
          <h2>Who We Are</h2>
          <p>A.V. Chemical is a Mumbai-based chemical trading and distribution firm specialising in premium raw materials for the Food &amp; Beverage, Nutraceutical, Cosmetics, Pharmaceutical, and Feed &amp; Poultry industries.</p>
          <p>With a focus on quality, reliability, and competitive pricing, we bridge the gap between global manufacturers and Indian industries. Our extensive product portfolio covers over 500 chemicals and ingredients, sourced from certified manufacturers worldwide.</p>
          <a href="<?php echo $base_url; ?>/about.php" class="btn btn-gold mt-20">Learn More About Us</a>
        </div>
        <div class="about-facts-card reveal reveal-delay-2">
          <div class="fact-item">
            <span class="fact-icon">🏢</span>
            <div>
              <span class="fact-label">Founded</span>
              <span class="fact-value">2021</span>
            </div>
          </div>
          <div class="fact-item">
            <span class="fact-icon">📍</span>
            <div>
              <span class="fact-label">Headquarters</span>
              <span class="fact-value">Mumbai, Maharashtra</span>
            </div>
          </div>
          <div class="fact-item">
            <span class="fact-icon">🤝</span>
            <div>
              <span class="fact-label">Business Type</span>
              <span class="fact-value">Partnership Firm</span>
            </div>
          </div>
          <div class="fact-item">
            <span class="fact-icon">🌍</span>
            <div>
              <span class="fact-label">Distribution</span>
              <span class="fact-value">Pan-India</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== PRODUCT CATEGORIES — FLIP CARDS ====== -->
  <section class="products-section" style="background: var(--grey-section);">
    <div class="container">
      <div class="section-heading reveal">
        <h2>Our Product Categories</h2>
        <p>Explore our comprehensive range of 10 product categories serving diverse industries</p>
      </div>
      <div class="flip-cards-grid">
        <?php
        $products = json_decode(file_get_contents(__DIR__ . '/assets/data/products.json'), true);
        if ($products) {
          foreach ($products as $index => $cat) {
            $delay = ($index % 4) + 1;
            $desc_items = array_slice($cat['items'], 0, 3);
        ?>
        <div class="flip-card reveal reveal-delay-<?php echo $delay; ?>">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <span class="card-icon"><?php echo $cat['icon']; ?></span>
              <h3><?php echo htmlspecialchars($cat['name']); ?></h3>
              <p class="card-tagline"><?php echo htmlspecialchars($cat['tagline']); ?></p>
            </div>
            <div class="flip-card-back">
              <h3><?php echo htmlspecialchars($cat['name']); ?></h3>
              <ul>
                <?php foreach ($desc_items as $item): ?>
                <li><?php echo htmlspecialchars($item['name']); ?></li>
                <?php endforeach; ?>
              </ul>
              <a href="<?php echo $base_url; ?>/products.php?cat=<?php echo urlencode($cat['id']); ?>" class="btn btn-gold">Learn More</a>
            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>

  <!-- ====== INDUSTRIES WE SERVE — HEX GRID ====== -->
  <section class="industries-home" style="background: var(--black-deep);">
    <div class="container">
      <div class="section-heading reveal">
        <h2>Industries We Serve</h2>
        <p>Trusted raw material supply across 6 major industry verticals</p>
      </div>
      <div class="hex-grid" id="industriesGrid">
        <noscript>
          <a href="<?php echo $base_url; ?>/industries.php" class="hex-tile">
            <span class="hex-icon">🍽️</span><span class="hex-label">Food & Beverage</span>
          </a>
          <a href="<?php echo $base_url; ?>/industries.php" class="hex-tile">
            <span class="hex-icon">💪</span><span class="hex-label">Nutraceuticals</span>
          </a>
          <a href="<?php echo $base_url; ?>/industries.php" class="hex-tile">
            <span class="hex-icon">✨</span><span class="hex-label">Cosmetics</span>
          </a>
          <a href="<?php echo $base_url; ?>/industries.php" class="hex-tile">
            <span class="hex-icon">💊</span><span class="hex-label">Pharmaceuticals</span>
          </a>
          <a href="<?php echo $base_url; ?>/industries.php" class="hex-tile">
            <span class="hex-icon">🐔</span><span class="hex-label">Feed & Poultry</span>
          </a>
          <a href="<?php echo $base_url; ?>/industries.php" class="hex-tile">
            <span class="hex-icon">🏭</span><span class="hex-label">Industrial</span>
          </a>
        </noscript>
      </div>
    </div>
  </section>

  <!-- ====== WHY CHOOSE US — FLIP CARDS ====== -->
  <section class="why-choose">
    <div class="container">
      <div class="section-heading reveal">
        <h2>Why Choose Us</h2>
        <p>What makes A.V. Chemical your trusted raw material partner</p>
      </div>
      <div class="why-grid">
        <div class="flip-card reveal">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <span class="card-icon">✅</span>
              <h3>Quality Assurance</h3>
              <p class="card-tagline">Certified excellence</p>
            </div>
            <div class="flip-card-back">
              <h3>Quality Assurance</h3>
              <ul>
                <li>COA with every shipment</li>
                <li>IP/BP/USP grade materials</li>
                <li>FSSAI compliant ingredients</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flip-card reveal reveal-delay-1">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <span class="card-icon">🌏</span>
              <h3>Pan-India Reach</h3>
              <p class="card-tagline">Nationwide delivery</p>
            </div>
            <div class="flip-card-back">
              <h3>Pan-India Reach</h3>
              <ul>
                <li>Distribution across all states</li>
                <li>Efficient logistics network</li>
                <li>Timely delivery guaranteed</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flip-card reveal reveal-delay-2">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <span class="card-icon">🔬</span>
              <h3>Expert Sourcing</h3>
              <p class="card-tagline">Global procurement</p>
            </div>
            <div class="flip-card-back">
              <h3>Expert Sourcing</h3>
              <ul>
                <li>Global manufacturer network</li>
                <li>Competitive pricing</li>
                <li>Bulk & custom packaging</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flip-card reveal reveal-delay-3">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <span class="card-icon">📦</span>
              <h3>Reliable Supply</h3>
              <p class="card-tagline">Consistent availability</p>
            </div>
            <div class="flip-card-back">
              <h3>Reliable Supply</h3>
              <ul>
                <li>Ready stock availability</li>
                <li>No supply chain disruptions</li>
                <li>Flexible order quantities</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== TESTIMONIALS CAROUSEL ====== -->
  <section class="testimonials">
    <div class="container">
      <div class="section-heading reveal">
        <h2>Client Testimonials</h2>
        <p>What our partners say about working with A.V. Chemical</p>
      </div>
      <div class="carousel-wrapper">
        <div class="carousel-track">
          <!-- Loaded dynamically from testimonials.json -->
        </div>
        <div class="carousel-dots">
          <!-- Loaded dynamically -->
        </div>
      </div>
    </div>
  </section>

  <!-- ====== CTA STRIP ====== -->
  <section class="cta-strip">
    <div class="container">
      <h2>Ready to Source Premium Chemicals?</h2>
      <a href="<?php echo $base_url; ?>/contact.php" class="btn btn-dark">Get In Touch</a>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
