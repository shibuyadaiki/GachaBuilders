<?php
//----------------------------
//データ準備
//----------------------------
$data = [
	['name'=>'ボロい剣','HP'=>0,'ATK'=>1,'DEF'=>0,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/1.png'],
	['name'=>'錆びた剣','HP'=>0,'ATK'=>2,'DEF'=>1,'SPD'=>1,'LUK'=>1,'EFFECT'=>0,'img'=>'GachaBuildersHost/weaponimg/2.png'],
];

$count = count($data);
$id = rand(0,$count-1);

//----------------------------
//JSON形式に変換
//----------------------------
$json = json_encode($data[$id]);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;
?>
