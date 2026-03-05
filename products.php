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

  <!-- ====== CATEGORY GRID ====== -->
  <section style="background: var(--off-white); padding: 60px 0 80px;">
    <div class="container">
      <div class="section-heading reveal">
        <h2>Browse by Category</h2>
        <p>Select a category to explore products in detail</p>
      </div>
      <div class="category-cards-grid" id="categoryCardsGrid">
        <div class="no-results"><h3>Loading categories...</h3></div>
      </div>
    </div>
  </section>

  <!-- ====== CTA ====== -->
  <section class="cta-strip">
    <div class="container">
      <h2>Can't Find What You're Looking For?</h2>
      <p style="color: rgba(255,255,255,0.85); margin-bottom: 24px;">Contact us for custom sourcing requirements &mdash; we can procure almost any chemical raw material.</p>
      <a href="<?php echo $base_url; ?>/contact.php" class="btn btn-dark">Request a Quote</a>
    </div>
  </section>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    var grid = document.getElementById('categoryCardsGrid');
    if (!grid) return;

    fetch(window.BASE_URL + '/api/get_products.php')
      .then(function (r) { return r.json(); })
      .then(function (resp) {
        var cats = resp.data || [];
        if (!cats.length) {
          grid.innerHTML = '<div class="no-results"><h3>No categories found</h3></div>';
          return;
        }
        grid.innerHTML = '';
        cats.forEach(function (cat) {
          var card = document.createElement('a');
          card.className = 'category-card reveal';
          card.href = window.BASE_URL + '/category.php?cat=' + encodeURIComponent(cat.id);

          var imgHtml = cat.image
            ? '<div class="cat-card-img"><img src="' + cat.image + '" alt="' + cat.name + '" loading="lazy"></div>'
            : '<div class="cat-card-img cat-card-img--fallback">' + cat.icon + '</div>';

          card.innerHTML =
            imgHtml +
            '<div class="cat-card-body">' +
              '<h3>' + cat.name + '</h3>' +
              '<p class="cat-card-tagline">' + cat.tagline + '</p>' +
              '<span class="cat-card-count">' + cat.items.length + ' Products</span>' +
            '</div>' +
            '<div class="cat-card-arrow">&rarr;</div>';
          grid.appendChild(card);
        });
        setTimeout(function () {
          grid.querySelectorAll('.reveal').forEach(function (el) {
            el.classList.add('revealed');
          });
        }, 100);
      })
      .catch(function () {
        grid.innerHTML = '<div class="no-results"><h3>Unable to load categories</h3><p>Please refresh the page.</p></div>';
      });
  });
  </script>

<?php include 'includes/footer.php'; ?>
