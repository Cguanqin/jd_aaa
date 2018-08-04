<?
/**
 * 用户子类控制器
 */
class User extends Control
{
	//注册
	public function register(){

		$this->display();
	}

	public function doReg(){
		$uname = $_POST['uname'];
		$this->model('user')->insert(['uname'=>$uname]);
	}
}
?>