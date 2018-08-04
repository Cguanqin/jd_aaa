<?php


class Ucenter extends Auth{

	public function order(){
		echo $_SESSION['uname'];
		$this->display();
	}

	public function profile(){
		echo $_SESSION['uname'];
		$this->display();
	}
}
?>