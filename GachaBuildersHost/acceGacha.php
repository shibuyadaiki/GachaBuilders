<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data =[ [
	['name'=>'500円','HP'=>100,'ATK'=>5,'DEF'=>5,'SPD'=>5,'LUK'=>10,'EFFECT'=>108,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_005.png'],
	['name'=>'全能の指輪','HP'=>50,'ATK'=>10,'DEF'=>10,'SPD'=>10,'LUK'=>10,'EFFECT'=>105,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_024e.png'],
	['name'=>'豪力の指輪','HP'=>0,'ATK'=>20,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>101,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_024.png'],
	['name'=>'金剛の指輪','HP'=>0,'ATK'=>0,'DEF'=>20,'SPD'=>0,'LUK'=>0,'EFFECT'=>102,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_024c.png'],
	['name'=>'刹那の指輪','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>20,'LUK'=>0,'EFFECT'=>103,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_024b.png'],
	['name'=>'神託の指輪','HP'=>0,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>20,'EFFECT'=>104,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_024d.png'],
	['name'=>'潜在の指輪','HP'=>50,'ATK'=>20,'DEF'=>20,'SPD'=>20,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_024f.png'],
 
  
	['name'=>'鏡','HP'=>40,'ATK'=>0,'DEF'=>5,'SPD'=>5,'LUK'=>0,'EFFECT'=>119,'img'=>'GachaBuildersHost/GatyaResource/acce/4.gif'],
	['name'=>'召喚獣','HP'=>50,'ATK'=>10,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>118,'img'=>'GachaBuildersHost/GatyaResource/acce/14.gif'],
	['name'=>'お人形','HP'=>-10,'ATK'=>-5,'DEF'=>-5,'SPD'=>-5,'LUK'=>-10,'EFFECT'=>123,'img'=>'GachaBuildersHost/GatyaResource/acce/8.gif'],
	['name'=>'ポーション','HP'=>40,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>10,'EFFECT'=>121,'img'=>'GachaBuildersHost/GatyaResource/acce/10.gif'],
	['name'=>'毒液','HP'=>10,'ATK'=>10,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>137,'img'=>'GachaBuildersHost/GatyaResource/acce/13.gif']

],
[
	['name'=>'エグゾディアの右足','HP'=>1,'ATK'=>1,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>810,'img'=>'GachaBuildersHost/GatyaResource/acce/efr.png'],
  
	['name'=>'ブルーオーブ','HP'=>20,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>109,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_003.png'],
	['name'=>'レッドオーブ','HP'=>20,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>131,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_003c.png'],
	['name'=>'イエローオーブ','HP'=>20,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>111,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_003b.png'],
	['name'=>'グリーンオーブ','HP'=>20,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>112,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_003d.png'],
	['name'=>'ダークオーブ','HP'=>20,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>136,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_003e.png'],
  
	['name'=>'氷のバッジ','HP'=>20,'ATK'=>0,'DEF'=>0,'SPD'=>-10,'LUK'=>0,'EFFECT'=>114,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_001.png'],
	['name'=>'炎のバッジ','HP'=>20,'ATK'=>-10,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>115,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_001b.png'],
	

	['name'=>'ゴールドバングル','HP'=>80,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>138,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_002b.png'],
	['name'=>'100円','HP'=>50,'ATK'=>2,'DEF'=>2,'SPD'=>2,'LUK'=>4,'EFFECT'=>107,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_005b.png'],

	['name'=>'金の指輪','HP'=>30,'ATK'=>8,'DEF'=>8,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_004.png'],
	['name'=>'金の首輪','HP'=>20,'ATK'=>0,'DEF'=>-10,'SPD'=>14,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_007b.png'],
  
  
	['name'=>'勾玉','HP'=>30,'ATK'=>0,'DEF'=>7,'SPD'=>0,'LUK'=>7,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/12.gif'],
	['name'=>'羽','HP'=>10,'ATK'=>0,'DEF'=>0,'SPD'=>7,'LUK'=>7,'EFFECT'=>122,'img'=>'GachaBuildersHost/GatyaResource/acce/7.gif'],
	['name'=>'手榴弾','HP'=>20,'ATK'=>10,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>117,'img'=>'GachaBuildersHost/GatyaResource/acce/9.gif'],
	['name'=>'砂時計','HP'=>30,'ATK'=>0,'DEF'=>0,'SPD'=>15,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/5.gif'],
	['name'=>'ペンダント','HP'=>30,'ATK'=>0,'DEF'=>15,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/2.gif']
],
[
	['name'=>'シルバーバングル','HP'=>50,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_002.png'],
	['name'=>'銀の首輪','HP'=>10,'ATK'=>0,'DEF'=>-3,'SPD'=>6,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_007.png'],
	['name'=>'サファイアの指輪','HP'=>10,'ATK'=>0,'DEF'=>6,'SPD'=>-3,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_006.png'],
  
	['name'=>'銀の指輪','HP'=>10,'ATK'=>4,'DEF'=>4,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_004b.png'],
	['name'=>'かんざし','HP'=>5,'ATK'=>10,'DEF'=>-5,'SPD'=>2,'LUK'=>-5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_025.png'],
	['name'=>'よく分からないネックレス','HP'=>5,'ATK'=>0,'DEF'=>8,'SPD'=>-3,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_009.png'],
	['name'=>'高そうなネックレス','HP'=>-10,'ATK'=>0,'DEF'=>10,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_008.png'],

	['name'=>'10円','HP'=>10,'ATK'=>1,'DEF'=>1,'SPD'=>1,'LUK'=>2,'EFFECT'=>106,'img'=>'GachaBuildersHost/GatyaResource/acce/acce_005b.png'],
  
	['name'=>'ロープ','HP'=>5,'ATK'=>0,'DEF'=>2,'SPD'=>0,'LUK'=>0,'EFFECT'=>116,'img'=>'GachaBuildersHost/GatyaResource/acce/6.gif'],
	['name'=>'おにぎり','HP'=>5,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>120,'img'=>'GachaBuildersHost/GatyaResource/acce/11.gif'],
	['name'=>'バッグ','HP'=>10,'ATK'=>0,'DEF'=>5,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/3.gif'],
	['name'=>'時計','HP'=>10,'ATK'=>0,'DEF'=>0,'SPD'=>7,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/1.gif'],
  
  
	['name'=>'うんこ','HP'=>-999,'ATK'=>-999,'DEF'=>-999,'SPD'=>-999,'LUK'=>-999,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/acce/unk.png']

]];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>