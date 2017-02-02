<?php

function getGacha($data){

	$rare = rand(0,1000);
	if($rare < 100){
		$rare = 0;
	}else if($rare < 350){
		$rare = 1;
	}else{
		$rare = 2;
	}

	$count = count($data[$rare]);
	$id = rand(0,$count-1);

	$get = $data[$rare][$id];

	$get += array('RARE'=>$rare);

	//----------------------------
	//JSON形式に変換
	//----------------------------
	return json_encode($get);
};

?>
