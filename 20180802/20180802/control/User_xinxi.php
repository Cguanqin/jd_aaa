<?php 
class  User_xinxi  extends Controler
{
	 public function index()
	 {
	 	 $this->display();
	 }
	 public function  jieshou(){
        $Ars_name = $_POST['Ars_name'];
        $Ars_addres_name = $_POST['Ars_addres_name'];
        $Ars_addres=$_POST['Ars_addres'];
        $Ars_phone=$_POST['Ars_phone'];
		$this->model('User_xinxi')->insert([
			'Ars_name'=>$Ars_name,
			'Ars_addres_name'=>$Ars_addres_name,
			'Ars_addres'=>$Ars_addres,
			'Ars_phone'=>$Ars_phone,
		]);
	}

	public function getAddres()
	{
    echo json_encode($this->model('User_xinxi')->select());
	}
}
?>