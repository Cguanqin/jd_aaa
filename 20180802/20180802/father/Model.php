<?php
// PDO数据库操作类
class Model{
	private $pdo = null;
	public $debug = false;	//不开启调试
	protected $table_name = '';
	private $where_sql = '';	//条件属性

	function __construct($C, $debug=false)
	{
		$this->debug = $debug;

		$dsn = $C['driver'].":dbhost=".$C['dbhost'].";dbname=".$C['dbname'].";charset=".$C['charset'];
		$dbuname = $C['dbuser'];
		$dbpwd = $C['dbpwd'];

		$this->pdo = new PDO($dsn,$dbuname,$dbpwd);

		// PDO报错级别设置，默认不会把不安全的信息显示出来
		if ($this->debug) {
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}

	// 插入数据
	public function insert($data)
	{
		$table_name_v = $this->table_name;
		// $this->pdo->exec("insert into goods (g_name, g_price, g_thumb, add_time) values('榴莲', 50.5, '../images/goods_img.jpg', 1)");
		// 数组转换字符串	 implode(连接符，数组)
		$cols = implode(",", array_keys($data));
		$values = $this->setValues(array_values($data));
		$sql = "insert into $table_name_v($cols) values($values)";
		try {
			$this->pdo->exec($sql);
		} catch (PDOException $e) {
			if ($this->debug) {
				echo "您出错了！";
				echo $sql;
			}
		}
	}

	// 给为 字符串 类型的数据左右两边加 单引号''
	public function setValues($value_data)
	{
		foreach ($value_data as $key => $value) {
			if (is_string($value)) {
				$value_data[$key] = "'".$value."'";
			}
		}
		return implode(",", $value_data);
	}

	// 删
	// 改

	// 查找 1.返回表里的所有记录
	public function select()
	{
		// 预处理会安全一些，sql注入
		$pdoStatement = $this->pdo->prepare("select * from ".$this->table_name);	//返回 pdoStatement结果集
		$pdoStatement->execute();	//执行一下结果集，执行一条预处理语句
		return $pdoStatement->fetchAll();	//从结果集中取得所有行作为关联数组，或数字数组，或二者兼有
	}

	public function where($str)
	{
		$this->where_sql = $str;
		// 返回$this就ok，链式操作！
		return $this;
	}

	// 查找 2.返回表里的一条记录
	public function find()
	{
		$where_str = '';
		if ($this->where_sql) {
			$where_str = " where ".$this->where_sql;
		}
		$pdoStatement = $this->pdo->prepare("select * from ".$this->table_name.$where_str);
		$pdoStatement->execute();
		return $pdoStatement->fetch();	//一条记录就用fetch()
	}
}

?>