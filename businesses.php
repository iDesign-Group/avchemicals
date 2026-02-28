<?php
$page_title = "Businesses & Products";
include 'includes/header.php';
$categories = [
  ['id'=>'specialty','icon'=>'&#9879;&#65039;','title'=>'Specialty Chemicals','color'=>'linear-gradient(135deg,var(--green-dark),var(--green-mid))','desc'=>'High-performance specialty chemicals designed for advanced manufacturing and precision applications.',
   'products'=>[
     ['name'=>'Surface Active Agents','desc'=>'Anionic, cationic & non-ionic surfactants for industrial applications','tags'=>['Wetting','Emulsification','Dispersion']],
     ['name'=>'Polymer Additives','desc'=>'Stabilizers, plasticizers, and processing aids for plastic & rubber industries','tags'=>['Stabilizers','Plasticizers','UV Absorbers']],
     ['name'=>'Adhesive Formulations','desc'=>'Industrial adhesives and bonding agents for packaging and construction','tags'=>['Bonding','Sealing','Lamination']],
     ['name'=>'Surface Treatment Chemicals','desc'=>'Pre-treatment chemicals for metals including cleaners and phosphating agents','tags'=>['Metal Treatment','Anti-corrosion','Passivation']],
   ]],
  ['id'=>'industrial','icon'=>'&#127981;','title'=>'Industrial Chemicals','color'=>'linear-gradient(135deg,#4a2c0a,#8B6914)','desc'=>'Reliable, high-purity industrial chemicals for bulk manufacturing and processing needs.',
   'products'=>[
     ['name'=>'Inorganic Acids','desc'=>'Sulphuric acid, hydrochloric acid, nitric acid in various grades','tags'=>['Technical Grade','AR Grade','LR Grade']],
     ['name'=>'Caustic Soda & Alkalis','desc'=>'Sodium hydroxide, potassium hydroxide for industrial processes','tags'=>['Flakes','Lye','Pearls']],
     ['name'=>'Industrial Solvents','desc'=>'Acetone, MEK, ethanol, IPA and other solvents for manufacturing','tags'=>['Cleaning','Extraction','Synthesis']],
     ['name'=>'Oxidizing Agents','desc'=>'Hydrogen peroxide, sodium hypochlorite, potassium permanganate','tags'=>['Bleaching','Disinfection','Oxidation']],
   ]],
  ['id'=>'agro','icon'=>'&#127807;','title'=>'Agro Chemicals','color'=>'linear-gradient(135deg,#1a3a1a,#2d6a1a)','desc'=>'Effective and eco-responsible agricultural chemicals to boost yield and protect crops.',
   'products'=>[
     ['name'=>'Crop Protection Chemicals','desc'=>'Insecticides, fungicides, and herbicides for effective crop management','tags'=>['Insecticide','Fungicide','Herbicide']],
     ['name'=>'Plant Growth Regulators','desc'=>'Hormones and regulators to optimize plant growth and productivity','tags'=>['PGR','Auxins','Cytokinins']],
     ['name'=>'Micronutrient Fertilizers','desc'=>'Zinc, boron, manganese and chelated micronutrient blends','tags'=>['Zinc','Boron','Iron Chelate']],
     ['name'=>'Soil Conditioners','desc'=>'Humic acid, fulvic acid and organic soil enhancement products','tags'=>['Humic Acid','Fulvic Acid','Bio-stimulants']],
   ]],
  ['id'=>'pharma','icon'=>'&#128138;','title'=>'Pharma Intermediates','color'=>'linear-gradient(135deg,#0d2b4a,#1565C0)','desc'=>'GMP-compliant chemical intermediates and excipients for the pharmaceutical sector.',
   'products'=>[
     ['name'=>'API Intermediates','desc'=>'Key intermediates for active pharmaceutical ingredient synthesis','tags'=>['GMP Grade','High Purity','CoA Available']],
     ['name'=>'Pharmaceutical Excipients','desc'=>'Binders, fillers, disintegrants and coating agents for formulation','tags'=>['Binders','Fillers','Coating Agents']],
     ['name'=>'Lab Reagents','desc'=>'Analytical grade chemicals for pharmaceutical quality control labs','tags'=>['AR Grade','HPLC Grade','ACS Grade']],
   ]],
  ['id'=>'cleaning','icon'=>'&#129529;','title'=>'Cleaning Compounds','color'=>'linear-gradient(135deg,#2a1a4a,#5e35b1)','desc'=>'Industrial and institutional cleaning chemicals for hygiene-critical environments.',
   'products'=>[
     ['name'=>'Industrial Degreasers','desc'=>'Powerful solvent-based and water-based degreasers for machinery','tags'=>['Heavy Duty','Biodegradable','Non-Flammable']],
     ['name'=>'Descaling Compounds','desc'=>'Acid-based descalers for boilers, heat exchangers, and pipelines','tags'=>['Descaling','Limescale','Rust Removal']],
     ['name'=>'Sanitizers & Disinfectants','desc'=>'Food-safe and industrial sanitizers for hygiene compliance','tags'=>['Food Safe','FSSAI Approved','Broad Spectrum']],
     ['name'=>'Floor & Surface Cleaners','desc'=>'Concentrated floor cleaners for industrial and institutional use','tags'=>['Concentrated','Safe for All Floors']],
   ]],
  ['id'=>'water','icon'=>'&#128167;','title'=>'Water Treatment','color'=>'linear-gradient(135deg,#0a2a3a,#00695C)','desc'=>'Complete range of water treatment chemicals for industrial and municipal applications.',
   'products'=>[
     ['name'=>'Coagulants & Flocculants','desc'=>'PAC, alum and polyacrylamide for water clarification','tags'=>['PAC','Alum','Anionic Flocculant']],
     ['name'=>'Scale & Corrosion Inhibitors','desc'=>'Protect cooling towers, boilers, and pipelines from scaling','tags'=>['Cooling Tower','Boiler Treatment','Pipeline']],
     ['name'=>'Biocides','desc'=>'Oxidizing and non-oxidizing biocides to control microbial growth','tags'=>['Chlorine Based','Non-Oxidizing','Algaecide']],
     ['name'=>'pH Adjustment Chemicals','desc'=>'Acid and alkali dosing chemicals for water pH control','tags'=>['pH Up','pH Down','Buffer Solutions']],
   ]],
];
$bgAlternate = ['var(--white)','var(--light-gray)'];
foreach($categories as $i => $cat): ?>
<section class="section-pad" id="<?= $cat['id'] ?>" style="background:<?= $bgAlternate[$i%2] ?>">
  <div class="container">
    <div style="display:flex;align-items:center;gap:20px;margin-bottom:48px;flex-wrap:wrap">
      <div style="width:72px;height:72px;border-radius:50%;background:<?= $cat['color'] ?>;display:flex;align-items:center;justify-content:center;font-size:2rem;flex-shrink:0"><?= $cat['icon'] ?></div>
      <div>
        <span class="section-tag" style="margin-bottom:8px"><?= $cat['title'] ?></span>
        <h2 style="font-size:1.8rem;margin:0"><?= $cat['title'] ?></h2>
        <p style="color:var(--text-muted);margin-top:6px"><?= $cat['desc'] ?></p>
      </div>
    </div>
    <div class="products-grid">
      <?php foreach($cat['products'] as $prod): ?>
      <div class="product-card">
        <div class="product-card-header" style="background:<?= $cat['color'] ?>"><div style="font-size:2.8rem;z-index:1"><?= $cat['icon'] ?></div></div>
        <div class="product-card-body">
          <h3><?= $prod['name'] ?></h3>
          <p><?= $prod['desc'] ?></p>
          <?php foreach($prod['tags'] as $tag): ?><span class="product-tag"><?= $tag ?></span><?php endforeach; ?>
          <br><a href="contact.php?product=<?= urlencode($prod['name']) ?>" class="btn btn-green" style="margin-top:16px;padding:10px 20px;font-size:0.85rem">Enquire Now &#8594;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>
<?php include 'includes/footer.php'; ?>
