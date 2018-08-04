<?php

class GoodsModel extends Model {

       protected $table_name = 'jd';
        function __construct(){
        	global $C;
        	parent::__construct($C,true);
        }

        public function add_cart(){
        	echo "这是购物车";
        }
		
}
?>