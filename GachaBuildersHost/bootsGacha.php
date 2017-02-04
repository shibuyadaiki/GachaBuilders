<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [[
	['name'=>'約束された勝利の靴','HP'=>50,'ATK'=>20,'DEF'=>32,'SPD'=>24,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'シークレットブーツ','HP'=>0,'ATK'=>0,'DEF'=>50,'SPD'=>-20,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'黄金のブーツ','HP'=>100,'ATK'=>0,'DEF'=>0,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ユーエヌケーオー(UR)','HP'=>300,'ATK'=>-30,'DEF'=>0,'SPD'=>30,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'時をかけるシューズ','HP'=>-20,'ATK'=>0,'DEF'=>0,'SPD'=>50,'LUK'=>30,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
],
[
	['name'=>'瞬足','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>40,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'フェザーブーツ','HP'=>0,'ATK'=>10,'DEF'=>0,'SPD'=>30,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'純銀のブーツ','HP'=>0,'ATK'=>0,'DEF'=>30,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'幸せの靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'よっちゃん３０円（税抜き）','HP'=>30,'ATK'=>30,'DEF'=>-30,'SPD'=>-30,'LUK'=>-30,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
],
[
	['name'=>'靴底','HP'=>10,'ATK'=>1,'DEF'=>0,'SPD'=>-5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'ガム付きブーツ',	'HP'=>0,'ATK'=>5,'DEF'=>5,'SPD'=>-15,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'スパイク','HP'=>0,'ATK'=>5,'DEF'=>5,'SPD'=>-15,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'サンダル','HP'=>5,'ATK'=>0,'DEF'=>1,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'バトルブーツ','HP'=>0,'ATK'=>6,'DEF'=>1,'SPD'=>-1,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ハードシューズ','HP'=>10,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ランナーズハイ','HP'=>0,'ATK'=>-5,'DEF'=>-5,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'盗賊の靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'吸魂の靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ガーディアンブーツ','HP'=>0,'ATK'=>0,'DEF'=>8,'SPD'=>-2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'パワーブーツ','HP'=>0,'ATK'=>8,'DEF'=>0,'SPD'=>-2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'紐','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'忍者の足袋','HP'=>0,'ATK'=>0,'DEF'=>4,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ユーエヌケーオー','HP'=>0,'ATK'=>-90,'DEF'=>-999,'SPD'=>-999,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'猟兵の足袋','HP'=>0,'ATK'=>6,'DEF'=>0,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'なにかの皮','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'レザーヒール','HP'=>0,'ATK'=>4,'DEF'=>4,'SPD'=>-4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'青銅のブーツ','HP'=>0,'ATK'=>2,'DEF'=>6,'SPD'=>-2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'旅人の靴','HP'=>10,'ATK'=>0,'DEF'=>0,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'道端の雑草','HP'=>-5,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ハイヒール','HP'=>0,'ATK'=>10,'DEF'=>0,'SPD'=>-20,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'木の靴',	'HP'=>1,'ATK'=>2,'DEF'=>3,'SPD'=>4,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'しわよせのくつ',	'HP'=>0,'ATK'=>1,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ピンヒール','HP'=>0,'ATK'=>6,'DEF'=>1,'SPD'=>-2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'白のシューズ','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'魔導士のサンダル','HP'=>0,'ATK'=>7,'DEF'=>-5,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'イケてるミュール','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'エナメルの靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'エナメルヒール','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>-6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ゴムの長靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>7,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'鉄のグリーブ','HP'=>0,'ATK'=>0,'DEF'=>8,'SPD'=>-3,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'戦士の靴','HP'=>0,'ATK'=>5,'DEF'=>5,'SPD'=>-8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'おしゃれなブーツ','HP'=>0,'ATK'=>-2,'DEF'=>-1,'SPD'=>-6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'荒らしの靴','HP'=>0,'ATK'=>10,'DEF'=>0,'SPD'=>-8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
	['name'=>'ななしの靴','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
]];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
