<?php

function getGacha($data){

	$rare = rand(0,1000);
	if($rare < 750){
		$rare = 0;
	}else if($rare < 900){
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
