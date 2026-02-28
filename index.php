<?php
$page_title = "Home";
include 'includes/header.php';
?>
<section class="hero">
  <div class="container">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-badge"><span>&#127981;</span> Trusted Chemical Solutions Since 2005</div>
        <h1>Advanced Chemistry.<br><span>Exceptional</span> Performance.</h1>
        <p class="hero-desc">AV Chemicals delivers high-purity specialty, industrial, and agro chemicals crafted for precision industries across India. Based in Mumbai, serving the nation.</p>
        <div class="hero-actions">
          <a href="businesses.php" class="btn btn-primary">Explore Products &#8594;</a>
          <a href="contact.php" class="btn btn-outline">Request a Quote</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-logo-wrap">
          <img src="images/logo.png" alt="AV Chemicals">
        </div>
      </div>
    </div>
  </div>
</section>

<div class="ticker">
  <div class="ticker-inner">
    <span class="ticker-item">Specialty Chemicals</span>
    <span class="ticker-item">Industrial Chemicals</span>
    <span class="ticker-item">Agro Chemicals</span>
    <span class="ticker-item">Pharma Intermediates</span>
    <span class="ticker-item">Water Treatment</span>
    <span class="ticker-item">Cleaning Compounds</span>
    <span class="ticker-item">Surface Treatment</span>
    <span class="ticker-item">Paint Additives</span>
    <span class="ticker-item">Food Grade Chemicals</span>
    <span class="ticker-item">Textile Chemicals</span>
    <span class="ticker-item">Specialty Chemicals</span>
    <span class="ticker-item">Industrial Chemicals</span>
    <span class="ticker-item">Agro Chemicals</span>
    <span class="ticker-item">Pharma Intermediates</span>
    <span class="ticker-item">Water Treatment</span>
    <span class="ticker-item">Cleaning Compounds</span>
    <span class="ticker-item">Surface Treatment</span>
    <span class="ticker-item">Paint Additives</span>
    <span class="ticker-item">Food Grade Chemicals</span>
    <span class="ticker-item">Textile Chemicals</span>
  </div>
</div>

<section class="about-strip section-pad">
  <div class="container">
    <div class="about-grid">
      <div class="about-img-wrap">
        <img src="images/about-facility.jpg" alt="AV Chemicals Facility">
        <div class="about-badge-float"><div class="num">18+</div><div class="lbl">Years of Trust</div></div>
      </div>
      <div class="about-content">
        <span class="section-tag">Who We Are</span>
        <h2 class="section-title">A Legacy of Chemical Excellence in Mumbai</h2>
        <p style="color:var(--text-muted);margin-bottom:16px">AV Chemicals, headquartered in Borivali, Mumbai, is a premier supplier of specialty and industrial chemicals to a diverse range of industries across India. We are committed to quality, safety, and sustainable practices.</p>
        <ul class="feature-list">
          <li><div class="feature-icon">&#127942;</div><div class="feature-text"><strong>ISO Certified Operations</strong><span>Rigorous quality management across all product lines</span></div></li>
          <li><div class="feature-icon">&#127807;</div><div class="feature-text"><strong>Sustainability First</strong><span>Eco-conscious formulations and responsible sourcing</span></div></li>
          <li><div class="feature-icon">&#128666;</div><div class="feature-text"><strong>Pan-India Distribution</strong><span>Reliable and timely delivery network across Maharashtra and beyond</span></div></li>
          <li><div class="feature-icon">&#128300;</div><div class="feature-text"><strong>Technical Expertise</strong><span>Dedicated R&amp;D and application support team</span></div></li>
        </ul>
        <a href="about.php" class="btn btn-green">Learn More About Us &#8594;</a>
      </div>
    </div>
  </div>
</section>

<section class="products-section section-pad">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Our Businesses</span>
      <h2 class="section-title">Chemical Solutions for Every Need</h2>
      <p class="section-sub">From specialty formulations to bulk industrial chemicals, our diverse portfolio is engineered for performance.</p>
    </div>
    <?php
    $products = [
      ['icon'=>'&#9879;&#65039;','title'=>'Specialty Chemicals','desc'=>'High-performance formulations for advanced manufacturing, coatings, and precision applications.','tags'=>['Surface Treatment','Adhesives','Additives'],'link'=>'specialty','bg'=>'linear-gradient(135deg,var(--green-dark),var(--green-mid))'],
      ['icon'=>'&#127981;','title'=>'Industrial Chemicals','desc'=>'Reliable bulk chemicals for manufacturing, processing, and industrial operations at scale.','tags'=>['Acids','Alkalis','Solvents'],'link'=>'industrial','bg'=>'linear-gradient(135deg,#4a2c0a,#8B6914)'],
      ['icon'=>'&#127807;','title'=>'Agro Chemicals','desc'=>'Effective crop protection and nutrition solutions helping farmers maximize yield sustainably.','tags'=>['Pesticides','Fertilizers','Micronutrients'],'link'=>'agro','bg'=>'linear-gradient(135deg,#1a3a1a,#2d6a1a)'],
      ['icon'=>'&#128138;','title'=>'Pharma Intermediates','desc'=>'GMP-compliant chemical intermediates for pharmaceutical manufacturers and API producers.','tags'=>['API Intermediates','Excipients'],'link'=>'pharma','bg'=>'linear-gradient(135deg,#0d2b4a,#1565C0)'],
      ['icon'=>'&#129529;','title'=>'Cleaning Compounds','desc'=>'Industrial and institutional cleaning formulations for hygiene-critical environments.','tags'=>['Degreasers','Sanitizers','Descalers'],'link'=>'cleaning','bg'=>'linear-gradient(135deg,#2a1a4a,#5e35b1)'],
      ['icon'=>'&#128167;','title'=>'Water Treatment','desc'=>'Effective coagulants, scale inhibitors, and biocides for industrial and municipal water systems.','tags'=>['Coagulants','Scale Inhibitors'],'link'=>'water','bg'=>'linear-gradient(135deg,#0a2a3a,#00695C)'],
    ];
    ?>
    <div class="products-grid">
      <?php foreach($products as $p): ?>
      <div class="product-card">
        <div class="product-card-header" style="background:<?= $p['bg'] ?>"><div class="product-icon"><?= $p['icon'] ?></div></div>
        <div class="product-card-body">
          <h3><?= $p['title'] ?></h3>
          <p><?= $p['desc'] ?></p>
          <?php foreach($p['tags'] as $t): ?><span class="product-tag"><?= $t ?></span><?php endforeach; ?>
          <br><a href="businesses.php#<?= $p['link'] ?>" class="btn btn-green" style="margin-top:16px;padding:10px 20px;font-size:0.85rem">View Products &#8594;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="industries-section section-pad">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Industries We Serve</span>
      <h2 class="section-title text-white">Powering Diverse Industries</h2>
      <p class="section-sub">Our chemicals are trusted across sectors that demand the highest standards of quality and reliability.</p>
    </div>
    <div class="industries-grid">
      <div class="industry-card"><div class="industry-icon">&#129525;</div><h4>Textile</h4><p>Dyeing &amp; finishing</p></div>
      <div class="industry-card"><div class="industry-icon">&#128138;</div><h4>Pharmaceuticals</h4><p>API &amp; formulations</p></div>
      <div class="industry-card"><div class="industry-icon">&#127869;&#65039;</div><h4>Food &amp; Beverage</h4><p>Food-grade chemicals</p></div>
      <div class="industry-card"><div class="industry-icon">&#128664;</div><h4>Automotive</h4><p>Surface treatment</p></div>
      <div class="industry-card"><div class="industry-icon">&#127959;&#65039;</div><h4>Construction</h4><p>Admixtures &amp; coatings</p></div>
      <div class="industry-card"><div class="industry-icon">&#127912;</div><h4>Paint &amp; Coatings</h4><p>Additives &amp; pigments</p></div>
      <div class="industry-card"><div class="industry-icon">&#127806;</div><h4>Agriculture</h4><p>Crop protection</p></div>
      <div class="industry-card"><div class="industry-icon">&#128297;</div><h4>Metal &amp; Steel</h4><p>Pickling &amp; plating</p></div>
      <div class="industry-card"><div class="industry-icon">&#129529;</div><h4>Personal Care</h4><p>Cosmetic ingredients</p></div>
      <div class="industry-card"><div class="industry-icon">&#128167;</div><h4>Water Treatment</h4><p>Municipal &amp; industrial</p></div>
    </div>
    <div style="text-align:center;margin-top:48px"><a href="industries.php" class="btn btn-primary">View All Industries &#8594;</a></div>
  </div>
</section>

<section class="section-pad" style="background:var(--off-white)">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Why AV Chemicals</span>
      <h2 class="section-title">Our Competitive Advantage</h2>
      <p class="section-sub">We don't just supply chemicals — we deliver measurable value to our partners.</p>
    </div>
    <div class="why-grid">
      <div class="why-card"><div class="why-icon">&#128300;</div><h4>R&amp;D-Backed Formulations</h4><p>Our in-house technical team continuously innovates to deliver superior product performance.</p></div>
      <div class="why-card"><div class="why-icon">&#9989;</div><h4>Strict Quality Control</h4><p>Every batch undergoes rigorous testing per international standards before dispatch.</p></div>
      <div class="why-card"><div class="why-icon">&#127807;</div><h4>Green Chemistry</h4><p>Committed to eco-friendly formulations with reduced environmental footprint.</p></div>
      <div class="why-card"><div class="why-icon">&#129309;</div><h4>Dedicated Support</h4><p>Technical application support and after-sales service for every client.</p></div>
      <div class="why-card"><div class="why-icon">&#9201;&#65039;</div><h4>On-Time Delivery</h4><p>Robust logistics network ensuring timely deliveries across Mumbai and Pan-India.</p></div>
      <div class="why-card"><div class="why-icon">&#128176;</div><h4>Competitive Pricing</h4><p>Best-in-class pricing without compromising on quality or consistency.</p></div>
    </div>
  </div>
</section>

<div class="gst-strip">
  <div class="container">
    <div class="gst-item"><span>&#127970;</span><span>Registered Company: <strong>AV Chemicals</strong></span></div>
    <div class="gst-item"><span>&#128290;</span><span>GST Number: <strong>27ABVFA7475M1ZF</strong></span></div>
    <div class="gst-item"><span>&#128205;</span><span>Location: <strong>Borivali (West), Mumbai - 400 092, Maharashtra</strong></span></div>
    <div class="gst-item"><span>&#127470;&#127475;</span><span>State: <strong>Maharashtra (27)</strong></span></div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
