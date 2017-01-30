<?php

require_one('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [
	['name'=>'パナギアの聖盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001e.png'],
	['name'=>'スラフェニクス','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001l.png'],
	['name'=>'神々しき帝王の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001q.png'],
	['name'=>'聖黒竜の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002k.png'],
	['name'=>'ベノムガントγ','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_006b.png'],
].
[
	['name'=>'聖十字の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_003.png'],
	['name'=>'ハードシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001r.png'],
	['name'=>'ガイアシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002f.png'],
	['name'=>'セイテンシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001k.png'],
	['name'=>'ベノムシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001o.png'],
	['name'=>'セラミックの盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002d.png'],
	['name'=>'メタルガーダー','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002h.png'],
	['name'=>'帝国軍騎士の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_003.png'],
	['name'=>'帝王軍騎士の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_003c.png'],
	['name'=>'黒騎士の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_003e.png'],
],
[
  ['name'=>'おなべのふた','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002o.png'],
  ['name'=>'布の手袋','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_002.png'],
  ['name'=>'鉄のガントレット','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_002.png'],
  ['name'=>'アイスガントレット','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_002b.png'],
  ['name'=>'銅のガントレット','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_003.png'],
  ['name'=>'アイアンクロー','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_004.png'],
  ['name'=>'ゴールドクロー','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_004b.png'],
  ['name'=>'赤竜のガントレット','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_005.png'],
  ['name'=>'鉄の小手','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_006.png'],
  ['name'=>'金の小手','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_006b.png'],
  ['name'=>'フルメタルナックル','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_007.png'],
  ['name'=>'スライムシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001.png'],
  ['name'=>'レッドスライムシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001h.png'],
  ['name'=>'ブラックスライムシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001m.png'],
  ['name'=>'スカルシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002n.png'],
  ['name'=>'ルビーシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002h.png'],
  ['name'=>'サファイアシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002l.png'],
  ['name'=>'クライゴーストシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002k.png'],
  ['name'=>'ゴアの盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002i.png'],
  ['name'=>'アメフトシールド','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002f.png'],
  ['name'=>'パナギアの聖盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001e.png'],
  ['name'=>'スラフェニクス','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001l.png'],
  ['name'=>'神々しき帝王の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001q.png'],
  ['name'=>'聖黒竜の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002k.png'],
  ['name'=>'ベノムガントγ','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_006b.png'],
  ['name'=>'パナギアの聖盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001e.png'],
  ['name'=>'スラフェニクス','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001l.png'],
  ['name'=>'神々しき帝王の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001q.png'],
  ['name'=>'聖黒竜の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002k.png'],
  ['name'=>'ベノムガントγ','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_006b.png'],
  ['name'=>'パナギアの聖盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001e.png'],
  ['name'=>'スラフェニクス','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001l.png'],
  ['name'=>'神々しき帝王の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_001q.png'],
  ['name'=>'聖黒竜の盾','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/shield_002k.png'],
  ['name'=>'ベノムガントγ','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/shield/gauntlet_006b.png'],
];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
