/* ============================================
   AV CHEMICALS — Main JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

  // ---- Preloader ----
  window.addEventListener('load', function () {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
      setTimeout(function () {
        preloader.classList.add('loaded');
      }, 600);
    }
  });

  // ---- Navbar Scroll Effect ----
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
    // Trigger on load in case page is already scrolled
    if (window.scrollY > 80) {
      navbar.classList.add('scrolled');
    }
  }

  // ---- Mobile Hamburger Menu ----
  const hamburger = document.querySelector('.hamburger');
  const navMenu = document.querySelector('.nav-menu');
  const navOverlay = document.querySelector('.nav-overlay');
  const navLinks = document.querySelectorAll('.nav-link');

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', function () {
      hamburger.classList.toggle('active');
      navMenu.classList.toggle('active');
      if (navOverlay) navOverlay.classList.toggle('active');
      document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    });

    // Close menu when clicking a nav link
    navLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        if (navOverlay) navOverlay.classList.remove('active');
        document.body.style.overflow = '';
      });
    });

    // Close menu when clicking overlay
    if (navOverlay) {
      navOverlay.addEventListener('click', function () {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        navOverlay.classList.remove('active');
        document.body.style.overflow = '';
      });
    }
  }

  // ---- Scroll Reveal (IntersectionObserver) ----
  const revealElements = document.querySelectorAll('.reveal');
  if (revealElements.length > 0 && 'IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(function (el) {
      revealObserver.observe(el);
    });
  } else {
    // Fallback: show all
    revealElements.forEach(function (el) {
      el.classList.add('revealed');
    });
  }

  // ---- Flip Card Click Toggle (for mobile) ----
  const flipCards = document.querySelectorAll('.flip-card');
  flipCards.forEach(function (card) {
    card.addEventListener('click', function () {
      // On mobile, toggle flipped class
      if (window.innerWidth <= 768) {
        // Remove flipped from all other cards in same group
        const parent = card.closest('.flip-cards-grid, .why-grid, .mvv-grid');
        if (parent) {
          parent.querySelectorAll('.flip-card.flipped').forEach(function (other) {
            if (other !== card) other.classList.remove('flipped');
          });
        }
        card.classList.toggle('flipped');
      }
    });
  });

  // ---- Smooth Scroll for Anchor Links ----
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        const navHeight = navbar ? navbar.offsetHeight : 0;
        const targetPos = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
        window.scrollTo({
          top: targetPos,
          behavior: 'smooth'
        });
      }
    });
  });

  // ---- Back to Top Button ----
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    });

    backToTop.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // ---- Testimonials Carousel ----
  const carouselTrack = document.querySelector('.carousel-track');
  const carouselDots = document.querySelectorAll('.carousel-dot');
  let currentSlide = 0;
  let totalSlides = 0;
  let carouselInterval;

  if (carouselTrack) {
    totalSlides = carouselTrack.children.length;

    function goToSlide(index) {
      if (index < 0) index = totalSlides - 1;
      if (index >= totalSlides) index = 0;
      currentSlide = index;
      carouselTrack.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
      carouselDots.forEach(function (dot, i) {
        dot.classList.toggle('active', i === currentSlide);
      });
    }

    carouselDots.forEach(function (dot, i) {
      dot.addEventListener('click', function () {
        goToSlide(i);
        resetAutoSlide();
      });
    });

    function autoSlide() {
      carouselInterval = setInterval(function () {
        goToSlide(currentSlide + 1);
      }, 5000);
    }

    function resetAutoSlide() {
      clearInterval(carouselInterval);
      autoSlide();
    }

    goToSlide(0);
    autoSlide();
  }

  // ---- Load Testimonials from JSON ----
  function loadTestimonials() {
    const wrapper = document.querySelector('.carousel-wrapper');
    if (!wrapper) return;

    fetch(window.BASE_URL + '/assets/data/testimonials.json')
      .then(function (res) { return res.json(); })
      .then(function (data) {
        const track = wrapper.querySelector('.carousel-track');
        const dotsContainer = wrapper.querySelector('.carousel-dots');
        if (!track || !dotsContainer) return;

        track.innerHTML = '';
        dotsContainer.innerHTML = '';

        data.forEach(function (t, i) {
          // Card
          var card = document.createElement('div');
          card.className = 'testimonial-card';
          card.innerHTML =
            '<p class="quote">"' + t.quote + '"</p>' +
            '<p class="author">' + t.author + '</p>' +
            '<p class="company">' + t.designation + ', ' + t.company + '</p>';
          track.appendChild(card);

          // Dot
          var dot = document.createElement('button');
          dot.className = 'carousel-dot' + (i === 0 ? ' active' : '');
          dot.setAttribute('aria-label', 'Testimonial ' + (i + 1));
          dotsContainer.appendChild(dot);
        });

        // Re-init carousel
        totalSlides = data.length;
        currentSlide = 0;
        var newDots = dotsContainer.querySelectorAll('.carousel-dot');
        newDots.forEach(function (dot, i) {
          dot.addEventListener('click', function () {
            goToSlide(i);
            resetAutoSlide();
          });
        });
        // Update the reference for goToSlide
        carouselDots.length = 0; // clear
        newDots.forEach(function(d) {
          // We need to rebind; use direct reference instead
        });

        function goToSlide(index) {
          if (index < 0) index = totalSlides - 1;
          if (index >= totalSlides) index = 0;
          currentSlide = index;
          track.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
          newDots.forEach(function (dot, i) {
            dot.classList.toggle('active', i === currentSlide);
          });
        }

        function autoSlide() {
          clearInterval(carouselInterval);
          carouselInterval = setInterval(function () {
            goToSlide(currentSlide + 1);
          }, 5000);
        }

        function resetAutoSlide() {
          clearInterval(carouselInterval);
          autoSlide();
        }

        goToSlide(0);
        autoSlide();
      })
      .catch(function (err) {
        console.log('Testimonials load error:', err);
      });
  }

  // Only load testimonials on homepage
  if (document.querySelector('.testimonials')) {
    loadTestimonials();
  }

  // ---- Load Industries via AJAX (Home page hex grid) ----
  function loadIndustries() {
    const hexGrid = document.getElementById('industriesGrid');
    if (!hexGrid) return;

    fetch(window.BASE_URL + '/api/get_industries.php')
      .then(function (res) { return res.json(); })
      .then(function (response) {
        var data = response.data || response;
        hexGrid.innerHTML = '';
        data.forEach(function (ind) {
          var tile = document.createElement('a');
          tile.href = window.BASE_URL + '/industries.php#' + ind.id;
          tile.className = 'hex-tile';
          tile.innerHTML =
            '<span class="hex-icon">' + ind.icon + '</span>' +
            '<span class="hex-label">' + ind.name + '</span>';
          hexGrid.appendChild(tile);
        });
      })
      .catch(function (err) {
        console.log('Industries load error:', err);
      });
  }

  if (document.getElementById('industriesGrid')) {
    loadIndustries();
  }

});
