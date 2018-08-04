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
		// $upwd = $_POST['upwd'];
		$this->model('user')->insert(['uname'=>$uname]);
		$_SESSION['uname']=$uname;

		message($this,url('Ucenter','profile'),'登录成功！');
}

  //清除会话,退出登录
   public function logout(){
   	unset($_SESSION['uname']);
   	message($this,url('User','register'),'退出成功!');
   }
}

?>