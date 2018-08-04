<?php
/**
 * 页面跳转
 *控制器的对象
 *跳转的地址
 *提醒信息
 */
 function message($dx,$url,$msg){
	   $dx->assign('url',$url);
	   $dx->assign('msg',$msg);  	//把字符串存进msg变量中
	   $dx->display('message.html');
	}

/**
 * 
 */
function url($control,$action){
		// return 'http://localhost/web/eleven_day/?control='.$control.'&action='.$action;
	return 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?control=$control&action=$action";
	}
	   ?>
