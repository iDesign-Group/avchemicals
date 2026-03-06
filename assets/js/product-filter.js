/* ============================================
   AV CHEMICALS — Product Filter
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

  var productsGrid    = document.getElementById('productsGrid');
  var categoriesGrid  = document.getElementById('categoriesGrid');
  var categoriesError = document.getElementById('categoriesError');
  var categoryTabs    = document.getElementById('categoryTabs');
  var searchInput     = document.getElementById('productSearch');

  if (!productsGrid && !categoriesGrid) return;

  var allProducts     = [];
  var currentCategory = 'all';
  var searchTerm      = '';
  var debounceTimer;

  // Fetch all products on load
  fetchProducts('all');

  // ---- Render Category Cards Grid ----
  function renderCategoryCards(data) {
    if (!categoriesGrid) return;
    categoriesGrid.innerHTML = '';

    if (!data || data.length === 0) {
      if (categoriesError) categoriesError.style.display = 'block';
      return;
    }

    data.forEach(function (cat) {
      var card = document.createElement('a');
      card.className = 'category-card';
      card.href = window.BASE_URL + '/category.php?cat=' + encodeURIComponent(cat.id);
      card.setAttribute('aria-label', cat.name);

      card.innerHTML =
        '<div class="cat-card-icon">' + cat.icon + '</div>' +
        '<div class="cat-card-body">' +
          '<h3>' + cat.name + '</h3>' +
          '<p class="cat-card-tagline">' + (cat.tagline || '') + '</p>' +
          '<span class="cat-card-count">' + (cat.items ? cat.items.length : 0) + '+ Products</span>' +
        '</div>' +
        '<span class="cat-card-arrow">&rsaquo;</span>';

      categoriesGrid.appendChild(card);
    });
  }

  // ---- Build category tabs ----
  function buildCategoryTabs(data) {
    if (!categoryTabs) return;
    categoryTabs.innerHTML = '';

    var allTab = document.createElement('button');
    allTab.className = 'cat-tab active';
    allTab.textContent = 'All';
    allTab.setAttribute('data-category', 'all');
    categoryTabs.appendChild(allTab);

    data.forEach(function (cat) {
      var tab = document.createElement('button');
      tab.className = 'cat-tab';
      tab.textContent = cat.name;
      tab.setAttribute('data-category', cat.id);
      categoryTabs.appendChild(tab);
    });

    categoryTabs.querySelectorAll('.cat-tab').forEach(function (tab) {
      tab.addEventListener('click', function () {
        categoryTabs.querySelectorAll('.cat-tab').forEach(function (t) {
          t.classList.remove('active');
        });
        tab.classList.add('active');
        currentCategory = tab.getAttribute('data-category');
        renderProducts();
      });
    });
  }

  // ---- Fetch products from API ----
  function fetchProducts(category) {
    var url = window.BASE_URL + '/api/get_products.php';
    if (category && category !== 'all') {
      url += '?category=' + encodeURIComponent(category);
    }

    fetch(url)
      .then(function (res) { return res.json(); })
      .then(function (response) {
        allProducts = response.data || [];

        renderCategoryCards(allProducts);
        buildCategoryTabs(allProducts);
        renderProducts();

        var urlParams  = new URLSearchParams(window.location.search);
        var catParam   = urlParams.get('cat');
        if (catParam) {
          currentCategory = catParam;
          if (categoryTabs) {
            var activeTab = categoryTabs.querySelector('[data-category="' + catParam + '"]');
            if (activeTab) {
              categoryTabs.querySelectorAll('.cat-tab').forEach(function (t) { t.classList.remove('active'); });
              activeTab.classList.add('active');
            }
          }
          renderProducts();
          var productsSection = productsGrid ? productsGrid.closest('section') : null;
          if (productsSection) {
            setTimeout(function () {
              productsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 400);
          }
        }
      })
      .catch(function (err) {
        console.log('Product fetch error:', err);
        if (categoriesError) categoriesError.style.display = 'block';
        if (productsGrid) {
          productsGrid.innerHTML = '<div class="no-results"><h3>Unable to load products</h3><p>Please try refreshing the page.</p></div>';
        }
      });
  }

  // ---- Render product cards ----
  function renderProducts() {
    if (!productsGrid) return;
    productsGrid.classList.add('filtering');
    setTimeout(function () {
      productsGrid.innerHTML = '';
      var filtered = getFilteredProducts();
      if (filtered.length === 0) {
        productsGrid.innerHTML = '<div class="no-results"><h3>No products found</h3><p>Try adjusting your search or filter criteria.</p></div>';
        productsGrid.classList.remove('filtering');
        return;
      }
      filtered.forEach(function (category) {
        category.items.forEach(function (item) {
          var card = document.createElement('div');
          card.className = 'product-card reveal revealed';
          card.innerHTML =
            '<span class="card-badge">' + category.icon + ' ' + category.name + '</span>' +
            '<h3>' + item.name + '</h3>' +
            '<p>' + item.desc + '</p>' +
            '<a href="' + window.BASE_URL + '/contact.php?product=' + encodeURIComponent(item.name) + '" class="btn btn-gold">Enquire</a>';
          productsGrid.appendChild(card);
        });
      });
      productsGrid.classList.remove('filtering');
    }, 300);
  }

  // ---- Get filtered products ----
  function getFilteredProducts() {
    var filtered = allProducts;
    if (currentCategory !== 'all') {
      filtered = filtered.filter(function (cat) { return cat.id === currentCategory; });
    }
    if (searchTerm.length > 0) {
      var term = searchTerm.toLowerCase();
      filtered = filtered.map(function (cat) {
        var matchingItems = cat.items.filter(function (item) {
          return item.name.toLowerCase().indexOf(term) !== -1 || item.desc.toLowerCase().indexOf(term) !== -1;
        });
        if (matchingItems.length > 0 || cat.name.toLowerCase().indexOf(term) !== -1) {
          return { id: cat.id, name: cat.name, icon: cat.icon, items: matchingItems.length > 0 ? matchingItems : cat.items };
        }
        return null;
      }).filter(function (cat) { return cat !== null; });
    }
    return filtered;
  }

  // ---- Search with debounce ----
  if (searchInput) {
    searchInput.addEventListener('input', function () {
      clearTimeout(debounceTimer);
      debounceTimer = setTimeout(function () {
        searchTerm = searchInput.value.trim();
        renderProducts();
      }, 300);
    });
  }

});
