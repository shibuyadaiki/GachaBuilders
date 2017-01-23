<?php

require_one('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data = [
	['name'=>'ボロい剣','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'錆びた剣','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
],
[
	['name'=>'ボロい剣','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'錆びた剣','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
],
[
	['name'=>'ボロい剣','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'錆びた剣','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
