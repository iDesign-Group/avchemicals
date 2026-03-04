/* ============================================
   AV CHEMICALS — AJAX Contact Form
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

  var contactForm = document.getElementById('contactForm');
  if (!contactForm) return;

  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();

    var btn = document.getElementById('submitBtn');
    var msg = document.getElementById('formMessage');

    // Client-side validation
    var name = contactForm.querySelector('[name="name"]');
    var email = contactForm.querySelector('[name="email"]');
    var phone = contactForm.querySelector('[name="phone"]');
    var message = contactForm.querySelector('[name="message"]');

    // Reset message
    msg.style.display = 'none';
    msg.className = '';
    msg.textContent = '';

    // Validate name
    if (!name.value.trim()) {
      showMessage(msg, 'error', 'Please enter your name.');
      name.focus();
      return;
    }

    // Validate email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
      showMessage(msg, 'error', 'Please enter a valid email address.');
      email.focus();
      return;
    }

    // Validate phone (10 digits)
    var phoneClean = phone.value.replace(/[\s\-\+\(\)]/g, '');
    if (phoneClean.length < 10) {
      showMessage(msg, 'error', 'Please enter a valid 10-digit phone number.');
      phone.focus();
      return;
    }

    // Validate message (min 20 chars)
    if (message.value.trim().length < 20) {
      showMessage(msg, 'error', 'Message must be at least 20 characters long.');
      message.focus();
      return;
    }

    // Disable button and show loading
    btn.classList.add('loading');
    btn.disabled = true;

    fetch(window.BASE_URL + '/api/submit_contact.php', {
      method: 'POST',
      body: new FormData(contactForm),
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
    .then(function (res) { return res.json(); })
    .then(function (data) {
      if (data.status === 'success') {
        showMessage(msg, 'success', data.message);
        contactForm.reset();
      } else {
        showMessage(msg, 'error', data.message);
      }
    })
    .catch(function () {
      showMessage(msg, 'error', 'Something went wrong. Please try again.');
    })
    .finally(function () {
      btn.classList.remove('loading');
      btn.disabled = false;
    });
  });

  function showMessage(el, type, text) {
    el.className = type === 'success' ? 'msg-success' : 'msg-error';
    el.textContent = text;
    el.style.display = 'block';

    // Auto-hide success after 5s
    if (type === 'success') {
      setTimeout(function () {
        el.style.display = 'none';
      }, 5000);
    }
  }

});
