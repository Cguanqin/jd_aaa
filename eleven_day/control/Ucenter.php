<?php


class Ucenter extends Auth{

	public function order(){

		$this->display();
	}

	public function profile(){
		// echo $_SESSION['uname'];
		$this->display();
	}
	public function address(){

		$this->display('',false);
	}
}
?>