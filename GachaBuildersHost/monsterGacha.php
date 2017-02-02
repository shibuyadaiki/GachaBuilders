<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [[
	['name'=>'鶏王','HP'=>15,'ATK'=>20,'DEF'=>15,'SPD'=>20,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/tikinkisi.png'],
	['name'=>'メフィスト','HP'=>15,'ATK'=>17,'DEF'=>15,'SPD'=>13,'LUK'=>7,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/akuma.png'],
	['name'=>'アルドゥイン','HP'=>20,'ATK'=>15,'DEF'=>20,'SPD'=>10,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/poisondragon.png'],





],
[
	['name'=>'コック娘','HP'=>10,'ATK'=>8,'DEF'=>10,'SPD'=>13,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/cockgirl.png'],
	['name'=>'ダークエルフ','HP'=>8,'ATK'=>14,'DEF'=>8,'SPD'=>18,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/darkodoriko.png'],
	['name'=>'ダークヴァルキリー','HP'=>10,'ATK'=>12,'DEF'=>10,'SPD'=>10,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/darkvalkyr.png'],
	['name'=>'ウンディーネ','HP'=>14,'ATK'=>8,'DEF'=>13,'SPD'=>8,'LUK'=>12,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/mizumegami.png'],
	['name'=>'ガラハッド','HP'=>13,'ATK'=>10,'DEF'=>20,'SPD'=>5,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/taityoukisi.png'],
	['name'=>'ボールス','HP'=>20,'ATK'=>5,'DEF'=>12,'SPD'=>3,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/dekaheisiKen.png'],
	['name'=>'オジギPLS','HP'=>5,'ATK'=>18,'DEF'=>5,'SPD'=>10,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/yamimadousi.png'],
	['name'=>'アカトシュ','HP'=>14,'ATK'=>12,'DEF'=>7,'SPD'=>10,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/dragon.png'],
	['name'=>'サライア','HP'=>6,'ATK'=>15,'DEF'=>10,'SPD'=>10,'LUK'=>4,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/eri-tokisi.png'],
	['name'=>'近松門左衛門','HP'=>6,'ATK'=>18,'DEF'=>2,'SPD'=>20,'LUK'=>8,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/kengou.png'],




],
[
	['name'=>'新米弓兵','HP'=>5,'ATK'=>6,'DEF'=>3,'SPD'=>8,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/artyar.png'],
	['name'=>'勇敢な男の子','HP'=>3,'ATK'=>3,'DEF'=>3,'SPD'=>8,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/boy.png'],
	['name'=>'中級近衛兵','HP'=>8,'ATK'=>7,'DEF'=>7,'SPD'=>3,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/dekaheisi.png'],
	['name'=>'森のエルフ','HP'=>5,'ATK'=>6,'DEF'=>3,'SPD'=>8,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/elf.png'],
	['name'=>'炎の精霊','HP'=>4,'ATK'=>10,'DEF'=>3,'SPD'=>2,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/fireseirei.png'],
	['name'=>'世話焼きな女の子','HP'=>2,'ATK'=>2,'DEF'=>1,'SPD'=>10,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/girl.png'],
	['name'=>'下っ端傭兵','HP'=>7,'ATK'=>5,'DEF'=>5,'SPD'=>5,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/heisi.png'],
	['name'=>'煙の精霊','HP'=>10,'ATK'=>2,'DEF'=>5,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/isiseirei.png'],
	['name'=>'老いぼれ魔導士','HP'=>2,'ATK'=>20,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/madousi.png'],
	['name'=>'マグマビースト','HP'=>4,'ATK'=>7,'DEF'=>2,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/magusurime.png'],
	['name'=>'地方の女神','HP'=>5,'ATK'=>2,'DEF'=>3,'SPD'=>2,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/megami.png'],
	['name'=>'場末の踊り子','HP'=>7,'ATK'=>2,'DEF'=>1,'SPD'=>10,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/odoriko.png'],
	['name'=>'女僧侶','HP'=>2,'ATK'=>0,'DEF'=>5,'SPD'=>2,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/onnnasouryo.png'],
	['name'=>'斧兵士','HP'=>5,'ATK'=>7,'DEF'=>5,'SPD'=>3,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/onoheisi.png'],
	['name'=>'浪人','HP'=>4,'ATK'=>8,'DEF'=>2,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/samurai.png'],
	['name'=>'敬虔なシスター','HP'=>1,'ATK'=>0,'DEF'=>2,'SPD'=>1,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/sister.png'],
	['name'=>'女盗賊','HP'=>3,'ATK'=>4,'DEF'=>2,'SPD'=>8,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/soukenboy.png'],
	['name'=>'男盗賊','HP'=>4,'ATK'=>8,'DEF'=>2,'SPD'=>7,'LUK'=>2,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/soukengirl.png'],
	['name'=>'男僧侶','HP'=>3,'ATK'=>0,'DEF'=>7,'SPD'=>3,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/souryo.png'],
	['name'=>'サンドデーモン','HP'=>10,'ATK'=>5,'DEF'=>2,'SPD'=>8,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/sunaakuma.png'],
	['name'=>'ポイズンビースト','HP'=>4,'ATK'=>5,'DEF'=>3,'SPD'=>2,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/surime.png'],
	['name'=>'戦うシスター','HP'=>4,'ATK'=>5,'DEF'=>4,'SPD'=>7,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/tatakausister.png'],
	['name'=>'鶏','HP'=>1,'ATK'=>1,'DEF'=>0,'SPD'=>20,'LUK'=>20,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/tikin.png'],
	['name'=>'男舞踏家','HP'=>10,'ATK'=>1,'DEF'=>1,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/touzoku.png'],
	['name'=>'女舞踏家','HP'=>8,'ATK'=>1,'DEF'=>1,'SPD'=>7,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/touzokugirl.png'],
	['name'=>'ヴァルキリー','HP'=>5,'ATK'=>5,'DEF'=>4,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/valkyr.png'],
	['name'=>'やんちゃな男の子','HP'=>1,'ATK'=>15,'DEF'=>0,'SPD'=>5,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/monster/yantyaboy.png'],






]];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
