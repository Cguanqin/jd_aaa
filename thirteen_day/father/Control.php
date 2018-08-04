<?php

class Control{

   private static $control;
   private static $action;

	static function run(){
 /**
  * 在static方法中，变量格式  self::$变量名 
  */

   //接收控制器参数
		self::$control = $control =  isset($_REQUEST['control'])?$_REQUEST['control']:'goods';
   //接收行为参数
		self::$action= $action= isset($_REQUEST['action'])?$_REQUEST['action']:'index';

   //引入文件
		include_once "control/$control.php";

		$control_obj = new $control();
		$control_obj->$action();
	}


/**
 * 显示页面
 */
	public function display(){
		include_once "view/".self::$control."/".self::$action.".html";

	}

	public function model($mm_name){
		$model_name  =  $mm_name."Model";
		include "model/$model_name.php";  //引入文件 ，文件继承Modle，即可以操作数据库
		return new $model_name();         //创建一个对象

	}
}

?>