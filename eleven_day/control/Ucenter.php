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
		$this->display();
	}

	public function saveAdres(){
		$area  = implode('|',json_decode($_POST['area'],true));
		$this->model('address')->insert([
			'receive_people'=>$_POST['receive_people'],
			'area'=>$area
		]);

		echo json_encode(['status'=>1,'$area']);
	}

	public function getAdres(){
		$ad_list = $this->model('address')->select();
		echo json_encode($ad_list);
	}
}
?>