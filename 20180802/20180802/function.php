<?php

function message($obj, $url, $msg)
{
	$obj->assign('url', $url);
	$obj->assign('msg', $msg);
	$obj->display('message.html');
}

function url($control, $action)
{
	return "http://localhost/20180802/index.php?control=$control&action=$action";
}

?>