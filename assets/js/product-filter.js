/* ============================================
   AV CHEMICALS — Products Page: Category Cards
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

  var categoriesGrid  = document.getElementById('categoriesGrid');
  var categoriesError = document.getElementById('categoriesError');

  if (!categoriesGrid) return;

  // Fetch all categories from API
  fetch(window.BASE_URL + '/api/get_products.php')
    .then(function (res) { return res.json(); })
    .then(function (response) {
      var data = response.data || [];
      if (!data.length) {
        if (categoriesError) categoriesError.style.display = 'block';
        return;
      }
      renderCategoryCards(data);
    })
    .catch(function () {
      if (categoriesError) categoriesError.style.display = 'block';
    });

  function renderCategoryCards(data) {
    categoriesGrid.innerHTML = '';
    data.forEach(function (cat) {
      var card = document.createElement('a');
      card.className = 'category-card reveal';
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

      // Trigger reveal animation
      setTimeout(function () { card.classList.add('revealed'); }, 50);
    });
  }

});
