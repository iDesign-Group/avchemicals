<?php
// Read category slug from URL
$cat_id = isset($_GET['cat']) ? preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['cat'])) : '';
if (!$cat_id) { header('Location: products.php'); exit; }
include 'includes/header.php';
?>

  <!-- ====== CATEGORY HERO ====== -->
  <section class="product-page-hero" id="catHero">
    <div class="container">
      <a href="<?php echo $base_url; ?>/products.php" class="cat-back-link">← All Categories</a>
      <div class="cat-hero-icon" id="catIcon">&#8987;</div>
      <h1 class="text-gold reveal" id="catTitle">Loading...</h1>
      <p class="reveal reveal-delay-1" id="catDesc" style="max-width:650px; margin:16px auto 0;"></p>
    </div>
  </section>

  <!-- ====== PRODUCTS GRID ====== -->
  <section style="background: var(--off-white); padding: 60px 0 80px;">
    <div class="container">

      <!-- Search -->
      <div class="product-controls reveal" style="margin-bottom:40px;">
        <div class="search-box">
          <input type="text" id="productSearch" placeholder="Search in this category..." autocomplete="off">
        </div>
      </div>

      <!-- Applications badges -->
      <div id="catApplications" style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:36px;"></div>

      <!-- Products Grid -->
      <div class="products-grid" id="productsGrid">
        <div class="no-results"><h3>Loading products...</h3></div>
      </div>
    </div>
  </section>

  <!-- ====== CTA ====== -->
  <section class="cta-strip">
    <div class="container">
      <h2>Interested in These Products?</h2>
      <p style="color:rgba(255,255,255,0.85);margin-bottom:24px;">Get in touch for pricing, samples, and technical specifications.</p>
      <a href="<?php echo $base_url; ?>/contact.php" class="btn btn-dark">Request a Quote</a>
    </div>
  </section>

  <script>
  (function () {
    var catId    = '<?php echo $cat_id; ?>';
    var title    = document.getElementById('catTitle');
    var desc     = document.getElementById('catDesc');
    var icon     = document.getElementById('catIcon');
    var appsEl   = document.getElementById('catApplications');
    var grid     = document.getElementById('productsGrid');
    var search   = document.getElementById('productSearch');
    var allItems = [];
    var timer;

    fetch(window.BASE_URL + '/api/get_products.php?category=' + encodeURIComponent(catId))
      .then(function (r) { return r.json(); })
      .then(function (resp) {
        var cats = resp.data || [];
        if (!cats.length) {
          title.textContent = 'Category Not Found';
          grid.innerHTML = '<div class="no-results"><h3>No products found</h3><p><a href="' + window.BASE_URL + '/products.php">Back to all categories</a></p></div>';
          return;
        }
        var cat = cats[0];
        // Update hero
        title.textContent = cat.name;
        desc.textContent  = cat.description || '';
        icon.textContent  = cat.icon || '';
        document.title    = cat.name + ' — A.V. Chemical';

        // Applications
        if (cat.applications && cat.applications.length) {
          cat.applications.forEach(function (app) {
            var badge = document.createElement('span');
            badge.className = 'industry-products';
            badge.style.cssText = 'background:var(--gold-light);border:1px solid var(--border-light);color:var(--gold-primary);padding:6px 14px;border-radius:50px;font-size:.85rem;';
            badge.textContent = app;
            appsEl.appendChild(badge);
          });
        }

        allItems = cat.items || [];
        renderItems(allItems, cat);
      })
      .catch(function () {
        grid.innerHTML = '<div class="no-results"><h3>Unable to load products</h3><p>Please refresh the page.</p></div>';
      });

    function renderItems(items, cat) {
      grid.innerHTML = '';
      if (!items.length) {
        grid.innerHTML = '<div class="no-results"><h3>No products match your search</h3></div>';
        return;
      }
      items.forEach(function (item) {
        var card = document.createElement('div');
        card.className = 'product-card reveal revealed';
        card.innerHTML =
          '<span class="card-badge">' + (cat ? cat.icon + ' ' + cat.name : '') + '</span>' +
          '<h3>' + item.name + '</h3>' +
          '<p>' + item.desc + '</p>' +
          '<a href="' + window.BASE_URL + '/contact.php?product=' + encodeURIComponent(item.name) + '" class="btn btn-gold">Enquire</a>';
        grid.appendChild(card);
      });
    }

    if (search) {
      search.addEventListener('input', function () {
        clearTimeout(timer);
        timer = setTimeout(function () {
          var term = search.value.trim().toLowerCase();
          var filtered = !term ? allItems : allItems.filter(function (i) {
            return i.name.toLowerCase().indexOf(term) !== -1 || i.desc.toLowerCase().indexOf(term) !== -1;
          });
          renderItems(filtered, null);
        }, 300);
      });
    }
  })();
  </script>

<?php include 'includes/footer.php'; ?>
