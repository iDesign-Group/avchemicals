<?php
include 'includes/header.php';

// Load industries data
$industries = json_decode(file_get_contents(__DIR__ . '/assets/data/industries.json'), true);
?>

  <!-- ====== INDUSTRIES HERO ====== -->
  <section class="about-hero">
    <div class="hex-pattern"></div>
    <div class="container" style="position:relative; z-index:2;">
      <h1 class="text-gold reveal">Industries We Serve</h1>
      <p class="reveal reveal-delay-1" style="max-width:600px; margin:16px auto 0;">
        We supply premium raw materials to 6 major industry verticals across India, ensuring quality compliance and reliable delivery.
      </p>
    </div>
  </section>

  <!-- ====== INDUSTRY SECTIONS ====== -->
  <?php if ($industries): ?>
    <?php foreach ($industries as $index => $industry): ?>
    <section class="industry-section" id="<?php echo htmlspecialchars($industry['id']); ?>">
      <div class="container">
        <div class="industry-row <?php echo ($index % 2 !== 0) ? 'reverse' : ''; ?>">
          <div class="industry-icon-large reveal">
            <?php echo $industry['icon']; ?>
          </div>
          <div class="industry-content reveal reveal-delay-1">
            <h2><?php echo htmlspecialchars($industry['name']); ?></h2>
            <p><?php echo htmlspecialchars($industry['description']); ?></p>
            <div class="industry-products">
              <?php foreach ($industry['relevant_products'] as $product): ?>
              <span><?php echo htmlspecialchars($product); ?></span>
              <?php endforeach; ?>
            </div>
            <a href="<?php echo $base_url; ?>/contact.php" class="btn btn-gold">Enquire Now</a>
          </div>
        </div>
      </div>
    </section>
    <?php if ($index < count($industries) - 1): ?>
    <div class="industry-divider"></div>
    <?php endif; ?>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- ====== CTA ====== -->
  <section class="cta-strip">
    <div class="container">
      <h2>Need Industry-Specific Solutions?</h2>
      <p style="color: var(--white-text); margin-bottom: 24px;">Our experts understand your industry requirements. Let us help you find the right raw materials.</p>
      <a href="<?php echo $base_url; ?>/contact.php" class="btn btn-dark">Talk to an Expert</a>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
