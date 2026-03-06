<?php include 'includes/header.php'; ?>

  <!-- ====== HERO SECTION ====== -->
  <section class="hero" aria-label="Hero">
    <div class="hero-bg-pattern"></div>
    <div class="hero-hexagons">
      <div class="hex"></div>
      <div class="hex"></div>
      <div class="hex"></div>
      <div class="hex"></div>
      <div class="hex"></div>
      <div class="hex"></div>
    </div>
    <svg class="molecule-bg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
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
      <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="A.V. Chemical — Chemical Raw Material Distributor Mumbai" class="hero-logo" onerror="this.style.display='none'" width="140" height="140">
      <h1>A.V. Chemical</h1>
      <p class="hero-subtitle">India's Trusted Chemical Raw Material Distributor — Sourcing &amp; Supplying 500+ Premium Ingredients Across Food, Pharma &amp; Nutraceutical Industries</p>
      <div class="hero-buttons">
        <a href="<?php echo $base_url; ?>/products" class="btn btn-gold">Explore Products</a>
        <a href="<?php echo $base_url; ?>/contact" class="btn btn-green-outline">Request a Quote</a>
      </div>
    </div>
  </section>

  <!-- ====== STATS COUNTER STRIP ====== -->
  <section class="stats-strip" aria-label="Company Statistics">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item reveal">
          <h3 data-target="5" data-suffix="+">0+</h3>
          <p>Years in Business</p>
        </div>
        <div class="stat-item reveal reveal-delay-1">
          <h3 data-target="500" data-suffix="+">0+</h3>
          <p>Products in Catalogue</p>
        </div>
        <div class="stat-item reveal reveal-delay-2">
          <h3 data-target="6" data-suffix="">0</h3>
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
  <section class="about-snapshot" aria-labelledby="about-heading">
    <div class="container">
      <div class="about-grid">
        <div class="about-text reveal">
          <h2 id="about-heading">Mumbai's Trusted Chemical Raw Material Distributor</h2>
          <p>A.V. Chemical is a Mumbai-based chemical trading and distribution firm specialising in premium raw materials for the <strong>Food &amp; Beverage</strong>, <strong>Nutraceutical</strong>, <strong>Cosmetics</strong>, <strong>Pharmaceutical</strong>, and <strong>Feed &amp; Poultry</strong> industries across India.</p>
          <p>Founded in 2021, we bridge the gap between certified global manufacturers and Indian manufacturers. Our product portfolio covers <strong>500+ chemicals and specialty ingredients</strong> — all sourced with proper documentation including COA, MSDS, and compliance certificates.</p>
          <p>Whether you need food-grade sweeteners, pharmaceutical excipients, nutraceutical actives, or industrial solvents — A.V. Chemical delivers quality, consistency, and competitive pricing with pan-India logistics.</p>
          <a href="<?php echo $base_url; ?>/about" class="btn btn-gold mt-20">Learn More About Us</a>
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
              <span class="fact-value">Borivali West, Mumbai</span>
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
          <div class="fact-item">
            <span class="fact-icon">📋</span>
            <div>
              <span class="fact-label">Documentation</span>
              <span class="fact-value">COA, MSDS, TDS</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== PRODUCT CATEGORIES — FLIP CARDS ====== -->
  <section class="products-section" style="background: var(--grey-section);" aria-labelledby="products-heading">
    <div class="container">
      <div class="section-heading reveal">
        <h2 id="products-heading">Our Chemical Product Categories</h2>
        <p>10 specialised product categories covering Food, Pharma, Nutraceutical, Cosmetic &amp; Industrial applications</p>
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
              <span class="card-icon" aria-hidden="true"><?php echo $cat['icon']; ?></span>
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
              <a href="<?php echo $base_url; ?>/products?cat=<?php echo urlencode($cat['id']); ?>" class="btn btn-gold">View Products</a>
            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>
      </div>
      <div style="text-align:center; margin-top:40px;">
        <a href="<?php echo $base_url; ?>/products" class="btn btn-green-outline">View Full Product Catalogue</a>
      </div>
    </div>
  </section>

  <!-- ====== INDUSTRIES WE SERVE — HEX GRID ====== -->
  <section class="industries-home" style="background: var(--black-deep);" aria-labelledby="industries-heading">
    <div class="container">
      <div class="section-heading reveal">
        <h2 id="industries-heading">Industries We Serve</h2>
        <p>Trusted raw material supply across 6 major industry verticals — food, pharma, nutraceutical, cosmetics, animal feed, and industrial</p>
      </div>
      <div class="hex-grid" id="industriesGrid">
        <noscript>
          <a href="<?php echo $base_url; ?>/industries" class="hex-tile"><span class="hex-icon">🍽️</span><span class="hex-label">Food &amp; Beverage</span></a>
          <a href="<?php echo $base_url; ?>/industries" class="hex-tile"><span class="hex-icon">💪</span><span class="hex-label">Nutraceuticals</span></a>
          <a href="<?php echo $base_url; ?>/industries" class="hex-tile"><span class="hex-icon">✨</span><span class="hex-label">Cosmetics</span></a>
          <a href="<?php echo $base_url; ?>/industries" class="hex-tile"><span class="hex-icon">💊</span><span class="hex-label">Pharmaceuticals</span></a>
          <a href="<?php echo $base_url; ?>/industries" class="hex-tile"><span class="hex-icon">🐔</span><span class="hex-label">Feed &amp; Poultry</span></a>
          <a href="<?php echo $base_url; ?>/industries" class="hex-tile"><span class="hex-icon">🏭</span><span class="hex-label">Industrial</span></a>
        </noscript>
      </div>
    </div>
  </section>

  <!-- ====== WHY CHOOSE US ====== -->
  <section class="why-choose" aria-labelledby="why-heading">
    <div class="container">
      <div class="section-heading reveal">
        <h2 id="why-heading">Why Choose A.V. Chemical</h2>
        <p>What sets us apart as India's reliable chemical raw material partner</p>
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
                <li>Competitive bulk pricing</li>
                <li>Custom packaging available</li>
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

  <!-- ====== SEO CONTENT: ABOUT CHEMICAL DISTRIBUTION ====== -->
  <section style="background: var(--white); padding: 70px 0;" aria-labelledby="seo-content-heading">
    <div class="container">
      <div class="section-heading reveal">
        <h2 id="seo-content-heading">Chemical Raw Material Supply in India</h2>
        <p>Your end-to-end sourcing partner from global manufacturers to your facility</p>
      </div>
      <div style="display:grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap:30px; margin-top:20px;">
        <div class="glass-card reveal" style="padding:30px;">
          <h3 style="color:var(--gold-primary); margin-bottom:12px; font-size:1.1rem;">Food Grade Chemicals</h3>
          <p style="font-size:0.95rem;">We supply FSSAI-compliant food grade chemicals including sweeteners, preservatives, emulsifiers, food colours, and flavour enhancers. All products are sourced from approved manufacturers with complete regulatory documentation.</p>
        </div>
        <div class="glass-card reveal reveal-delay-1" style="padding:30px;">
          <h3 style="color:var(--gold-primary); margin-bottom:12px; font-size:1.1rem;">Pharmaceutical Raw Materials</h3>
          <p style="font-size:0.95rem;">Our pharmaceutical grade portfolio covers excipients, binders, coatings, and active ingredients meeting IP, BP, and USP pharmacopoeia standards. Full COA and MSDS documentation provided with every consignment.</p>
        </div>
        <div class="glass-card reveal reveal-delay-2" style="padding:30px;">
          <h3 style="color:var(--gold-primary); margin-bottom:12px; font-size:1.1rem;">Nutraceutical Ingredients</h3>
          <p style="font-size:0.95rem;">From amino acids and vitamins to herbal extracts and protein concentrates, our nutraceutical range supports supplement and functional food manufacturers with consistent quality and competitive bulk pricing.</p>
        </div>
        <div class="glass-card reveal reveal-delay-3" style="padding:30px;">
          <h3 style="color:var(--gold-primary); margin-bottom:12px; font-size:1.1rem;">Industrial Solvents &amp; Chemicals</h3>
          <p style="font-size:0.95rem;">High-purity organic solvents and industrial chemicals for manufacturing, R&amp;D, and process industries. Available in multiple pack sizes from laboratory grade to bulk industrial quantities.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== TESTIMONIALS CAROUSEL ====== -->
  <section class="testimonials" aria-labelledby="testimonials-heading">
    <div class="container">
      <div class="section-heading reveal">
        <h2 id="testimonials-heading">Client Testimonials</h2>
        <p>What our business partners say about working with A.V. Chemical</p>
      </div>
      <div class="carousel-wrapper">
        <div class="carousel-track"></div>
        <div class="carousel-dots"></div>
      </div>
    </div>
  </section>

  <!-- ====== FAQ SECTION ====== -->
  <section style="background: var(--surface); padding: 70px 0;" aria-labelledby="faq-heading">
    <div class="container">
      <div class="section-heading reveal">
        <h2 id="faq-heading">Frequently Asked Questions</h2>
        <p>Everything you need to know about sourcing chemicals from A.V. Chemical</p>
      </div>
      <div style="max-width:800px; margin:0 auto;">
        <details class="reveal" style="margin-bottom:16px; padding:20px 24px; background:var(--white); border-radius:12px; border:1px solid var(--border-light); cursor:pointer;">
          <summary style="font-family:var(--font-heading); font-size:1rem; color:var(--text-dark); letter-spacing:0.5px;">What industries does A.V. Chemical serve?</summary>
          <p style="margin-top:12px; font-size:0.95rem;">We supply raw materials to Food &amp; Beverage, Pharmaceuticals, Nutraceuticals, Cosmetics &amp; Personal Care, Feed &amp; Poultry, and Industrial sectors across India.</p>
        </details>
        <details class="reveal" style="margin-bottom:16px; padding:20px 24px; background:var(--white); border-radius:12px; border:1px solid var(--border-light); cursor:pointer;">
          <summary style="font-family:var(--font-heading); font-size:1rem; color:var(--text-dark); letter-spacing:0.5px;">Do you provide certificates of analysis (COA)?</summary>
          <p style="margin-top:12px; font-size:0.95rem;">Yes. Every product shipment from A.V. Chemical includes a Certificate of Analysis (COA), MSDS, and Technical Data Sheet (TDS) from the manufacturer.</p>
        </details>
        <details class="reveal" style="margin-bottom:16px; padding:20px 24px; background:var(--white); border-radius:12px; border:1px solid var(--border-light); cursor:pointer;">
          <summary style="font-family:var(--font-heading); font-size:1rem; color:var(--text-dark); letter-spacing:0.5px;">What is the minimum order quantity (MOQ)?</summary>
          <p style="margin-top:12px; font-size:0.95rem;">MOQ varies by product. We accommodate both small quantities for trials and large bulk orders for production. Contact us with your requirements for pricing.</p>
        </details>
        <details class="reveal" style="margin-bottom:16px; padding:20px 24px; background:var(--white); border-radius:12px; border:1px solid var(--border-light); cursor:pointer;">
          <summary style="font-family:var(--font-heading); font-size:1rem; color:var(--text-dark); letter-spacing:0.5px;">Do you deliver across India?</summary>
          <p style="margin-top:12px; font-size:0.95rem;">Yes, A.V. Chemical has a pan-India distribution network. We deliver to all major cities and states including Maharashtra, Gujarat, Delhi, Karnataka, Tamil Nadu, and more.</p>
        </details>
        <details class="reveal" style="margin-bottom:16px; padding:20px 24px; background:var(--white); border-radius:12px; border:1px solid var(--border-light); cursor:pointer;">
          <summary style="font-family:var(--font-heading); font-size:1rem; color:var(--text-dark); letter-spacing:0.5px;">Where are you located?</summary>
          <p style="margin-top:12px; font-size:0.95rem;">Our office is located at 901, 9th Floor, Sureshwari Techno IT Park, Link Road, Borivali West, Mumbai – 400092. We operate Monday to Saturday, 9 AM to 7 PM.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- ====== CTA STRIP ====== -->
  <section class="cta-strip">
    <div class="container">
      <h2>Ready to Source Premium Chemical Raw Materials?</h2>
      <p style="color:rgba(255,255,255,0.85); margin-bottom:24px; font-size:1rem;">Talk to our team today for pricing, documentation, and delivery timelines.</p>
      <a href="<?php echo $base_url; ?>/contact" class="btn btn-dark">Request a Quote</a>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
