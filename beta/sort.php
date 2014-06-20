<?php

$param = $_POST;

var_dump($param);

if ($param['submit'] == "次のバスを見る") {
	$action = 'next';
}else{
	$action = 'search';
}


$screen_function_name = "screen_".$action;
if (!function_exists($screen_function_name)) {
    exit();
}

call_user_func($screen_function_name, $param);
require_once($action.".php");

function screen_next() {
    return true;
}
function screen_search() {
    return true;
}


?>