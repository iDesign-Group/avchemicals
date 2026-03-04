  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Brand -->
        <div class="footer-brand">
          <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="AV Chemical" class="footer-logo" onerror="this.style.display='none'">
          <p>Your One-Stop Source for Premium Chemical Raw Materials. Import, sourcing & distribution of quality raw materials across India.</p>
          <div class="social-links">
            <a href="#" class="social-link" aria-label="LinkedIn">in</a>
            <a href="#" class="social-link" aria-label="Twitter">𝕏</a>
            <a href="#" class="social-link" aria-label="Facebook">f</a>
            <a href="#" class="social-link" aria-label="Instagram">📷</a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h4>Quick Links</h4>
          <ul class="footer-links">
            <li><a href="<?php echo $base_url; ?>/index.php">Home</a></li>
            <li><a href="<?php echo $base_url; ?>/about.php">About Us</a></li>
            <li><a href="<?php echo $base_url; ?>/products.php">Products</a></li>
            <li><a href="<?php echo $base_url; ?>/industries.php">Industries</a></li>
            <li><a href="<?php echo $base_url; ?>/contact.php">Contact</a></li>
          </ul>
        </div>

        <!-- Products -->
        <div>
          <h4>Top Products</h4>
          <ul class="footer-links">
            <li><a href="<?php echo $base_url; ?>/products.php?cat=amino-acids">Amino Acids</a></li>
            <li><a href="<?php echo $base_url; ?>/products.php?cat=sweeteners">Sweeteners</a></li>
            <li><a href="<?php echo $base_url; ?>/products.php?cat=vitamins-minerals">Vitamins & Minerals</a></li>
            <li><a href="<?php echo $base_url; ?>/products.php?cat=excipients">Excipients</a></li>
            <li><a href="<?php echo $base_url; ?>/products.php?cat=nutraceutical">Nutraceuticals</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h4>Contact</h4>
          <div class="footer-contact-item">
            <span class="fc-icon">📍</span>
            <span>901, 9th Floor, Sureshwari Techno IT Park, Link Road, Borivali West, Mumbai – 400092</span>
          </div>
          <div class="footer-contact-item">
            <span class="fc-icon">📞</span>
            <span>+91-XXXXXXXXXX</span>
          </div>
          <div class="footer-contact-item">
            <span class="fc-icon">✉️</span>
            <span>info@avchemicals.com</span>
          </div>
          <div class="footer-contact-item">
            <span class="fc-icon">🕐</span>
            <span>Mon–Sat, 9:00 AM – 7:00 PM</span>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> A.V. Chemical. All rights reserved. | Partnership Firm | Mumbai, India</p>
      </div>
    </div>
  </footer>

  <!-- Back to Top -->
  <button class="back-to-top" aria-label="Back to top">↑</button>

  <!-- Scripts -->
  <script src="<?php echo $base_url; ?>/assets/js/main.js"></script>
  <script src="<?php echo $base_url; ?>/assets/js/counter.js"></script>
  <?php if ($current_page === 'contact'): ?>
  <script src="<?php echo $base_url; ?>/assets/js/ajax-form.js"></script>
  <?php endif; ?>
  <?php if ($current_page === 'products'): ?>
  <script src="<?php echo $base_url; ?>/assets/js/product-filter.js"></script>
  <?php endif; ?>

</body>
</html>
