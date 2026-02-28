<?php
$page_title = "Industries We Serve";
include 'includes/header.php';
$industries = [
  ['id'=>'textile','icon'=>'&#129525;','title'=>'Textile Industry','color'=>'#2E7D32',
   'desc'=>'The textile sector demands precise chemical formulations for dyeing, finishing, and fabric processing. AV Chemicals supplies wetting agents, levelling agents, dispersants, and fixing agents that ensure vibrant, durable color and superior fabric quality.',
   'products'=>['Wetting & Penetrating Agents','Levelling Agents','Optical Brighteners','Softeners & Finishing Agents','Sizing Chemicals','Anti-foaming Agents'],
   'benefits'=>['Improved color fastness','Consistent batch quality','Reduced water & energy consumption','REACH & GOTS compliance']],
  ['id'=>'pharma','icon'=>'&#128138;','title'=>'Pharmaceuticals','color'=>'#1565C0',
   'desc'=>'AV Chemicals provides GMP-compliant reagents, intermediates, and solvents meeting USP, BP, and IP specifications, supporting drug manufacturers in maintaining the highest quality standards.',
   'products'=>['API Intermediates','HPLC & AR Grade Solvents','pH Buffers & Reagents','Pharmaceutical Excipients','Lab Chemicals','Disinfectants & Sanitizers'],
   'benefits'=>['GMP compliant supply chain','CoA & MSDS with every batch','Full traceability and documentation','Regulatory audit support']],
  ['id'=>'food','icon'=>'&#127869;&#65039;','title'=>'Food & Beverage','color'=>'#F57F17',
   'desc'=>'Our food-grade chemical range complies with FSSAI and international food safety standards, providing effective solutions for cleaning, sanitation, water treatment, and food processing.',
   'products'=>['Food Grade Sanitizers','CIP Cleaning Chemicals','Water Treatment for Food Plants','Food Preservatives','Anti-scaling for Evaporators','pH Adjusters'],
   'benefits'=>['FSSAI approved formulations','Non-toxic & food-safe','Halal & Kosher compatible options','Full compliance documentation']],
  ['id'=>'auto','icon'=>'&#128664;','title'=>'Automotive','color'=>'#37474F',
   'desc'=>'From metal surface preparation to paint line chemistry, AV Chemicals provides specialty chemicals for automotive manufacturing — pre-treatment, phosphating, paint additives, and underbody protection.',
   'products'=>['Metal Cleaners & Degreasers','Phosphating Chemicals','Passivation Agents','Paint Additives','Rust Preventives','Underbody Coating Chemicals'],
   'benefits'=>['Enhanced corrosion protection','Improved paint adhesion','Automotive OEM spec compliance','REACH-compliant formulations']],
  ['id'=>'construction','icon'=>'&#127959;&#65039;','title'=>'Construction','color'=>'#795548',
   'desc'=>'AV Chemicals supplies concrete admixtures, waterproofing agents, and specialty construction chemicals that enhance the durability, strength, and finish of structures.',
   'products'=>['Concrete Admixtures','Waterproofing Compounds','Curing Compounds','Bonding Agents','Anti-carbonation Coatings','Grouting Chemicals'],
   'benefits'=>['Improved concrete strength','Extended structure life','Reduced water permeability','IS & ASTM standard compliance']],
  ['id'=>'paint','icon'=>'&#127912;','title'=>'Paint & Coatings','color'=>'#6A1B9A',
   'desc'=>'Paint manufacturers depend on precise chemical inputs for pigment dispersion, film formation, and application performance. Our range includes dispersants, defoamers, biocides, coalescents, and rheology modifiers.',
   'products'=>['Dispersants & Wetting Agents','Defoamers / Anti-foam','In-can Preservatives','Coalescent Solvents','Rheology Modifiers','UV Absorbers & Light Stabilizers'],
   'benefits'=>['Superior color development','Improved storage stability','Better application properties','Extended coating life']],
];
$bgAlternate = ['var(--white)','var(--light-gray)'];
foreach($industries as $i => $ind): ?>
<section class="section-pad" id="<?= $ind['id'] ?>" style="background:<?= $bgAlternate[$i%2] ?>">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:start">
      <div>
        <div style="display:flex;align-items:center;gap:16px;margin-bottom:24px">
          <div style="width:64px;height:64px;background:<?= $ind['color'] ?>22;border-radius:var(--radius);display:flex;align-items:center;justify-content:center;font-size:2rem;border:2px solid <?= $ind['color'] ?>55"><?= $ind['icon'] ?></div>
          <span class="section-tag" style="margin:0"><?= $ind['title'] ?></span>
        </div>
        <h2 style="font-size:2rem;margin-bottom:16px"><?= $ind['title'] ?></h2>
        <p style="color:var(--text-muted);margin-bottom:28px;line-height:1.75"><?= $ind['desc'] ?></p>
        <h4 style="margin-bottom:16px;font-size:1rem">Key Benefits</h4>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;margin-bottom:28px">
          <?php foreach($ind['benefits'] as $b): ?>
          <li style="display:flex;align-items:center;gap:10px;font-size:0.9rem;color:var(--text-muted)"><span style="color:<?= $ind['color'] ?>;font-weight:700">&#10003;</span> <?= $b ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="contact.php?industry=<?= urlencode($ind['title']) ?>" class="btn btn-green">Request Industry Catalog &#8594;</a>
      </div>
      <div>
        <div style="background:var(--dark);border-radius:var(--radius-lg);padding:36px;box-shadow:var(--shadow-lg)">
          <h4 style="color:var(--gold);margin-bottom:24px;font-size:1rem;letter-spacing:1px;text-transform:uppercase">Products We Supply</h4>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:14px">
            <?php foreach($ind['products'] as $p): ?>
            <li style="display:flex;align-items:center;gap:14px;padding:12px 16px;background:rgba(255,255,255,0.04);border-radius:var(--radius);border-left:3px solid <?= $ind['color'] ?>">
              <span style="color:<?= $ind['color'] ?>;font-size:1.1rem">&#9679;</span>
              <span style="color:rgba(255,255,255,0.85);font-size:0.9rem"><?= $p ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>
<?php include 'includes/footer.php'; ?>
