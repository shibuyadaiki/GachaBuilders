<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [[
	['name'=>'リボン','HP'=>70,'ATK'=>0,'DEF'=>7,'SPD'=>0,'LUK'=>20,'EFFECT'=>112,'img'=>'GachaBuildersHost/GatyaResource/helm/16.gif'],
	['name'=>'白面','HP'=>100,'ATK'=>4,'DEF'=>14,'SPD'=>4,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/13.gif'],
	['name'=>'きつねのお面','HP'=>60,'ATK'=>0,'DEF'=>10,'SPD'=>10,'LUK'=>10,'EFFECT'=>111,'img'=>'GachaBuildersHost/GatyaResource/helm/14.gif'],
	['name'=>'三角帽子','HP'=>70,'ATK'=>15,'DEF'=>3,'SPD'=>0,'LUK'=>0,'EFFECT'=>115,'img'=>'GachaBuildersHost/GatyaResource/helm/15.gif'],
	['name'=>'兜','HP'=>100,'ATK'=>12,'DEF'=>12,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/21.gif']
  
  
],
[
  ['name'=>'竜騎士ヘルム','HP'=>80,'ATK'=>0,'DEF'=>10,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/8.png'],
  ['name'=>'ユニコーン','HP'=>70,'ATK'=>5,'DEF'=>8,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/9.png'],
	['name'=>'怖いお面','HP'=>30,'ATK'=>2,'DEF'=>5,'SPD'=>0,'LUK'=>0,'EFFECT'=>109,'img'=>'GachaBuildersHost/GatyaResource/helm/10.png'],
	['name'=>'うさぎの帽子','HP'=>50,'ATK'=>0,'DEF'=>4,'SPD'=>10,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/11.png'],
	['name'=>'ゴーグル','HP'=>50,'ATK'=>5,'DEF'=>5,'SPD'=>5,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/12.png'],
	['name'=>'バンダナ','HP'=>30,'ATK'=>5,'DEF'=>5,'SPD'=>5,'LUK'=>5,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/17.gif'],
	['name'=>'丸いヘルム','HP'=>60,'ATK'=>0,'DEF'=>12,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/18.gif'],
	['name'=>'えぼし','HP'=>50,'ATK'=>3,'DEF'=>2,'SPD'=>0,'LUK'=>10,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/19.gif'],
	['name'=>'御札','HP'=>60,'ATK'=>3,'DEF'=>10,'SPD'=>0,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/20.gif'],
	['name'=>'サンタ帽','HP'=>35,'ATK'=>3,'DEF'=>4,'SPD'=>2,'LUK'=>0,'EFFECT'=>120,'img'=>'GachaBuildersHost/GatyaResource/helm/helm_002.png'],
	['name'=>'微笑み','HP'=>30,'ATK'=>0,'DEF'=>7,'SPD'=>7,'LUK'=>7,'EFFECT'=>106,'img'=>'GachaBuildersHost/GatyaResource/helm/helm_005.png'],
	['name'=>'怒り','HP'=>30,'ATK'=>7,'DEF'=>0,'SPD'=>7,'LUK'=>7,'EFFECT'=>106,'img'=>'GachaBuildersHost/GatyaResource/helm/helm_006.png'],
	['name'=>'水泳キャップ(角付き)','HP'=>20,'ATK'=>0,'DEF'=>8,'SPD'=>5,'LUK'=>0,'EFFECT'=>116,'img'=>'GachaBuildersHost/GatyaResource/helm/helm_008.png'],

	['name'=>'ZUN帽','HP'=>40,'ATK'=>0,'DEF'=>5,'SPD'=>4,'LUK'=>0,'EFFECT'=>122,'img'=>'GachaBuildersHost/GatyaResource/helm/5.png']

],
[
	['name'=>'シンプルヘルム','HP'=>30,'ATK'=>0,'DEF'=>10,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/0.png'],
	['name'=>'よくあるヘルム','HP'=>40,'ATK'=>0,'DEF'=>8,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/1.png'],
	['name'=>'聖騎士ヘルム','HP'=>50,'ATK'=>0,'DEF'=>6,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/2.png'],
	['name'=>'カッター付きヘルム','HP'=>40,'ATK'=>2,'DEF'=>8,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/3.png'],
	['name'=>'尾ひれ付きヘルム','HP'=>45,'ATK'=>0,'DEF'=>8,'SPD'=>2,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/4.png'],
	['name'=>'暖かそうな帽子','HP'=>60,'ATK'=>0,'DEF'=>5,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/6.png'],
	['name'=>'ターバン','HP'=>80,'ATK'=>0,'DEF'=>0,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/7.png'],
	['name'=>'ギャリソンキャップ','HP'=>20,'ATK'=>0,'DEF'=>3,'SPD'=>3,'LUK'=>3,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/helm_001.png'],
	['name'=>'武者の兜','HP'=>30,'ATK'=>3,'DEF'=>5,'SPD'=>0,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/helm_003.png'],
	['name'=>'仮面ライダー','HP'=>5,'ATK'=>6,'DEF'=>7,'SPD'=>3,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/helm_004.png'],
	['name'=>'水泳キャップ','HP'=>20,'ATK'=>0,'DEF'=>8,'SPD'=>5,'LUK'=>0,'EFFECT'=>0,'img'=>'GachaBuildersHost/GatyaResource/helm/helm_007.png']
	

]];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
