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
		$_SESSION['uname']=$uname;
}

  //清除会话,退出登录
   public function logout(){
   	unset($_SESSION['uname']);
   	echo "退出成功";
   }
}

?>