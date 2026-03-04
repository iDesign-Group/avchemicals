/* ============================================
   AV CHEMICALS — Animated Number Counter
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

  var counters = document.querySelectorAll('[data-count]');
  if (counters.length === 0) return;

  var animated = false;

  function animateCounters() {
    if (animated) return;
    animated = true;

    counters.forEach(function (counter) {
      var target = parseInt(counter.getAttribute('data-count'), 10);
      var suffix = counter.getAttribute('data-suffix') || '';
      var duration = 2000; // ms
      var startTime = null;

      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = Math.min((timestamp - startTime) / duration, 1);

        // Ease out quad
        var easedProgress = 1 - (1 - progress) * (1 - progress);
        var currentVal = Math.floor(easedProgress * target);

        counter.textContent = currentVal + suffix;

        if (progress < 1) {
          requestAnimationFrame(step);
        } else {
          counter.textContent = target + suffix;
        }
      }

      requestAnimationFrame(step);
    });
  }

  // Use IntersectionObserver to trigger animation
  if ('IntersectionObserver' in window) {
    var statsSection = document.querySelector('.stats-strip');
    if (statsSection) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounters();
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.3
      });
      observer.observe(statsSection);
    }
  } else {
    // Fallback
    animateCounters();
  }

});
