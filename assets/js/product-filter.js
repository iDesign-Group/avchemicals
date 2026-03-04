/* ============================================
   AV CHEMICALS — Product Filter
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

  var productsGrid = document.getElementById('productsGrid');
  var categoryTabs = document.getElementById('categoryTabs');
  var searchInput = document.getElementById('productSearch');

  if (!productsGrid) return;

  var allProducts = [];
  var currentCategory = 'all';
  var searchTerm = '';
  var debounceTimer;

  // Fetch all products on load
  fetchProducts('all');

  // Build category tabs
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

    // Attach click handlers
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

  // Fetch products from API
  function fetchProducts(category) {
    var url = window.BASE_URL + '/api/get_products.php';
    if (category && category !== 'all') {
      url += '?category=' + encodeURIComponent(category);
    }

    fetch(url)
      .then(function (res) { return res.json(); })
      .then(function (response) {
        allProducts = response.data || [];
        buildCategoryTabs(allProducts);
        renderProducts();

        // Check URL for category filter
        var urlParams = new URLSearchParams(window.location.search);
        var catParam = urlParams.get('cat');
        if (catParam) {
          currentCategory = catParam;
          var activeTab = categoryTabs.querySelector('[data-category="' + catParam + '"]');
          if (activeTab) {
            categoryTabs.querySelectorAll('.cat-tab').forEach(function (t) {
              t.classList.remove('active');
            });
            activeTab.classList.add('active');
          }
          renderProducts();
        }
      })
      .catch(function (err) {
        console.log('Product fetch error:', err);
        productsGrid.innerHTML = '<div class="no-results"><h3>Unable to load products</h3><p>Please try refreshing the page.</p></div>';
      });
  }

  // Render product cards
  function renderProducts() {
    // Add filtering class for animation
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

  // Get filtered products based on category and search
  function getFilteredProducts() {
    var filtered = allProducts;

    // Filter by category
    if (currentCategory !== 'all') {
      filtered = filtered.filter(function (cat) {
        return cat.id === currentCategory;
      });
    }

    // Filter by search term
    if (searchTerm.length > 0) {
      var term = searchTerm.toLowerCase();
      filtered = filtered.map(function (cat) {
        var matchingItems = cat.items.filter(function (item) {
          return item.name.toLowerCase().indexOf(term) !== -1 ||
                 item.desc.toLowerCase().indexOf(term) !== -1;
        });

        if (matchingItems.length > 0 || cat.name.toLowerCase().indexOf(term) !== -1) {
          return {
            id: cat.id,
            name: cat.name,
            icon: cat.icon,
            items: matchingItems.length > 0 ? matchingItems : cat.items
          };
        }
        return null;
      }).filter(function (cat) {
        return cat !== null;
      });
    }

    return filtered;
  }

  // Search with debounce
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
