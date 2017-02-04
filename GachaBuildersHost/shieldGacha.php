<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [[
	['name'=>'パナギアの聖盾','HP'=>75,'ATK'=>10,'DEF'=>75,'SPD'=>20,'LUK'=>12,'EFFECT'=>122,'img'=>'GachaBuildersHost/res/shield/shield_001e.png'],
	['name'=>'スラフェニクス','HP'=>65,'ATK'=>17,'DEF'=>70,'SPD'=>10,'LUK'=>8,'EFFECT'=>107,'img'=>'GachaBuildersHost/res/shield/shield_001l.png'],
	['name'=>'神々しき帝王の盾','HP'=>85,'ATK'=>12,'DEF'=>85,'SPD'=>15,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001q.png'],
	['name'=>'ハイローエンガード','HP'=>95,'ATK'=>5,'DEF'=>100,'SPD'=>-30,'LUK'=>10,'EFFECT'=>102,'img'=>'GachaBuildersHost/res/shield/shield_003g.png'],
	['name'=>'ベノムガントγ','HP'=>65,'ATK'=>40,'DEF'=>45,'SPD'=>50,'LUK'=>20,'EFFECT'=>111,'img'=>'GachaBuildersHost/res/shield/gauntlet_006b.png'],
  ['name'=>'ンモエザンモ刀妖','HP'=>13,'ATK'=>100,'DEF'=>-100,'SPD'=>38,'LUK'=>-20,'EFFECT'=>210,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_sword021b.png'],
],
[
	['name'=>'聖十字の盾','HP'=>75,'ATK'=>5,'DEF'=>80,'SPD'=>-25,'LUK'=>10,'EFFECT'=>211,'img'=>'GachaBuildersHost/res/shield/shield_003.png'],
	['name'=>'ハードシールド','HP'=>60,'ATK'=>8,'DEF'=>65,'SPD'=>13,'LUK'=>8,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001r.png'],
	['name'=>'ガイアシールド','HP'=>55,'ATK'=>15,'DEF'=>60,'SPD'=>8,'LUK'=>8,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002f.png'],
	['name'=>'セイテンシールド','HP'=>55,'ATK'=>12,'DEF'=>55,'SPD'=>15,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001k.png'],
	['name'=>'ベノムシールド','HP'=>65,'ATK'=>15,'DEF'=>65,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001o.png'],
	['name'=>'セラミックの盾','HP'=>60,'ATK'=>10,'DEF'=>50,'SPD'=>20,'LUK'=>10,'EFFECT'=>103,'img'=>'GachaBuildersHost/res/shield/shield_002d.png'],
	['name'=>'メタルガーダー','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>116,'img'=>'GachaBuildersHost/res/shield/shield_002h.png'],
	['name'=>'帝国軍騎士の盾','HP'=>65,'ATK'=>5,'DEF'=>70,'SPD'=>-18,'LUK'=>10,'EFFECT'=>121,'img'=>'GachaBuildersHost/res/shield/shield_003.png'],
	['name'=>'帝王軍騎士の盾','HP'=>50,'ATK'=>5,'DEF'=>90,'SPD'=>-20,'LUK'=>10,'EFFECT'=>107,'img'=>'GachaBuildersHost/res/shield/shield_003c.png'],
	['name'=>'黒騎士の盾','HP'=>85,'ATK'=>1,'DEF'=>95,'SPD'=>-40,'LUK'=>1,'EFFECT'=>109,'img'=>'GachaBuildersHost/res/shield/shield_003e.png'],
	['name'=>'エグゾディアの左腕','HP'=>1,'ATK'=>1,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>810,'img'=>'GachaBuildersHost/res/shield/el.png'],
],
[
  ['name'=>'おなべのふた','HP'=>5,'ATK'=>1,'DEF'=>5,'SPD'=>30,'LUK'=>25,'EFFECT'=>212,'img'=>'GachaBuildersHost/res/shield/shield_002o.png'],
  ['name'=>'布の手袋','HP'=>25,'ATK'=>20,'DEF'=>15,'SPD'=>35,'LUK'=>8,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_002.png'],
  ['name'=>'鉄のガントレット','HP'=>30,'ATK'=>20,'DEF'=>20,'SPD'=>30,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_002.png'],
  ['name'=>'アイスガントレット','HP'=>30,'ATK'=>20,'DEF'=>20,'SPD'=>30,'LUK'=>5,'EFFECT'=>114,'img'=>'GachaBuildersHost/res/shield/gauntlet_002b.png'],
  ['name'=>'銅のガントレット','HP'=>35,'ATK'=>20,'DEF'=>25,'SPD'=>25,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_003.png'],
  ['name'=>'アイアンクロー','HP'=>25,'ATK'=>30,'DEF'=>16,'SPD'=>25,'LUK'=>8,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_004.png'],
  ['name'=>'ゴールドクロー','HP'=>15,'ATK'=>15,'DEF'=>10,'SPD'=>20,'LUK'=>25,'EFFECT'=>120,'img'=>'GachaBuildersHost/res/shield/gauntlet_004b.png'],
  ['name'=>'赤竜のガントレット','HP'=>20,'ATK'=>40,'DEF'=>20,'SPD'=>25,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_005.png'],
  ['name'=>'鉄の小手','HP'=>20,'ATK'=>20,'DEF'=>20,'SPD'=>20,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_006.png'],
  ['name'=>'金の小手','HP'=>10,'ATK'=>10,'DEF'=>10,'SPD'=>35,'LUK'=>10,'EFFECT'=>121,'img'=>'GachaBuildersHost/res/shield/gauntlet_006b.png'],
  ['name'=>'スライムシールド','HP'=>20,'ATK'=>5,'DEF'=>45,'SPD'=>5,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001.png'],
  ['name'=>'レッドスライムシールド','HP'=>25,'ATK'=>10,'DEF'=>45,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001h.png'],
  ['name'=>'ブラックスライムシールド','HP'=>20,'ATK'=>5,'DEF'=>60,'SPD'=>1,'LUK'=>-10,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001m.png'],
  ['name'=>'スカルシールド','HP'=>45,'ATK'=>10,'DEF'=>45,'SPD'=>20,'LUK'=>-20,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002n.png'],
  ['name'=>'ルビーシールド','HP'=>35,'ATK'=>15,'DEF'=>25,'SPD'=>5,'LUK'=>15,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002h.png'],
  ['name'=>'サファイアシールド','HP'=>35,'ATK'=>5,'DEF'=>25,'SPD'=>15,'LUK'=>15,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002l.png'],
  ['name'=>'クライゴーストシールド','HP'=>40,'ATK'=>10,'DEF'=>50,'SPD'=>15,'LUK'=>-15,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002k.png'],
  ['name'=>'ゴアの盾','HP'=50,'ATK'=>20,'DEF'=>50,'SPD'=>-5,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002i.png'],
  ['name'=>'アメフトシールド','HP'=>40,'ATK'=>20,'DEF'=>35,'SPD'=>25,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002e.png'],
  ['name'=>'メタルシールド','HP'=>30,'ATK'=>1,'DEF'=>30,'SPD'=>50,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_004.png'],
]];

//210 2回行動
//211 DEF*1.2
//212 火属性+2

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>

