

<?php
class LangRS{
	private $play_num ;  //玩家的数量
	private $lang_num = 4;   //狼人的数量
	private $lang_qun = [];  //狼群的代号
	private $seer;          //预言家的代号
	private $cun_girl = [];  //村姑的代号


 public function startGame($num){
 	$this->play_num = $num;
 	$this->setSeer();
 	$this->setLang();
 	$this->setCun_girl();


 }

 //随机抽取哪个是预言家
 public function setSeer(){
 	$this->seer = rand(1,$this->play_num);
 }
 //得到预言家的代号
 public function getSeer(){
 	return $this->seer;
 }
 //随机抽取哪个是狼人
public function setLang()
	{
		
		for($i=0;$i<$this->lang_num;$i++){
			$tmp = rand(1,$this->play_num);
			if ($tmp != $this->seer) {
				$this->lang_qun[] = $tmp;
			}
			else{
				$i = $i-1;
			}
	}
	}

//得到狼人的代号
 public function getLang(){
 	return $this->lang_qun;
 }


//随机抽取村姑代号
 public function setCun_girl(){
 	for ($i=1; $i<=$this->play_num ; $i++) { 
 		if ($this->seer!=$i && !in_array($i, $this->lang_qun)) {
 			$this->cun_girl[] = $i;
 					}
 	}

	 }

	 //得到村姑代号
	public function getCun_girl(){
		return $this->cun_girl;
	 }
 }


$game_1 = new LangRS();
$play_num = 9;
$game_1->startGame($play_num);
	// echo "预言家的代号是:".$game_1->getSeer();
	// echo "<br>";

//因为getLang()返回的是一个数组不能用echo打印
// echo "狼人的代号是分别是:".$game_1->getLang();
	// echo "狼人的代号是分别是：";
	// echo "<br>";
	// $langqun_code = $game_1->getLang();
	// print_r($langqun_code);
	// echo "<br>";
	// echo "村姑的代号分别是:";
	// $cun = $game_1->getCun_girl();
	// print_r($cun);

//定义一个空格数组
$rtn_data= [];
//把信息存到数组中
$rtn_data['seer']= $game_1->getSeer();  //预言家代号
$rtn_data['lang_num'] = $game_1->getLang();   //狼人代号
$rtn_data['cun_num'] = $game_1->getCun_girl();  //村姑代号
$rtn_data['play_num'] = $play_num;     //玩家数量
 //阿贾克斯不能传输数组，只能传输字符串
?>