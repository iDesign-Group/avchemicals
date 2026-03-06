<?php
include 'includes/header.php';

$preselected_product = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : '';
$products = json_decode(file_get_contents(__DIR__ . '/assets/data/products.json'), true);
?>

  <!-- ====== CONTACT PAGE ====== -->
  <section class="contact-page" aria-labelledby="contact-heading">
    <div class="container">
      <div class="section-heading reveal">
        <h1 id="contact-heading" class="text-gold">Get In Touch</h1>
        <p>Contact A.V. Chemical for product enquiries, bulk pricing, and sourcing requirements. We respond within 24 hours.</p>
      </div>

      <div class="contact-grid">
        <!-- Left: Info Panel -->
        <div class="contact-info-panel reveal">
          <h2>Contact Information</h2>

          <div class="info-item">
            <span class="info-icon">📍</span>
            <div>
              <h4>Address</h4>
              <p>901, 9th Floor, Sureshwari Techno IT Park,<br>
              Link Road, Borivali West,<br>
              Mumbai – 400092, Maharashtra, India</p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon">📞</span>
            <div>
              <h4>Phone</h4>
              <p><a href="tel:+91XXXXXXXXXX" style="color:inherit;">+91-XXXXXXXXXX</a></p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon">✉️</span>
            <div>
              <h4>Email</h4>
              <p><a href="mailto:info@avchemicals.com" style="color:inherit;">info@avchemicals.com</a></p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon">🕐</span>
            <div>
              <h4>Business Hours</h4>
              <p>Monday – Saturday<br>9:00 AM – 7:00 PM IST</p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon">👤</span>
            <div>
              <h4>Contact Person</h4>
              <p>Virang Sanghvi (Partner)</p>
            </div>
          </div>

          <!-- SEO content -->
          <div style="margin-top:24px; padding:20px; background:var(--gold-pale); border-radius:10px; border:1px solid var(--border-light);">
            <h3 style="font-size:0.95rem; color:var(--green-dark); margin-bottom:10px;">What We Supply</h3>
            <p style="font-size:0.88rem; color:var(--text-muted); margin:0;">Amino acids, sweeteners, vitamins &amp; minerals, pharmaceutical excipients, nutraceutical actives, organic solvents, food ingredients, feed additives, dairy proteins, and natural polymers — across India.</p>
          </div>

          <!-- Map -->
          <div class="map-container" style="margin-top:24px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.6!2d72.8567!3d19.2307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDEzJzUwLjUiTiA3MsKwNTEnMjQuMSJF!5e0!3m2!1sen!2sin!4v1" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="A.V. Chemical Borivali West Mumbai Office"></iframe>
          </div>
        </div>

        <!-- Right: Contact Form -->
        <div class="contact-form-panel reveal reveal-delay-2">
          <h3>Send Us a Message</h3>
          <div id="formMessage"></div>
          <form id="contactForm" novalidate aria-label="Contact Form">
            <div class="form-row">
              <div class="form-group">
                <label for="name">Your Name *</label>
                <input type="text" id="name" name="name" required placeholder="Full Name" autocomplete="name">
              </div>
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" placeholder="Company Name" autocomplete="organization">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required placeholder="your@email.com" autocomplete="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required placeholder="+91 XXXXXXXXXX" autocomplete="tel">
              </div>
            </div>
            <div class="form-group">
              <label for="product_interest">Product Interest</label>
              <select id="product_interest" name="product_interest">
                <option value="">Select a category...</option>
                <?php if ($products): ?>
                  <?php foreach ($products as $cat): ?>
                  <option value="<?php echo htmlspecialchars($cat['name']); ?>" <?php echo ($preselected_product && stripos($cat['name'], $preselected_product) !== false) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($cat['icon'] . ' ' . $cat['name']); ?>
                  </option>
                  <?php endforeach; ?>
                <?php endif; ?>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message">Your Message *</label>
              <textarea id="message" name="message" required placeholder="Tell us about your requirements — product name, quantity, grade, delivery location..."><?php echo $preselected_product ? 'I am interested in enquiring about ' . $preselected_product . '. ' : ''; ?></textarea>
            </div>
            <button type="submit" id="submitBtn" class="btn btn-gold" style="width:100%; text-align:center;">
              <span class="btn-text">Send Message</span>
              <span class="loading-spinner"></span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
