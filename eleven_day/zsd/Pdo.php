<?php

//数据库操作类
class Mysql{
	private $pdo = null;

public $debug = false;  //不开启调试
function __construct($config_a, $debug){
	$this->debug = $debug;
	//连接数据库
	$dsn =$config_a['driver'].":dbhost=".$config_a['dbhost'].";dbname=".$config_a['dbname'].";".$config_a['charset'];
	$dbuname =$config_a['dbuser'];
	$dbpwd = $config_a['dbpwd'];


	//php连接mysql
	//mongodb,oracle
	//这里推荐用PDO类，因为mongodb,oracle ,mysql 语法不完全一样，如果用PDO,就不用转化语法，底层自动转
	$this->pdo = new PDO($dsn,$dbuname,$dbpwd);
	
 
	// PDO报错级别，不安全信息默认不显示出来
	// echo $this->debug;

	

	if($this->debug){
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}

// public function insert()
// {
// 	$this->pdo->exec("insert into jd(J_name,J_price,J_time)  values('苹果' ,11,11)");
// }

public function insert( $table_name,$data ){
	//insert into $table_name (g_name,g_price) values ('榴莲','1.68')

    /**
     * 这里主要是把插入语句拆分，把表名和数据分别写在变量里，然后调用变量
     */
	//数组转字符串  implode(连接符，数组)
    $cols = implode(",", array_keys($data));
	// echo $cols;
    // $values = implode(",", array_values($data));
    // print_r($values);
	// echo $values;exit();

	$values = $this->setValues(array_values($data));

    $sql ="insert into $table_name ($cols) values ($values)";

    try {
    	$this->pdo->exec($sql);
    } catch (PDOException $e) {
    	if ($this->debug) {
    		echo $sql  ;
    		// echo "出错了";
    	}
    	
 
    }
}


//判断是否为字符串，如果是字符串，则给字符串加上‘’
public function setValues($value_data){
   foreach ($value_data as $key => $value) {
   	if (is_string($value)) {
   		$value_data[$key] = "'".$value."'";
   	}
   }
   return implode(",", $value_data);
}
}

$config_a = include_once 'config.php';
$mysql = new Mysql($config_a, true);
$mysql->insert('jd',[
	'J_name'=>'榴莲',
	'J_price'=>10.3,
	'J_time'=>10,
]);
?>