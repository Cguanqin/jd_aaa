<?php 

class  User_xinxiModel  extends Model
{
	protected $table_name = 'addres';

	function __construct(){
		global $config_a;
		parent::__construct($config_a, true);
 	}
}
?>