<?php

class FatherControl{
	  public function display($page_name){
	  	echo $page_name;

	  }
	  public function assgin(){

	  }

}

class GoodsControl extends FatherControl{
	public function index(){
		$this->display('index');
	}


}
$goods = new GoodsControl;
$goods->index();


?>