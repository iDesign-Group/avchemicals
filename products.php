<?php include 'includes/header.php'; ?>

  <!-- ====== PRODUCTS HERO ====== -->
  <section class="product-page-hero">
    <div class="container">
      <h1 class="text-gold reveal">Product Catalogue</h1>
      <p class="reveal reveal-delay-1" style="max-width:600px; margin:16px auto 0;">
        Explore our comprehensive range of 500+ chemical raw materials across 10 product categories.
      </p>
    </div>
  </section>

  <!-- ====== PRODUCT CONTROLS & GRID ====== -->
  <section style="background: var(--grey-section); padding-top: 40px;">
    <div class="container">
      <!-- Search & Filter Controls -->
      <div class="product-controls reveal">
        <div class="search-box">
          <input type="text" id="productSearch" placeholder="Search products..." autocomplete="off">
        </div>
      </div>

      <!-- Category Tabs -->
      <div class="category-tabs reveal" id="categoryTabs">
        <!-- Built dynamically by product-filter.js -->
      </div>

      <!-- Products Grid -->
      <div class="products-grid mt-40" id="productsGrid">
        <!-- Rendered dynamically by product-filter.js -->
        <div class="no-results">
          <h3>Loading products...</h3>
          <p>Please wait while we fetch the product catalogue.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== CTA ====== -->
  <section class="cta-strip">
    <div class="container">
      <h2>Can't Find What You're Looking For?</h2>
      <p style="color: var(--white-text); margin-bottom: 24px;">Contact us for custom sourcing requirements — we can procure almost any chemical raw material.</p>
      <a href="<?php echo $base_url; ?>/contact.php" class="btn btn-dark">Request a Quote</a>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
