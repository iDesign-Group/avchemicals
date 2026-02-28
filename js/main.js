
document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  if(header) window.addEventListener('scroll', () => header.classList.toggle('scrolled', window.scrollY > 40));

  const hamburger = document.getElementById('hamburger');
  const mobileNav = document.getElementById('mobileNav');
  if(hamburger && mobileNav) hamburger.addEventListener('click', () => mobileNav.classList.toggle('open'));

  const currentPath = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-menu a, .mobile-nav a').forEach(a => {
    if(a.getAttribute('href') === currentPath) a.classList.add('active');
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if(e.isIntersecting){ e.target.style.opacity='1'; e.target.style.transform='translateY(0)'; } });
  }, { threshold: 0.1 });
  document.querySelectorAll('.product-card,.industry-card,.pillar-card,.why-card,.value-card').forEach(el => {
    el.style.opacity='0'; el.style.transform='translateY(24px)';
    el.style.transition='opacity 0.5s ease, transform 0.5s ease';
    observer.observe(el);
  });

  document.querySelectorAll('.stat-num[data-target]').forEach(el => {
    const target = parseInt(el.dataset.target);
    const suffix = el.dataset.suffix || '';
    let count = 0; const step = Math.ceil(target/60);
    const timer = setInterval(() => { count += step; if(count >= target){ count=target; clearInterval(timer); } el.textContent = count+suffix; }, 30);
  });

  const ticker = document.querySelector('.ticker-inner');
  if(ticker) ticker.innerHTML += ticker.innerHTML;
});
