<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [[
	['name'=>'英雄の鎧','HP'=>200,'ATK'=>15,'DEF'=>50,'SPD'=>10,'LUK'=>5,'EFFECT'=>102,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_008e.png'],
	['name'=>'隻腕の鎧','HP'=>140,'ATK'=>20,'DEF'=>35,'SPD'=>20,'LUK'=>1,'EFFECT'=>101,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_009.png'],
	['name'=>'妖艶な胸当て','HP'=>120,'ATK'=>14,'DEF'=>35,'SPD'=>14,'LUK'=>20,'EFFECT'=>103,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_009b.png'],
	['name'=>'鉄鋼鎧','HP'=>200,'ATK'=>5,'DEF'=>20,'SPD'=>10,'LUK'=>5,'EFFECT'=>109,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_009c.png'],
	['name'=>'スパイクアーマー','HP'=>155,'ATK'=>20,'DEF'=>45,'SPD'=>5,'LUK'=>1,'EFFECT'=>109,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_009d.png'],
	['name'=>'鋼鉄王','HP'=>200,'ATK'=>20,'DEF'=>50,'SPD'=>-15,'LUK'=>-15,'EFFECT'=>102,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_009e.png'],
	['name'=>'精霊王のローブ','HP'=>160,'ATK'=>15,'DEF'=>45,'SPD'=>13,'LUK'=>2,'EFFECT'=>114,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_010.png'],
	['name'=>'精霊神のローブ','HP'=>130,'ATK'=>18,'DEF'=>38,'SPD'=>13,'LUK'=>1,'EFFECT'=>114,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_010b.png'],
	['name'=>'精霊神の鎧','HP'=>195,'ATK'=>14,'DEF'=>30,'SPD'=>20,'LUK'=>0,'EFFECT'=>114,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_010c.png'],
	['name'=>'聖鎧','HP'=>190,'ATK'=>20,'DEF'=>29,'SPD'=>13,'LUK'=>1,'EFFECT'=>110,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_010d.png'],
	['name'=>'迅風鎧','HP'=>120,'ATK'=>17,'DEF'=>25,'SPD'=>20,'LUK'=>15,'EFFECT'=>108,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_010e.png'],
	['name'=>'ヘラクレスアーマー','HP'=>200,'ATK'=>20,'DEF'=>15,'SPD'=>20,'LUK'=>20,'EFFECT'=>111,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_011.png'],
	['name'=>'剛鎧･ユウヤミ','HP'=>115,'ATK'=>20,'DEF'=>30,'SPD'=>17,'LUK'=>5,'EFFECT'=>122,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_011b.png'],
	['name'=>'クリムゾンパンクスーツ','HP'=>135,'ATK'=>16,'DEF'=>35,'SPD'=>13,'LUK'=>20,'EFFECT'=>115,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_011c.png'],
	['name'=>'黒竜闘衣','HP'=>185,'ATK'=>20,'DEF'=>36,'SPD'=>-20,'LUK'=>-20,'EFFECT'=>123,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_017.png'],
	['name'=>'ゴーリムアーマー','HP'=>189,'ATK'=>15,'DEF'=>50,'SPD'=>10,'LUK'=>1,'EFFECT'=>119,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_017c.png'],
	['name'=>'ノワールアンヘルスーツ','HP'=>165,'ATK'=>20,'DEF'=>40,'SPD'=>5,'LUK'=>1,'EFFECT'=>118,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_017e.png'],
	['name'=>'赤竜闘衣','HP'=>196,'ATK'=>18,'DEF'=>45,'SPD'=>20,'LUK'=>-20,'EFFECT'=>115,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_021.png'],
	['name'=>'バスローブ','HP'=>55,'ATK'=>20,'DEF'=>10,'SPD'=>20,'LUK'=>20,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_022.png'],
	['name'=>'巫女服の下','HP'=>200,'ATK'=>20,'DEF'=>50,'SPD'=>20,'LUK'=>-20,'EFFECT'=>105,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_023.png'],



],
[
	['name'=>'アップルシャツ','HP'=>70,'ATK'=>10,'DEF'=>25,'SPD'=>5,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_001.png'],
	['name'=>'バタフライドレスレプリカ','HP'=>80,'ATK'=>12,'DEF'=>30,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_002.png'],
	['name'=>'プレートメイルR','HP'=>90,'ATK'=>8,'DEF'=>40,'SPD'=>4,'LUK'=>7,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_003.png'],
	['name'=>'ライトメイルA','HP'=>78,'ATK'=>5,'DEF'=>20,'SPD'=>17,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_004.png'],
	['name'=>'ライトメイルB','HP'=>89,'ATK'=>5,'DEF'=>25,'SPD'=>12,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_004b.png'],
	['name'=>'ライトメイルG','HP'=>105,'ATK'=>5,'DEF'=>30,'SPD'=>10,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_004c.png'],
	['name'=>'ナツの服','HP'=>110,'ATK'=>13,'DEF'=>22,'SPD'=>12,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_004d.png'],
	['name'=>'ルーシィの服','HP'=>80,'ATK'=>8,'DEF'=>32,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_004e.png'],
	['name'=>'ルークスの青い服改','HP'=>88,'ATK'=>15,'DEF'=>22,'SPD'=>12,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_004f.png'],
	['name'=>'アーヤの黒い服改','HP'=>75,'ATK'=>15,'DEF'=>20,'SPD'=>9,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_005.png'],
	['name'=>'地鋼の鎧','HP'=>91,'ATK'=>5,'DEF'=>45,'SPD'=>6,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_005b.png'],
	['name'=>'アイアンチェストプレート','HP'=>98,'ATK'=>11,'DEF'=>35,'SPD'=>10,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_005c.png'],
	['name'=>'獣鎧','HP'=>80,'ATK'=>14,'DEF'=>27,'SPD'=>20,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_005d.png'],
	['name'=>'クライゴーストスーツ','HP'=>65,'ATK'=>15,'DEF'=>28,'SPD'=>12,'LUK'=>-10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_005e.png'],
	['name'=>'妖精騎士のドレス','HP'=>100,'ATK'=>10,'DEF'=>38,'SPD'=>10,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_005f.png'],
	['name'=>'チェインメイル','HP'=>85,'ATK'=>13,'DEF'=>34,'SPD'=>13,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_006.png'],
	['name'=>'チェインローブ','HP'=>76,'ATK'=>10,'DEF'=>24,'SPD'=>20,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_006b.png'],
	['name'=>'パープルチェインメイル','HP'=>110,'ATK'=>15,'DEF'=>34,'SPD'=>5,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_006c.png'],
	['name'=>'ブラッドチェインメイル','HP'=>55,'ATK'=>20,'DEF'=>20,'SPD'=>10,'LUK'=>-2,'EFFECT'=>129,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_006d.png'],
	['name'=>'レトロメイル','HP'=>45,'ATK'=>13,'DEF'=>21,'SPD'=>14,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_006e.png'],
	['name'=>'コメットローブ','HP'=>120,'ATK'=>8,'DEF'=>48,'SPD'=>13,'LUK'=>-18,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_006f.png'],
	['name'=>'超鋼メイル','HP'=>180,'ATK'=>15,'DEF'=>45,'SPD'=>-20,'LUK'=>-20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_006g.png'],
	['name'=>'ゴスペルスーツ','HP'=>76,'ATK'=>13,'DEF'=>35,'SPD'=>20,'LUK'=>-20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_007.png'],




],
[
	['name'=>'ジャスティントスーツ','HP'=>85,'ATK'=>10,'DEF'=>25,'SPD'=>3,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_008d.png'],
	['name'=>'ファンタGウェア','HP'=>55,'ATK'=>6,'DEF'=>30,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_011d.png'],
	['name'=>'赤いローブ','HP'=>65,'ATK'=>10,'DEF'=>24,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_011e.png'],
	['name'=>'風のローブ','HP'=>63,'ATK'=>5,'DEF'=>34,'SPD'=>6,'LUK'=>4,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_012.png'],
	['name'=>'熱いローブ','HP'=>61,'ATK'=>7,'DEF'=>29,'SPD'=>7,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_012b.png'],
	['name'=>'緑羽織','HP'=>80,'ATK'=>15,'DEF'=>18,'SPD'=>14,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_012c.png'],
	['name'=>'ゴーストローブ','HP'=>69,'ATK'=>9,'DEF'=>33,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_012d.png'],
	['name'=>'デーモンローブ','HP'=>69,'ATK'=>16,'DEF'=>23,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_012e.png'],
	['name'=>'青鱗の鎧','HP'=>56,'ATK'=>10,'DEF'=>39,'SPD'=>9,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_013.png'],
	['name'=>'冒険者の胸当て','HP'=>76,'ATK'=>12,'DEF'=>45,'SPD'=>-10,'LUK'=>1,'EFFECT'=>128,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_013b.png'],
	['name'=>'緑葉の鎧','HP'=>56,'ATK'=>6,'DEF'=>40,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_013c.png'],
	['name'=>'ブラックアーマー','HP'=>56,'ATK'=>10,'DEF'=>38,'SPD'=>13,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_013d.png'],
	['name'=>'鎖帷子','HP'=>200,'ATK'=>20,'DEF'=>-50,'SPD'=>20,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_013e.png'],
	['name'=>'グリーンジャケット','HP'=>100,'ATK'=>6,'DEF'=>31,'SPD'=>7,'LUK'=>5,'EFFECT'=>128,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_014.png'],
	['name'=>'レッドジャケット','HP'=>54,'ATK'=>8,'DEF'=>30,'SPD'=>5,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_014b.png'],
	['name'=>'ホワイトジャケット','HP'=>43,'ATK'=>7,'DEF'=>28,'SPD'=>10,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_014c.png'],
	['name'=>'エメラルドスーツ','HP'=>81,'ATK'=>14,'DEF'=>15,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_014d.png'],
	['name'=>'ファイアスーツ','HP'=>64,'ATK'=>15,'DEF'=>13,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_014e.png'],
	['name'=>'灰の外套','HP'=>57,'ATK'=>13,'DEF'=>21,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_014f.png'],
	['name'=>'成金ジャケット','HP'=>100,'ATK'=>20,'DEF'=>13,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_015.png'],
	['name'=>'リプルアンヘルスーツ','HP'=>67,'ATK'=>11,'DEF'=>28,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_015b.png'],
	['name'=>'革のジャケット','HP'=>49,'ATK'=>5,'DEF'=>21,'SPD'=>15,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_015c.png'],
	['name'=>'青革のジャケット','HP'=>54,'ATK'=>5,'DEF'=>24,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_015d.png'],
	['name'=>'白衣','HP'=>43,'ATK'=>20,'DEF'=>4,'SPD'=>20,'LUK'=>15,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_015e.png'],
	['name'=>'ドラゴンメイル','HP'=>70,'ATK'=>13,'DEF'=>33,'SPD'=>12,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_016.png'],
	['name'=>'ドラゴンアーマー','HP'=>87,'ATK'=>15,'DEF'=>43,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_016b.png'],
	['name'=>'アイアンメイル','HP'=>60,'ATK'=>6,'DEF'=>29,'SPD'=>10,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_016c.png'],
	['name'=>'アイアンプレート','HP'=>73,'ATK'=>8,'DEF'=>21,'SPD'=>14,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_016d.png'],
	['name'=>'フルメタルアーマー','HP'=>106,'ATK'=>11,'DEF'=>41,'SPD'=>1,'LUK'=>-5,'EFFECT'=>128,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_016e.png'],
	['name'=>'鋼鉄の胴衣','HP'=>114,'ATK'=>20,'DEF'=>47,'SPD'=>-20,'LUK'=>-10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/armor/armor_017b.png'],






]];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
