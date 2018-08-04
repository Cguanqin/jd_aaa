<?php
//权限管理
class Auth extends Control{
	
	public function __construct(){
		if (empty($_SESSION['uname'])) {
			echo '你还没有登录！';exit();
		}
		parent::__construct();
		
	} 
}

?>