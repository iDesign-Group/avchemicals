<?php
$page_title = "Contact Us";
$product  = isset($_GET['product'])  ? htmlspecialchars($_GET['product'])  : '';
$industry = isset($_GET['industry']) ? htmlspecialchars($_GET['industry']) : '';
include 'includes/header.php';
?>
<section class="page-hero">
  <div class="container" style="position:relative;z-index:1">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>Contact Us</span></div>
    <h1>Get In Touch</h1>
    <p>Reach out for product enquiries, pricing, or technical support.</p>
  </div>
</section>

<section class="section-pad" style="background:var(--white)">
  <div class="container">
    <div class="contact-grid">

      <div>
        <span class="section-tag">Reach Us</span>
        <h2 style="font-size:1.8rem;margin-bottom:32px">We're Here to Help</h2>
        <div class="contact-info-block">
          <div class="contact-info-item">
            <div class="contact-info-icon">&#128205;</div>
            <div><h4>Our Office</h4><p>AV Chemicals<br>Borivali (West), Mumbai - 400 092<br>Maharashtra, India</p></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon">&#128222;</div>
            <div><h4>Phone</h4><a href="tel:+912228XXXXXX">+91 22 2800 XXXX</a><br><a href="tel:+919XXXXXXXXX">+91 9X XXXX XXXX</a></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon">&#128231;</div>
            <div><h4>Email</h4><a href="mailto:info@avchemicals.in">info@avchemicals.in</a><br><a href="mailto:sales@avchemicals.in">sales@avchemicals.in</a></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon">&#9200;&#65039;</div>
            <div><h4>Business Hours</h4><p>Monday – Saturday: 9:30 AM – 6:30 PM<br>Sunday: Closed</p></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon">&#128290;</div>
            <div><h4>GST Number</h4><p style="color:var(--green-mid);font-weight:600;font-size:1rem">27ABVFA7475M1ZF</p></div>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <h3>Send Us a Message</h3>
        <form id="contactForm" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label>Full Name *</label>
              <input type="text" name="name" placeholder="Your full name" required>
            </div>
            <div class="form-group">
              <label>Company Name</label>
              <input type="text" name="company" placeholder="Your company">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Email Address *</label>
              <input type="email" name="email" placeholder="you@company.com" required>
            </div>
            <div class="form-group">
              <label>Phone Number *</label>
              <input type="tel" name="phone" placeholder="+91 XXXXX XXXXX" required>
            </div>
          </div>
          <div class="form-group">
            <label>Area of Interest</label>
            <select name="interest">
              <option value="">Select a category...</option>
              <option value="Specialty Chemicals">Specialty Chemicals</option>
              <option value="Industrial Chemicals">Industrial Chemicals</option>
              <option value="Agro Chemicals">Agro Chemicals</option>
              <option value="Pharma Intermediates">Pharma Intermediates</option>
              <option value="Cleaning Compounds">Cleaning Compounds</option>
              <option value="Water Treatment">Water Treatment</option>
              <option value="General Enquiry">General Enquiry</option>
            </select>
          </div>
          <div class="form-group">
            <label>Product / Specific Requirement</label>
            <input type="text" name="product_enquiry" placeholder="E.g. Sodium Hypochlorite 12%, 500 litres/month" value="<?= $product ?: $industry ?>">
          </div>
          <div class="form-group">
            <label>Message *</label>
            <textarea name="message" placeholder="Tell us about your requirement, quantity needed, or any technical questions..." required></textarea>
          </div>

          <div class="captcha-box">
            <div class="captcha-check">
              <span style="font-size:0.9rem;color:var(--text-main)">Verify: <strong id="captchaQuestion"></strong></span>
              <input type="number" id="captchaAnswer" placeholder="Answer" style="width:80px;padding:8px 12px;border:1px solid #ddd;border-radius:6px;font-size:0.9rem">
            </div>
            <div class="captcha-logo"><strong style="color:var(--green-mid)">&#128274; Spam</strong><br>Protection</div>
          </div>

          <button type="submit" class="btn btn-green" style="width:100%;justify-content:center;padding:16px">
            Send Message &#8594;
          </button>
          <div id="form-msg"></div>
        </form>
      </div>

    </div>
  </div>
</section>

<section class="map-section section-pad-sm">
  <div class="container">
    <div class="map-wrap">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.258164764775!2d72.85455931490272!3d19.228090987014315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b1057fb46c9d%3A0x98d3e94da7fa5c0e!2sBorivali+West%2C+Mumbai%2C+Maharashtra+400092!5e0!3m2!1sen!2sin!4v1"
        width="100%" height="420" style="border:0;display:block"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<script src="js/contact.js"></script>
<?php include 'includes/footer.php'; ?>
