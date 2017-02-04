<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [[
	['name'=>'太古の魔導書','HP'=>0,'ATK'=>80,'DEF'=>5,'SPD'=>-5,'LUK'=>1,'EFFECT'=>125,'img'=>'GachaBuildersHost/GatyaResource/weapon/book_003.png'],
	['name'=>'魔術王の書','HP'=>50,'ATK'=>100,'DEF'=>-5,'SPD'=>-10,'LUK'=>1,'EFFECT'=>124,'img'=>'GachaBuildersHost/GatyaResource/weapon/book_004.png'],
  
	['name'=>'歴戦の戦斧','HP'=>50,'ATK'=>75,'DEF'=>-5,'SPD'=>0,'LUK'=>1,'EFFECT'=>126,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe009.png'],
	['name'=>'オリハルコンアックス','HP'=>100,'ATK'=>25,'DEF'=>20,'SPD'=>0,'LUK'=>1,'EFFECT'=>112,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe009b.png'],
	['name'=>'天啓の戦斧','HP'=>50,'ATK'=>50,'DEF'=>10,'SPD'=>10,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe010.png'],
	['name'=>'恩讐の戦斧','HP'=>-50,'ATK'=>100,'DEF'=>-5,'SPD'=>2,'LUK'=>1,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe010b.png'],
	['name'=>'グレートアックス','HP'=>25,'ATK'=>75,'DEF'=>0,'SPD'=>2,'LUK'=>1,'EFFECT'=>110,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe011.png'],
	['name'=>'エクセレントアックス','HP'=>50,'ATK'=>100,'DEF'=>0,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe011b.png'],
	['name'=>'殴打の斧','HP'=>0,'ATK'=>100,'DEF'=>-20,'SPD'=>40,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe014.png'],
	['name'=>'ミスリル','HP'=>50,'ATK'=>25,'DEF'=>10,'SPD'=>20,'LUK'=>1,'EFFECT'=>124,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe014b.png'],
	['name'=>'ブレイズ','HP'=>30,'ATK'=>50,'DEF'=>10,'SPD'=>20,'LUK'=>1,'EFFECT'=>125,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe014c.png'],
  
	['name'=>'白銀の弓','HP'=>10,'ATK'=>100,'DEF'=>-20,'SPD'=>40,'LUK'=>10,'EFFECT'=>110,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow009.png'],
	['name'=>'神血の弓','HP'=>100,'ATK'=>75,'DEF'=>-10,'SPD'=>10,'LUK'=>1,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow009b.png'],
	['name'=>'ドレッドボウ','HP'=>20,'ATK'=>100,'DEF'=>-10,'SPD'=>30,'LUK'=>-10,'EFFECT'=>112,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow010.png'],
	['name'=>'エルフ神の絶弓','HP'=>5,'ATK'=>100,'DEF'=>20,'SPD'=>40,'LUK'=>-20,'EFFECT'=>122,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow010b.png'],
	['name'=>'忌憚弓','HP'=>0,'ATK'=>75,'DEF'=>15,'SPD'=>10,'LUK'=>1,'EFFECT'=>127,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow011.png'],
	['name'=>'禁忌大弓','HP'=>0,'ATK'=>100,'DEF'=>0,'SPD'=>30,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow011b.png'],
  
	['name'=>'マグロ、ご期待ください。','HP'=>100,'ATK'=>100,'DEF'=>5,'SPD'=>40,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_other_008.png'],
	['name'=>'覇王のまごのて','HP'=>100,'ATK'=>95,'DEF'=>10,'SPD'=>2,'LUK'=>1,'EFFECT'=>118,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_other_002.png'],
  
	['name'=>'魔槍シャクティ','HP'=>10,'ATK'=>100,'DEF'=>5,'SPD'=>36,'LUK'=>15,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear016.png'],
	['name'=>'オリハルコンスパイク','HP'=>100,'ATK'=>100,'DEF'=>0,'SPD'=>-15,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear017.png'],
	['name'=>'両刃の呪槍','HP'=>0,'ATK'=>70,'DEF'=>-20,'SPD'=>40,'LUK'=>-20,'EFFECT'=>127,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear017b.png'],
	['name'=>'エルフィン','HP'=>48,'ATK'=>90,'DEF'=>14,'SPD'=>28,'LUK'=>5,'EFFECT'=>111,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear018.png'],
	['name'=>'二の打ちいらず','HP'=>2,'ATK'=>100,'DEF'=>-20,'SPD'=>40,'LUK'=>-20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear019.png'],
	['name'=>'ヘルブレイズハルバード','HP'=>69,'ATK'=>70,'DEF'=>10,'SPD'=>16,'LUK'=>5,'EFFECT'=>125,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear019b.png'],
  
	['name'=>'トールライトニング','HP'=>78,'ATK'=>75,'DEF'=>10,'SPD'=>22,'LUK'=>9,'EFFECT'=>105,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff013.png'],
	['name'=>'大翼の杖','HP'=>88,'ATK'=>60,'DEF'=>16,'SPD'=>10,'LUK'=>20,'EFFECT'=>121,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff016.png'],
  
	['name'=>'聖剣エクスカリバー','HP'=>100,'ATK'=>100,'DEF'=>18,'SPD'=>34,'LUK'=>15,'EFFECT'=>108,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_sword023b.png'],
	['name'=>'妖刀モンザエモン','HP'=>13,'ATK'=>100,'DEF'=>0,'SPD'=>38,'LUK'=>-20,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_sword021.png']




],
[
	['name'=>'中級魔導書','HP'=>20,'ATK'=>40,'DEF'=>4,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/book_002b.png'],
	['name'=>'古い魔導書','HP'=>20,'ATK'=>75,'DEF'=>2,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/book_002c.png'],
	['name'=>'鋼の斧','HP'=>30,'ATK'=>50,'DEF'=>5,'SPD'=>10,'LUK'=>7,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe005.png'],
	['name'=>'フルメタルアックス','HP'=>30,'ATK'=>75,'DEF'=>10,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe005b.png'],
	['name'=>'鋼鉄の斧','HP'=>40,'ATK'=>65,'DEF'=>10,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe006.png'],
	['name'=>'鋼鉄の手斧','HP'=>30,'ATK'=>55,'DEF'=>5,'SPD'=>20,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe006b.png'],
	['name'=>'氷鋼の斧','HP'=>20,'ATK'=>60,'DEF'=>4,'SPD'=>10,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe006c.png'],
	['name'=>'エリートアックス','HP'=>40,'ATK'=>90,'DEF'=>12,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe007.png'],
	['name'=>'優秀な手斧','HP'=>35,'ATK'=>65,'DEF'=>2,'SPD'=>26,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe007b.png'],
	['name'=>'優秀な消化斧','HP'=>50,'ATK'=>50,'DEF'=>10,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe008.png'],
	['name'=>'地鋼の斧','HP'=>70,'ATK'=>50,'DEF'=>10,'SPD'=>6,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe008b.png'],
	['name'=>'炎鋼の斧','HP'=>20,'ATK'=>85,'DEF'=>3,'SPD'=>10,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe008c.png'],
	['name'=>'吹雪斧','HP'=>30,'ATK'=>70,'DEF'=>1,'SPD'=>30,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe008d.png'],
	['name'=>'猛毒斧','HP'=>10,'ATK'=>50,'DEF'=>5,'SPD'=>12,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe008e.png'],
	['name'=>'ハルバード','HP'=>38,'ATK'=>95,'DEF'=>10,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe012.png'],
	['name'=>'ファイアハルバード','HP'=>28,'ATK'=>100,'DEF'=>4,'SPD'=>16,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe012b.png'],
	['name'=>'コールドハルバード','HP'=>25,'ATK'=>100,'DEF'=>1,'SPD'=>32,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe012c.png'],
	['name'=>'両刃の戦斧','HP'=>42,'ATK'=>75,'DEF'=>14,'SPD'=>20,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe013.png'],
	['name'=>'両刃の斧','HP'=>32,'ATK'=>50,'DEF'=>14,'SPD'=>40,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe013b.png'],
	['name'=>'吸血の戦斧','HP'=>42,'ATK'=>75,'DEF'=>2,'SPD'=>28,'LUK'=>1,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe013c.png'],
	['name'=>'グレートボウ','HP'=>20,'ATK'=>50,'DEF'=>1,'SPD'=>40,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow008.png'],
	['name'=>'ブレイズボウ','HP'=>20,'ATK'=>65,'DEF'=>2,'SPD'=>32,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow008b.png'],
	['name'=>'黄金の弓','HP'=>40,'ATK'=>35,'DEF'=>2,'SPD'=>40,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow012.png'],
	['name'=>'氷獄弓','HP'=>30,'ATK'=>70,'DEF'=>1,'SPD'=>40,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow012b.png'],
	['name'=>'クロスボウ','HP'=>25,'ATK'=>45,'DEF'=>2,'SPD'=>32,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow013.png'],
	['name'=>'フレイムクロスボウ','HP'=>27,'ATK'=>65,'DEF'=>0,'SPD'=>28,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow013b.png'],
	['name'=>'グレートクロスボウ','HP'=>30,'ATK'=>90,'DEF'=>0,'SPD'=>24,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow014.png'],
	['name'=>'ブレイズクロスボウ','HP'=>20,'ATK'=>80,'DEF'=>0,'SPD'=>20,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow014b.png'],
	['name'=>'達人のクロスボウ','HP'=>52,'ATK'=>75,'DEF'=>7,'SPD'=>20,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow015.png'],
	['name'=>'エルフクロスボウ','HP'=>40,'ATK'=>60,'DEF'=>8,'SPD'=>24,'LUK'=>4,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow015b.png'],
	['name'=>'リトルバリスタ','HP'=>23,'ATK'=>90,'DEF'=>10,'SPD'=>14,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow016.png'],
	['name'=>'城塞設置式バリスタ','HP'=>40,'ATK'=>100,'DEF'=>18,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow016b.png'],
	['name'=>'スナイプボウ','HP'=>23,'ATK'=>80,'DEF'=>1,'SPD'=>16,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow017.png'],
	['name'=>'エグゾディアの右指','HP'=>1,'ATK'=>1,'DEF'=>1,'SPD'=>1,'LUK'=>11,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/er.png.png'],
	['name'=>'エグゾディアの右腕','HP'=>1,'ATK'=>1,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>810,'img'=>'GachaBuildersHost/GatyaResource/weapon/er.png.png'],
	['name'=>'チタンスピア','HP'=>25,'ATK'=>65,'DEF'=>5,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear010.png'],
	['name'=>'ゴリアテ','HP'=>54,'ATK'=>60,'DEF'=>7,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear010b.png'],
	['name'=>'ゴーレムスピア','HP'=>34,'ATK'=>55,'DEF'=>15,'SPD'=>16,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear011.png'],
	['name'=>'ミスリルスピア','HP'=>44,'ATK'=>60,'DEF'=>5,'SPD'=>20,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear011b.png'],
	['name'=>'アイアンスパイク','HP'=>28,'ATK'=>50,'DEF'=>5,'SPD'=>24,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear012.png'],
	['name'=>'氷像の槍','HP'=>34,'ATK'=>65,'DEF'=>2,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear012b.png'],
	['name'=>'炎上槍','HP'=>34,'ATK'=>70,'DEF'=>8,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear012c.png'],
	['name'=>'獄炎槍','HP'=>44,'ATK'=>80,'DEF'=>4,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear013.png'],
	['name'=>'氷獄槍','HP'=>44,'ATK'=>65,'DEF'=>3,'SPD'=>16,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear013b.png'],
	['name'=>'絶毒槍','HP'=>36,'ATK'=>55,'DEF'=>2,'SPD'=>10,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear013c.png'],
	['name'=>'アースクエイクスピア','HP'=>54,'ATK'=>50,'DEF'=>10,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear013d.png'],
	['name'=>'ブレイクアイス','HP'=>23,'ATK'=>80,'DEF'=>2,'SPD'=>16,'LUK'=>4,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear014.png'],
	['name'=>'ブレイズデストロイ','HP'=>23,'ATK'=>90,'DEF'=>1,'SPD'=>12,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear014b.png'],
	['name'=>'ポイズンバーン','HP'=>37,'ATK'=>65,'DEF'=>1,'SPD'=>14,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear014c.png'],
	['name'=>'アースウェーブ','HP'=>78,'ATK'=>25,'DEF'=>20,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear014d.png'],
	['name'=>'星霜の書','HP'=>40,'ATK'=>100,'DEF'=>5,'SPD'=>20,'LUK'=>17,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear015.png'],
	['name'=>'薙刀','HP'=>35,'ATK'=>60,'DEF'=>5,'SPD'=>36,'LUK'=>4,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear020.png'],
	['name'=>'パルチザン','HP'=>55,'ATK'=>65,'DEF'=>10,'SPD'=>10,'LUK'=>4,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear020c.png'],
	['name'=>'ブレイズロッド','HP'=>36,'ATK'=>60,'DEF'=>4,'SPD'=>14,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff011b.png'],
	['name'=>'フローズンロッド','HP'=>44,'ATK'=>60,'DEF'=>2,'SPD'=>32,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff011c.png']



],
[
	['name'=>'見習い魔導書','HP'=>15,'ATK'=>25,'DEF'=>5,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/book_001.png'],
	['name'=>'初級魔導書','HP'=>20,'ATK'=>30,'DEF'=>4,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/book_002.png'],
	['name'=>'鉄の斧','HP'=>15,'ATK'=>10,'DEF'=>4,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe001.png'],
	['name'=>'鉞','HP'=>13,'ATK'=>35,'DEF'=>4,'SPD'=>6,'LUK'=>4,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe002.png'],
	['name'=>'炎の鉞','HP'=>11,'ATK'=>40,'DEF'=>5,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe002b.png'],
	['name'=>'氷の鉞','HP'=>10,'ATK'=>35,'DEF'=>2,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe002c.png'],
	['name'=>'毒の斧','HP'=>15,'ATK'=>25,'DEF'=>3,'SPD'=>4,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe002d.png'],
	['name'=>'大地の鉞','HP'=>23,'ATK'=>20,'DEF'=>10,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe002e.png'],
	['name'=>'手斧','HP'=>10,'ATK'=>10,'DEF'=>1,'SPD'=>24,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe003.png'],
	['name'=>'ブラッドアクス','HP'=>8,'ATK'=>35,'DEF'=>5,'SPD'=>10,'LUK'=>1,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe003b.png'],
	['name'=>'ククリみたいな手斧','HP'=>13,'ATK'=>30,'DEF'=>0,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe004.png'],
	['name'=>'新緑の手斧','HP'=>15,'ATK'=>40,'DEF'=>8,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe004b.png'],
	['name'=>'トンカチ','HP'=>40,'ATK'=>100,'DEF'=>-20,'SPD'=>40,'LUK'=>-20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe015.png'],
	['name'=>'赤色のトンカチ','HP'=>-100,'ATK'=>100,'DEF'=>0,'SPD'=>40,'LUK'=>-20,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe015b.png'],
	['name'=>'ネイルハンマー','HP'=>10,'ATK'=>50,'DEF'=>0,'SPD'=>20,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe016.png'],
	['name'=>'つるはし','HP'=>20,'ATK'=>60,'DEF'=>1,'SPD'=>8,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe016b.png'],
	['name'=>'もはやハンマー','HP'=>40,'ATK'=>20,'DEF'=>5,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe017.png'],
	['name'=>'むしろハンマー','HP'=>40,'ATK'=>30,'DEF'=>3,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe017b.png'],
	['name'=>'装飾用の斧','HP'=>5,'ATK'=>5,'DEF'=>2,'SPD'=>40,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_axe018.png'],
	['name'=>'木の弓','HP'=>12,'ATK'=>20,'DEF'=>1,'SPD'=>20,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow001.png'],
	['name'=>'白樺の弓','HP'=>10,'ATK'=>25,'DEF'=>2,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow001b.png'],
	['name'=>'木の大弓','HP'=>14,'ATK'=>40,'DEF'=>3,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow002.png'],
	['name'=>'白樺の大弓','HP'=>11,'ATK'=>35,'DEF'=>4,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow002b.png'],
	['name'=>'新緑の弓','HP'=>10,'ATK'=>30,'DEF'=>4,'SPD'=>22,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow003.png'],
	['name'=>'猛炎の弓','HP'=>10,'ATK'=>50,'DEF'=>1,'SPD'=>28,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow003b.png'],
	['name'=>'ラピッドボウ','HP'=>17,'ATK'=>15,'DEF'=>5,'SPD'=>38,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow004.png'],
	['name'=>'ナリキンボウ','HP'=>10,'ATK'=>25,'DEF'=>2,'SPD'=>40,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow004b.png'],
	['name'=>'狩人の弓','HP'=>13,'ATK'=>40,'DEF'=>4,'SPD'=>24,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow005.png'],
	['name'=>'血吸いの弓','HP'=>6,'ATK'=>30,'DEF'=>1,'SPD'=>20,'LUK'=>-5,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow005b.png'],
	['name'=>'エメラルドボウ','HP'=>14,'ATK'=>50,'DEF'=>7,'SPD'=>28,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow006.png'],
	['name'=>'サファイアボウ','HP'=>14,'ATK'=>70,'DEF'=>7,'SPD'=>12,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow006b.png'],
	['name'=>'ルビーボウ','HP'=>14,'ATK'=>50,'DEF'=>14,'SPD'=>12,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow007.png'],
	['name'=>'琥珀の弓','HP'=>28,'ATK'=>50,'DEF'=>7,'SPD'=>12,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_bow007b.png'],
	['name'=>'十手','HP'=>20,'ATK'=>25,'DEF'=>14,'SPD'=>24,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_other_001.png'],
	['name'=>'鎖鎌','HP'=>15,'ATK'=>35,'DEF'=>9,'SPD'=>16,'LUK'=>6,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_other_004.png'],
	['name'=>'パチンコ','HP'=>13,'ATK'=>15,'DEF'=>1,'SPD'=>30,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_other_005.png'],
	['name'=>'ピコハン','HP'=>10,'ATK'=>5,'DEF'=>1,'SPD'=>40,'LUK'=>14,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_other_006.png'],
	['name'=>'チェーンソー','HP'=>23,'ATK'=>90,'DEF'=>1,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_other_009.png'],
	['name'=>'安物の槍','HP'=>10,'ATK'=>25,'DEF'=>3,'SPD'=>16,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear001.png'],
	['name'=>'鉄の槍','HP'=>12,'ATK'=>35,'DEF'=>4,'SPD'=>16,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear002.png'],
	['name'=>'グレートスピア','HP'=>14,'ATK'=>50,'DEF'=>2,'SPD'=>18,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear003.png'],
	['name'=>'トライデント','HP'=>10,'ATK'=>45,'DEF'=>9,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear004.png'],
	['name'=>'フローズントライデント','HP'=>12,'ATK'=>60,'DEF'=>6,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear004b.png'],
	['name'=>'大鎌','HP'=>14,'ATK'=>55,'DEF'=>2,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear005.png'],
	['name'=>'死神の大鎌','HP'=>19,'ATK'=>65,'DEF'=>1,'SPD'=>6,'LUK'=>1,'EFFECT'=>113,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear005b.png'],
	['name'=>'スパイクスピア','HP'=>13,'ATK'=>70,'DEF'=>2,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear006.png'],
	['name'=>'バーンスパイク','HP'=>13,'ATK'=>85,'DEF'=>1,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear006b.png'],
	['name'=>'コールドスパイク','HP'=>10,'ATK'=>75,'DEF'=>1,'SPD'=>12,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear006c.png'],
	['name'=>'ポイズンスパイク','HP'=>13,'ATK'=>50,'DEF'=>2,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear006d.png'],
	['name'=>'アーススパイク','HP'=>26,'ATK'=>50,'DEF'=>7,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear006e.png'],
	['name'=>'達人の槍','HP'=>23,'ATK'=>75,'DEF'=>6,'SPD'=>12,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear007.png'],
	['name'=>'達人の大槍','HP'=>24,'ATK'=>80,'DEF'=>7,'SPD'=>14,'LUK'=>7,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear007b.png'],
	['name'=>'ブレードスピア','HP'=>12,'ATK'=>65,'DEF'=>2,'SPD'=>16,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear008.png'],
	['name'=>'コールドブレードスピア','HP'=>10,'ATK'=>70,'DEF'=>2,'SPD'=>16,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear008b.png'],
	['name'=>'シャープスピア','HP'=>8,'ATK'=>55,'DEF'=>2,'SPD'=>24,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear009.png'],
	['name'=>'コールドシャープスピア','HP'=>6,'ATK'=>60,'DEF'=>0,'SPD'=>28,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear009b.png'],
	['name'=>'伝説の竹槍','HP'=>10,'ATK'=>10,'DEF'=>2,'SPD'=>40,'LUK'=>15,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_spear020b.png'],
	['name'=>'木の枝','HP'=>10,'ATK'=>5,'DEF'=>2,'SPD'=>6,'LUK'=>4,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001.png'],
	['name'=>'木の棒','HP'=>10,'ATK'=>10,'DEF'=>3,'SPD'=>8,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001b.png'],
	['name'=>'木の杖','HP'=>15,'ATK'=>15,'DEF'=>4,'SPD'=>10,'LUK'=>6,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001.png'],
	['name'=>'鉄製の杖','HP'=>18,'ATK'=>25,'DEF'=>7,'SPD'=>10,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001b.png'],
	['name'=>'僧侶の杖','HP'=>20,'ATK'=>20,'DEF'=>10,'SPD'=>4,'LUK'=>14,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001.png'],
	['name'=>'アイアンスタッフ','HP'=>12,'ATK'=>20,'DEF'=>5,'SPD'=>6,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001b.png'],
	['name'=>'賢者の杖','HP'=>22,'ATK'=>60,'DEF'=>10,'SPD'=>4,'LUK'=>15,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001.png'],
	['name'=>'悪魔の杖','HP'=>13,'ATK'=>65,'DEF'=>13,'SPD'=>2,'LUK'=>-13,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001b.png'],
	['name'=>'聖者の杖','HP'=>44,'ATK'=>20,'DEF'=>20,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/weapon/we_staff001.png']





]];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
