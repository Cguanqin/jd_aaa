<?php
//权限管理
class Auth extends Control{
	
 public function __construct(){
		parent::__construct();
		if (empty($_SESSION['uname'])) {

			message($this,url("user","register"),'你还没有登录！');
			exit();

		}

	} 
}
?>