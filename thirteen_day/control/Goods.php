<?php


class Goods extends Control{

	public function index(){
		// echo "我是index，我进来了";

       //调用display方法，返回对应的html页面
		$this->display();

	}

	public function add(){
		$this->display();

	}

	public function save(){
	$J_thumb='';
	if ($_FILES['J_thumb']['tmp_name']) {
		$J_thumb = 'public/uploads/'.time().'jpg';
		copy($_FILES['J_thumb']['tmp_name'], $J_thumb);
}

		// print_r($_POST);

		//保存商品
		$this->model('Goods')->insert([
			'J_name'=>$_POST['J_name'],
			'J_price'=>$_POST['J_price'],
			'J_time'=>time(),
			'J_thumb'=>$J_thumb,
			'J_content'=>$_POST['J_content']
		]);
		header("http://localhost/web/eleven_day?action=index");
	}
	public function getList(){
		echo json_encode($this->model('goods')->select());
		// $this->model('goods')->select();
	}
}

?>