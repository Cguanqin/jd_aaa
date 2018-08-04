

<?

class A{
	private $name = '';
	public function Getname($name){
		$this->name = $name;
		echo $this->name;
	}
	//new 一个对象
	
}
$b = new A();
$b->Getname('我是谁');
?>