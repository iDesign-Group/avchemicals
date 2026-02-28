<?php
header('Content-Type: application/json');
header('Cache-Control: public, max-age=3600');

$products = [
  ['icon'=>'&#9879;&#65039;','title'=>'Specialty Chemicals','desc'=>'High-performance formulations for advanced manufacturing, coatings, and precision applications.','tags'=>['Surface Treatment','Adhesives','Additives'],'link'=>'specialty','bg'=>'linear-gradient(135deg,#1B5E20,#2E7D32)'],
  ['icon'=>'&#127981;','title'=>'Industrial Chemicals','desc'=>'Reliable bulk chemicals for manufacturing, processing, and industrial operations at scale.','tags'=>['Acids','Alkalis','Solvents'],'link'=>'industrial','bg'=>'linear-gradient(135deg,#4a2c0a,#8B6914)'],
  ['icon'=>'&#127807;','title'=>'Agro Chemicals','desc'=>'Effective crop protection and nutrition solutions helping farmers maximize yield sustainably.','tags'=>['Pesticides','Fertilizers','Micronutrients'],'link'=>'agro','bg'=>'linear-gradient(135deg,#1a3a1a,#2d6a1a)'],
  ['icon'=>'&#128138;','title'=>'Pharma Intermediates','desc'=>'GMP-compliant chemical intermediates for pharmaceutical manufacturers and API producers.','tags'=>['API Intermediates','Excipients'],'link'=>'pharma','bg'=>'linear-gradient(135deg,#0d2b4a,#1565C0)'],
  ['icon'=>'&#129529;','title'=>'Cleaning Compounds','desc'=>'Industrial and institutional cleaning formulations for hygiene-critical environments.','tags'=>['Degreasers','Sanitizers','Descalers'],'link'=>'cleaning','bg'=>'linear-gradient(135deg,#2a1a4a,#5e35b1)'],
  ['icon'=>'&#128167;','title'=>'Water Treatment','desc'=>'Effective coagulants, scale inhibitors, and biocides for industrial and municipal water systems.','tags'=>['Coagulants','Scale Inhibitors'],'link'=>'water','bg'=>'linear-gradient(135deg,#0a2a3a,#00695C)'],
];

echo json_encode(['success'=>true,'products'=>$products]);
