<?php

/**
 * 
 */
class Jdsx extends Control{

	public function home(){
		include_once 'view/Jdsx/home.html';
		$this->display();
	}

	public function reg(){
		$this->display();
	}

	public function getGoods(){
		echo json_encode($this->model('goods')->select());

	}

	public function info(){
		$id = $_GET['id'];
		//查询全部记录

		$g_model = $this->model('Goods');


		// 查询全部商品的记录
		$list= $g_model->select();
		$this->assign('goods_list',$list);


		//查询一条记录
		$info = $g_model->find("id=$id");
		$info_json =  json_encode($info);
		// print_r($info_json);
		// echo $info_json;
		$this->assign('info',$info);

		$this->display();
	}

	public function Jdsx_info(){

		// $this->display();
		include_once 'view/Jdsx/jdsx_info.html';
	}

}

?>


