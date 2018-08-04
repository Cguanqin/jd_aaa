<?php

/**
 * 
 */
class Jdsx extends Control{

	public function home(){
		$this->display();
	}

	public function reg(){
		$this->display();
	}

	public function getGoods(){
		echo json_encode($this->model('goods')->select());
	}

}

?>


