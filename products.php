<?php include 'includes/header.php'; ?>

  <!-- ====== PRODUCT PAGE HERO ====== -->
  <section class="product-page-hero" aria-label="Products Hero">
    <div class="container">
      <div class="cat-hero-icon" aria-hidden="true">🧪</div>
      <h1 class="text-gold">Chemical Product Catalogue</h1>
      <p style="max-width:640px; margin:16px auto 0; color:var(--text-muted);">Explore our comprehensive range of <strong>500+ premium chemical raw materials</strong> across 10 product categories — food grade, pharma grade, nutraceutical, industrial &amp; more. All products supplied with COA, MSDS &amp; TDS.</p>
    </div>
  </section>

  <!-- ====== BROWSE BY CATEGORY CARDS ====== -->
  <section style="background:var(--white); padding:70px 0;" aria-labelledby="categories-heading">
    <div class="container">
      <div class="section-heading">
        <h2 id="categories-heading">Browse by Category</h2>
        <p>Select a category to explore our chemical products in detail</p>
      </div>
      <div id="categoriesGrid" class="category-cards-grid"></div>
      <div id="categoriesError" class="no-results" style="display:none;">
        <h3>Unable to load categories</h3>
        <p>Please refresh the page.</p>
      </div>
    </div>
  </section>

  <!-- ====== PRODUCT SEARCH + FILTER ====== -->
  <section style="background:var(--surface); padding:70px 0;" aria-labelledby="products-filter-heading">
    <div class="container">
      <div class="section-heading">
        <h2 id="products-filter-heading">Search Our Products</h2>
        <p>Filter by category or search by name to find the exact chemical you need</p>
      </div>
      <div class="product-controls">
        <div class="search-box">
          <input type="text" id="productSearch" placeholder="Search chemicals, ingredients..." aria-label="Search products">
        </div>
        <div class="category-tabs" id="categoryTabs"></div>
      </div>
      <div class="products-grid" id="productsGrid"></div>
    </div>
  </section>

  <!-- ====== SEO CONTENT ====== -->
  <section style="background:var(--white); padding:70px 0;" aria-labelledby="why-buy-heading">
    <div class="container">
      <div class="section-heading">
        <h2 id="why-buy-heading">Why Buy Chemicals from A.V. Chemical?</h2>
        <p>Quality, documentation, and reliability — the A.V. Chemical promise</p>
      </div>
      <div style="display:grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap:24px;">
        <div class="glass-card" style="padding:24px;">
          <span style="font-size:32px;">📄</span>
          <h3 style="color:var(--green-dark); margin:10px 0 8px; font-size:1rem;">Complete Documentation</h3>
          <p style="font-size:0.9rem;">Every product comes with Certificate of Analysis (COA), Material Safety Data Sheet (MSDS), and Technical Data Sheet (TDS).</p>
        </div>
        <div class="glass-card" style="padding:24px;">
          <span style="font-size:32px;">✅</span>
          <h3 style="color:var(--green-dark); margin:10px 0 8px; font-size:1rem;">Multi-Grade Options</h3>
          <p style="font-size:0.9rem;">Products available in Food Grade, Pharmaceutical Grade (IP/BP/USP), Industrial Grade, and AR Grade as required.</p>
        </div>
        <div class="glass-card" style="padding:24px;">
          <span style="font-size:32px;">📦</span>
          <h3 style="color:var(--green-dark); margin:10px 0 8px; font-size:1rem;">Flexible Packaging</h3>
          <p style="font-size:0.9rem;">Available in multiple pack sizes — from 500g sample packs to 25kg bags and bulk tankers for large-scale production.</p>
        </div>
        <div class="glass-card" style="padding:24px;">
          <span style="font-size:32px;">🚚</span>
          <h3 style="color:var(--green-dark); margin:10px 0 8px; font-size:1rem;">Fast Delivery</h3>
          <p style="font-size:0.9rem;">Pan-India delivery with reliable logistics partners. Prompt dispatch from our Mumbai base to all major cities and industrial areas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== CTA ====== -->
  <section class="cta-strip">
    <div class="container">
      <h2>Can't Find What You're Looking For?</h2>
      <p style="color:rgba(255,255,255,0.85); margin-bottom:24px;">We source custom chemicals on request. Contact us with your specifications.</p>
      <a href="<?php echo $base_url; ?>/contact" class="btn btn-dark">Request a Product</a>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
