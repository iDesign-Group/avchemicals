<?php
$page_title = "About Us";
include 'includes/header.php';
?>
<section class="page-hero">
  <div class="container" style="position:relative;z-index:1">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>About Us</span></div>
    <h1>About AV Chemicals</h1>
    <p>Two decades of trust, expertise, and chemical excellence from the heart of Mumbai.</p>
  </div>
</section>

<section class="section-pad" style="background:var(--white)">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:32px">
      <?php
      $mvv = [
        ['icon'=>'&#127919;','title'=>'Our Mission','color'=>'var(--green-mid)','text'=>'To provide high-quality, innovative, and sustainable chemical solutions that empower industries to achieve superior performance and efficiency.'],
        ['icon'=>'&#128302;','title'=>'Our Vision','color'=>'var(--gold)','text'=>"To be India's most trusted specialty chemicals partner — known for quality, reliability, and responsible chemistry."],
        ['icon'=>'&#128142;','title'=>'Our Values','color'=>'#1565C0','text'=>'Integrity in every transaction. Innovation in every formula. Responsibility in every decision. Partnership in every relationship.'],
      ];
      foreach($mvv as $item): ?>
      <div style="padding:40px 32px;background:var(--off-white);border-radius:var(--radius-lg);text-align:center;border-top:4px solid <?= $item['color'] ?>">
        <div style="font-size:2.5rem;margin-bottom:20px"><?= $item['icon'] ?></div>
        <h3 style="margin-bottom:14px"><?= $item['title'] ?></h3>
        <p style="color:var(--text-muted);font-size:0.9rem;line-height:1.75"><?= $item['text'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad" style="background:var(--light-gray)">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:start">
      <div>
        <span class="section-tag">Our Story</span>
        <h2 class="section-title">Built on Chemistry, Driven by Trust</h2>
        <p style="color:var(--text-muted);margin-bottom:20px;line-height:1.8">AV Chemicals was founded with a clear vision — to bridge the gap between quality chemical manufacturing and industry demand in India. Starting from Borivali, Mumbai, we have grown into a recognized name across multiple industrial sectors.</p>
        <p style="color:var(--text-muted);margin-bottom:20px;line-height:1.8">Our journey has been shaped by a relentless focus on product quality, customer satisfaction, and sustainable practices. Today, we serve clients across Maharashtra and Pan-India, offering a portfolio of over 500 chemical products.</p>
        <p style="color:var(--text-muted);line-height:1.8">We are proud to be a GST-registered enterprise (GSTIN: <strong style="color:var(--green-mid)">27ABVFA7475M1ZF</strong>) committed to full regulatory compliance and transparent business practices.</p>
      </div>
      <div class="timeline">
        <?php
        $timeline = [
          ['year'=>'2005','title'=>'Foundation','desc'=>'AV Chemicals established in Borivali, Mumbai with focus on industrial chemicals trading.'],
          ['year'=>'2009','title'=>'Product Expansion','desc'=>'Expanded portfolio to include specialty chemicals and agro chemicals.'],
          ['year'=>'2013','title'=>'ISO Certification','desc'=>'Achieved ISO 9001 certification, marking our commitment to quality management.'],
          ['year'=>'2017','title'=>'Pan-India Reach','desc'=>'Extended distribution network across Maharashtra and neighboring states.'],
          ['year'=>'2020','title'=>'Green Initiative','desc'=>'Launched sustainability program — transitioning key product lines to eco-friendly formulations.'],
          ['year'=>'2024','title'=>'Digital Transformation','desc'=>'Modernized operations with digital order management and customer support systems.'],
        ];
        foreach($timeline as $t): ?>
        <div class="timeline-item">
          <div class="timeline-year"><?= $t['year'] ?></div>
          <h4><?= $t['title'] ?></h4>
          <p><?= $t['desc'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="section-pad" style="background:var(--white)">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">What Drives Us</span>
      <h2 class="section-title">Our Core Values</h2>
    </div>
    <div class="values-grid">
      <?php
      $values = [
        ['icon'=>'&#9989;','title'=>'Quality First','desc'=>'Every product is tested to meet exact specifications before it reaches you.'],
        ['icon'=>'&#129309;','title'=>'Customer Partnership','desc'=>'We treat every client as a long-term partner, not just a transaction.'],
        ['icon'=>'&#128300;','title'=>'Innovation','desc'=>'Continuous R&D to develop better, safer, and more effective formulations.'],
        ['icon'=>'&#127807;','title'=>'Sustainability','desc'=>'Environmental responsibility embedded at every level of our business.'],
        ['icon'=>'&#9878;&#65039;','title'=>'Integrity','desc'=>'Transparent pricing, honest communication, and ethical practices always.'],
        ['icon'=>'&#128640;','title'=>'Excellence','desc'=>"We push the boundaries of what's possible in chemical performance."],
      ];
      foreach($values as $v): ?>
      <div class="value-card">
        <div class="value-icon"><?= $v['icon'] ?></div>
        <h4><?= $v['title'] ?></h4>
        <p><?= $v['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad-sm" style="background:var(--dark)">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:32px;text-align:center">
      <?php
      $stats=[
        ['num'=>'500+','label'=>'Products in Portfolio'],
        ['num'=>'200+','label'=>'Satisfied Clients'],
        ['num'=>'18+','label'=>'Years of Experience'],
        ['num'=>'10+','label'=>'Industries Served'],
      ];
      foreach($stats as $s): ?>
      <div>
        <div style="font-family:'Playfair Display',serif;font-size:3rem;font-weight:700;color:var(--gold)"><?= $s['num'] ?></div>
        <div style="color:rgba(255,255,255,0.6);font-size:0.85rem;margin-top:8px"><?= $s['label'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
