<?php
$page_title = "Sustainability";
include 'includes/header.php';
?>
<section class="sustain-hero">
  <div class="container" style="position:relative;z-index:1;text-align:center">
    <div class="breadcrumb" style="justify-content:center"><a href="index.php">Home</a><span>/</span><span>Sustainability</span></div>
    <span class="section-tag">Our Commitment</span>
    <h1 style="color:var(--white);font-size:clamp(2.2rem,4vw,3.4rem);margin-bottom:20px">Chemistry for a<br><span style="color:var(--gold)">Better Tomorrow</span></h1>
    <p style="color:rgba(255,255,255,0.7);max-width:600px;margin:0 auto;font-size:1.05rem">At AV Chemicals, sustainability is not a policy — it is a core principle embedded in every product we make and every decision we take.</p>
  </div>
</section>

<section class="section-pad" style="background:var(--off-white)">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Our ESG Framework</span>
      <h2 class="section-title">Three Pillars of Sustainable Practice</h2>
      <p class="section-sub">We embed Environmental, Social, and Governance principles into our core operations.</p>
    </div>
    <div class="sustain-pillars">
      <div class="pillar-card">
        <div class="pillar-icon green"><span style="font-size:2rem">&#127807;</span></div>
        <h3>Environmental</h3>
        <p>We minimize our environmental impact through green chemistry principles, reduced hazardous waste, and responsible raw material sourcing. Our formulations are designed to be biodegradable wherever possible.</p>
      </div>
      <div class="pillar-card">
        <div class="pillar-icon gold"><span style="font-size:2rem">&#129309;</span></div>
        <h3>Social</h3>
        <p>We invest in our people, our communities, and our customers. Employee safety is paramount — we maintain stringent workplace safety protocols. We also engage with local communities through awareness programs.</p>
      </div>
      <div class="pillar-card">
        <div class="pillar-icon blue"><span style="font-size:2rem">&#9878;&#65039;</span></div>
        <h3>Governance</h3>
        <p>Transparency, ethical conduct, and regulatory compliance are the foundations of our governance. We comply with BIS, REACH, and RoHS regulations, and maintain complete traceability in our supply chain.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-pad" style="background:var(--white)">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:start">
      <div>
        <span class="section-tag">Green Chemistry</span>
        <h2 class="section-title">Reducing Impact at Every Step</h2>
        <p style="color:var(--text-muted);margin-bottom:24px">We apply the 12 principles of green chemistry to design products that are safer for humans, more efficient in use, and kinder to the environment — without sacrificing performance.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:32px">
          <div style="padding:20px;background:rgba(46,125,50,0.06);border-radius:var(--radius);border-left:3px solid var(--green-mid)">
            <div style="font-size:1.6rem;font-weight:700;color:var(--green-mid);font-family:'Playfair Display',serif">30%</div>
            <div style="font-size:0.82rem;color:var(--text-muted);margin-top:4px">Reduction in hazardous ingredients in reformulated products</div>
          </div>
          <div style="padding:20px;background:rgba(201,168,76,0.06);border-radius:var(--radius);border-left:3px solid var(--gold)">
            <div style="font-size:1.6rem;font-weight:700;color:var(--gold);font-family:'Playfair Display',serif">60%</div>
            <div style="font-size:0.82rem;color:var(--text-muted);margin-top:4px">Of new product launches based on green chemistry principles</div>
          </div>
          <div style="padding:20px;background:rgba(21,101,192,0.06);border-radius:var(--radius);border-left:3px solid #1565C0">
            <div style="font-size:1.6rem;font-weight:700;color:#1565C0;font-family:'Playfair Display',serif">Zero</div>
            <div style="font-size:0.82rem;color:var(--text-muted);margin-top:4px">Non-compliant effluent discharge incidents in past 5 years</div>
          </div>
          <div style="padding:20px;background:rgba(46,125,50,0.06);border-radius:var(--radius);border-left:3px solid var(--green-light)">
            <div style="font-size:1.6rem;font-weight:700;color:var(--green-light);font-family:'Playfair Display',serif">ISO</div>
            <div style="font-size:0.82rem;color:var(--text-muted);margin-top:4px">Quality &amp; environmental management certified operations</div>
          </div>
        </div>
      </div>
      <div style="background:var(--dark);border-radius:var(--radius-lg);padding:48px 40px;box-shadow:var(--shadow-lg)">
        <h3 style="color:var(--white);margin-bottom:28px">Sustainability Goals <span style="color:var(--gold)">2030</span></h3>
        <?php
        $goals = [
          ['num'=>'01','title'=>'Carbon Neutral Logistics','desc'=>'Partner with green logistics providers and offset 100% of transport emissions.'],
          ['num'=>'02','title'=>'Biodegradable Portfolio','desc'=>'Ensure 75% of cleaning & surfactant portfolio is readily biodegradable.'],
          ['num'=>'03','title'=>'Zero Liquid Discharge','desc'=>'Implement ZLD treatment at all associated manufacturing facilities.'],
          ['num'=>'04','title'=>'Responsible Sourcing','desc'=>'100% ethically verified supply chain with ESG-rated suppliers by 2030.'],
        ];
        foreach($goals as $g): ?>
        <div style="display:flex;gap:20px;align-items:flex-start;margin-bottom:24px">
          <span style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:700;color:var(--gold);min-width:44px;line-height:1"><?= $g['num'] ?></span>
          <div>
            <h4 style="color:var(--white);margin-bottom:4px;font-size:0.95rem"><?= $g['title'] ?></h4>
            <p style="font-size:0.83rem;color:rgba(255,255,255,0.55)"><?= $g['desc'] ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="section-pad-sm" style="background:var(--light-gray)">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Compliance & Certifications</span>
      <h2 class="section-title">Our Certifications</h2>
    </div>
    <div class="cert-grid">
      <?php
      $certs = [
        ['badge'=>'&#127885;','name'=>'ISO 9001:2015','desc'=>'Quality Management System'],
        ['badge'=>'&#127807;','name'=>'ISO 14001:2015','desc'=>'Environmental Management'],
        ['badge'=>'&#128274;','name'=>'ISO 45001','desc'=>'Occupational Health & Safety'],
        ['badge'=>'&#127470;&#127475;','name'=>'BIS Certified','desc'=>'Bureau of Indian Standards'],
        ['badge'=>'&#129516;','name'=>'FSSAI Approved','desc'=>'Food Safety Standard Authority'],
        ['badge'=>'&#127758;','name'=>'REACH Compliant','desc'=>'EU Chemical Regulation'],
      ];
      foreach($certs as $c): ?>
      <div class="cert-card"><div class="cert-badge"><?= $c['badge'] ?></div><h5><?= $c['name'] ?></h5><p><?= $c['desc'] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
