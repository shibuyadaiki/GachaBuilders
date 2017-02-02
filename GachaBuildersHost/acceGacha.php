<?php

require('Gacha.php');
//----------------------------
//データ準備
//----------------------------
$data =[ [
	['name'=>'ボロい剣','HP'=>1000,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'錆びた剣','HP'=>1000,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
],
[
	['name'=>'regen','HP'=>100,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>3,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'mirror','HP'=>100,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>2,'img'=>'GachaBuildersHost/weaponimg/2.png'],
],
[
	['name'=>'armpen','HP'=>10,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>1,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'錆びた剣','HP'=>10,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
]];

$json = getGacha($data);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
