<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [[
	['name'=>'約束された勝利の靴','HP'=>50,'ATK'=>0,'DEF'=>2,'SPD'=>54,'LUK'=>0,'EFFECT'=>101,'img'=>'GachaBuildersHost/res/foot/boots_011.png'],
	['name'=>'鶏王の足','HP'=>20,'ATK'=>0,'DEF'=>0,'SPD'=>100,'LUK'=>10,'EFFECT'=>104,'img'=>'GachaBuildersHost/res/foot/boots_005.png'],
	['name'=>'黄金のブーツ','HP'=>50,'ATK'=>20,'DEF'=>20,'SPD'=>10,'LUK'=>1,'EFFECT'=>105,'img'=>'GachaBuildersHost/res/foot/boots_006.png'],
	['name'=>'ユーエヌケーオー(UR)','HP'=>-50,'ATK'=>-10,'DEF'=>-10,'SPD'=>90,'LUK'=>3,'EFFECT'=>103,'img'=>'GachaBuildersHost/res/foot/boots_005b.png'],
	['name'=>'時をかけるシューズ','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>86,'LUK'=>0,'EFFECT'=>121,'img'=>'GachaBuildersHost/res/foot/boots_003c.png'],

],
[
	['name'=>'瞬足','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>40,'LUK'=>1,'EFFECT'=>103,'img'=>'GachaBuildersHost/res/foot/boots_005.png'],
	['name'=>'フェザーブーツ','HP'=>0,'ATK'=>10,'DEF'=>0,'SPD'=>30,'LUK'=>1,'EFFECT'=>122,'img'=>'GachaBuildersHost/res/foot/boots_003c.png'],
	['name'=>'純銀のブーツ','HP'=>0,'ATK'=>0,'DEF'=>20,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_004.png'],
	['name'=>'幸せの靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>20,'EFFECT'=>104,'img'=>'GachaBuildersHost/res/foot/boots_001.png'],
	['name'=>'よっちゃん３０円（税抜き）','HP'=>-30,'ATK'=>-30,'DEF'=>-30,'SPD'=>-30,'LUK'=>-30,'EFFECT'=>123,'img'=>'GachaBuildersHost/res/foot/boots_007.png'],
	['name'=>'石鹸靴','HP'=>30,'ATK'=>30,'DEF'=>-30,'SPD'=>-30,'LUK'=>-30,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005b.png'],
	['name'=>'よく滑る石鹸靴','HP'=>-10,'ATK'=>0,'DEF'=>0,'SPD'=>35,'LUK'=>-0,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005b.png'],
	['name'=>'ミラーシューズ','HP'=>30,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>119,'img'=>'GachaBuildersHost/res/foot/boots_004.png'],
	['name'=>'戦車のラジコン','HP'=>30,'ATK'=>0,'DEF'=>20,'SPD'=>0,'LUK'=>0,'EFFECT'=>117,'img'=>'GachaBuildersHost/res/foot/boots_004b.png'],
	['name'=>'エッチなタイツ','HP'=>0,'ATK'=>0,'DEF'=>-10,'SPD'=>0,'LUK'=>20,'EFFECT'=>120,'img'=>'GachaBuildersHost/res/foot/boots_010.png'],
	['name'=>'攻撃的なハイヒール','HP'=>0,'ATK'=>22,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>101,'img'=>'GachaBuildersHost/res/foot/boots_010.png'],
	['name'=>'魅惑のハイサイブーツ','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>12,'EFFECT'=>101,'img'=>'GachaBuildersHost/res/foot/boots_010.png'],
	['name'=>'ゴキブリを潰すスリッパ','HP'=>0,'ATK'=>30,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_011.png'],
	
],
[
	['name'=>'靴底','HP'=>10,'ATK'=>1,'DEF'=>0,'SPD'=>-5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_011.png'],
	['name'=>'ガム付きブーツ',	'HP'=>0,'ATK'=>2,'DEF'=>2,'SPD'=>-15,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_001.png'],
	['name'=>'スパイク','HP'=>0,'ATK'=>2,'DEF'=>2,'SPD'=>-15,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005.png'],
	['name'=>'サンダル','HP'=>5,'ATK'=>0,'DEF'=>1,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_009.png'],
	['name'=>'バトルブーツ','HP'=>0,'ATK'=>3,'DEF'=>1,'SPD'=>-1,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_004b.png'],
	['name'=>'ハードシューズ','HP'=>10,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_001.png'],
	['name'=>'ランナーズハイ','HP'=>0,'ATK'=>-5,'DEF'=>-5,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_006.png'],
	['name'=>'盗賊の靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005.png'],
	['name'=>'吸魂の靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005.png'],
	['name'=>'ガーディアンブーツ','HP'=>0,'ATK'=>0,'DEF'=>8,'SPD'=>-2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_004b.png'],
	['name'=>'パワーブーツ','HP'=>0,'ATK'=>2,'DEF'=>0,'SPD'=>-2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_004b.png'],
	['name'=>'紐','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_009.png'],
	['name'=>'忍者の足袋','HP'=>0,'ATK'=>0,'DEF'=>4,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots005b.png'],
	['name'=>'ユーエヌケーオー','HP'=>0,'ATK'=>-90,'DEF'=>-999,'SPD'=>-999,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_007.png'],
	['name'=>'猟兵の足袋','HP'=>0,'ATK'=>3,'DEF'=>0,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_008.png'],
	['name'=>'なにかの皮','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005.png'],
	['name'=>'レザーヒール','HP'=>0,'ATK'=>2,'DEF'=>2'SPD'=>-4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005.png'],
	['name'=>'青銅のブーツ','HP'=>0,'ATK'=>2,'DEF'=>2,'SPD'=>-2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_004b.png'],
	['name'=>'旅人の靴','HP'=>10,'ATK'=>0,'DEF'=>0,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_008.png'],
	['name'=>'道端の雑草','HP'=>-5,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_003.png'],
	['name'=>'ハイヒール','HP'=>0,'ATK'=>5,'DEF'=>0,'SPD'=>-20,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_010.png'],
	['name'=>'木の靴',	'HP'=>1,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005.png'],
	['name'=>'しわよせのくつ',	'HP'=>0,'ATK'=>1,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_008.png'],
	['name'=>'ピンヒール','HP'=>0,'ATK'=>1,'DEF'=>1,'SPD'=>-2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_010.png'],
	['name'=>'白のシューズ','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_010.png'],
	['name'=>'魔導士のサンダル','HP'=>0,'ATK'=>2,'DEF'=>-5,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_003b.png'],
	['name'=>'イケてるミュール','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_003b.png'],
	['name'=>'エナメルの靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005b.png'],
	['name'=>'エナメルヒール','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>-6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_005b.png'],
	['name'=>'ゴムの長靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_003.png'],
	['name'=>'鉄のグリーブ','HP'=>0,'ATK'=>0,'DEF'=>8,'SPD'=>-3,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_004b.png'],
	['name'=>'戦士の靴','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>-8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_004b.png'],
	['name'=>'おしゃれなブーツ','HP'=>0,'ATK'=>-2,'DEF'=>-1,'SPD'=>-6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_011.png'],
	['name'=>'荒らしの靴','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>-8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_008.png'],
	['name'=>'ななしの靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/res/foot/boots_008.png'],
]];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>