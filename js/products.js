(function () {
  const grid = document.getElementById('products-ajax-grid');
  if (!grid) return;

  // Show skeletons while loading
  function showSkeletons(count) {
    grid.innerHTML = '';
    for (let i = 0; i < count; i++) {
      grid.insertAdjacentHTML('beforeend', `
        <div class="product-card skeleton-card">
          <div class="skeleton skeleton-header"></div>
          <div class="product-card-body">
            <div class="skeleton skeleton-title"></div>
            <div class="skeleton skeleton-line"></div>
            <div class="skeleton skeleton-line short"></div>
            <div class="skeleton skeleton-tags"></div>
            <div class="skeleton skeleton-btn"></div>
          </div>
        </div>
      `);
    }
  }

  function buildCard(p) {
    const tags = p.tags.map(t => `<span class="product-tag">${t}</span>`).join('');
    return `
      <div class="product-card card-animate">
        <div class="product-card-header" style="background:${p.bg}">
          <div class="product-icon">${p.icon}</div>
        </div>
        <div class="product-card-body">
          <h3>${p.title}</h3>
          <p>${p.desc}</p>
          ${tags}
          <br>
          <a href="businesses.php#${p.link}" class="btn btn-green" style="margin-top:16px;padding:10px 20px;font-size:0.85rem">View Products &#8594;</a>
        </div>
      </div>`;
  }

  function loadProducts() {
    showSkeletons(6);
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'ajax/products.php', true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState !== 4) return;
      if (xhr.status === 200) {
        try {
          const data = JSON.parse(xhr.responseText);
          if (data.success && data.products.length) {
            grid.innerHTML = '';
            data.products.forEach((p, i) => {
              grid.insertAdjacentHTML('beforeend', buildCard(p));
              const card = grid.lastElementChild;
              // Staggered entry: delay each card by 80ms
              setTimeout(() => card.classList.add('card-visible'), i * 80);
            });
          } else {
            grid.innerHTML = '<p style="color:var(--text-muted);text-align:center;grid-column:1/-1">No products found.</p>';
          }
        } catch (e) {
          grid.innerHTML = '<p style="color:var(--text-muted);text-align:center;grid-column:1/-1">Failed to load products.</p>';
        }
      } else {
        grid.innerHTML = '<p style="color:var(--text-muted);text-align:center;grid-column:1/-1">Failed to load products.</p>';
      }
    };
    xhr.send();
  }

  // Trigger load when section scrolls into view (IntersectionObserver)
  const section = document.querySelector('.products-section');
  if (!section) { loadProducts(); return; }

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        loadProducts();
        obs.disconnect();
      }
    });
  }, { threshold: 0.1 });
  observer.observe(section);
})();
