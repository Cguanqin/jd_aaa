<?php

class AddressModel extends Model {

       protected $table_name = 'Address';
        function __construct(){
        	global $C;
        	parent::__construct($C,true);
        }

        public function add_cart(){
        	echo "这是购物车";
        }
		
}
?>