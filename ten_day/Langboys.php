

<?php
session_start();
class LangBoy{
	// 9人局
	// 游戏角色：4狼人、1预言家、4村姑
	private $play_num; //玩家数量
	private $lang_num = 4; //狼人的数量
	private $lang_qun = []; //狼群的代号
	private $seer; //预言家的代号
	private $cun_girl = []; // 村姑的代号
	private $home_num = 0; // 房间号
	private $game_data = [];  //保存游戏的数组

	public function startGame($num,$home_num,$play_type)
	{
		$this->play_num = $num;
		$this->home_num = $home_num;

		if ($play_type == 1) {
			// 是房主
			$this->setSeer();
			$this->setLang();
			$this->setCun();

			//这里sit_num数组必须赋初值，不然indexOf会报错，所以房主需要坐下
			$this->game_data['sit_num'][0] = 1;
			$this->setGameInfo();
		}
		else{
			return $this->getGameInfo();
		}


		return $this->game_data;
		
	}

//保存信息函数
	public function setGameInfo(){
		 //内容保存为json文件
		file_put_contents('woff.json',json_encode($this->game_data));
	}


//获取信息函数
	public function getGameInfo(){
		$game_json_str = file_get_contents('woff.json');
		return json_decode($game_json_str,true);
	}

	// 随机哪一个代号是预言家
	public function setSeer()
	{
		$this->seer = rand(1,$this->play_num);
		$this->game_data['seer'] = $this->seer;

	}

	// 获取预言家代号
	public function getSeer()
	{
		return $this->seer;
	}

	// 随机哪一些代号是狼
	public function setLang()
	{
		
		for($i=0;$i<$this->lang_num;$i++){
			$num = rand(1,$this->play_num);
			if ($num == $this->seer || in_array($num, $this->lang_qun)) {
				--$i;
			}else{
				$this->lang_qun[] = $num;
			}
		}
		$this->game_data['lang_qun'] = $this->lang_qun;

		// 数组 
		// 判断字符串是否在数组里面，用in_array
		 
	}

	/**
	 * 获取狼
	 * @return array 狼群
	 */
	public function getLang()
	{
		return $this->lang_qun;
	}	


	public function setCun()
	{
		// 剩下的都是村姑
		$this->seer; //整型
		$this->lang_qun; //数组

		for ($i=1; $i <= $this->play_num ; $i++) { 
			if ($i != $this->seer && !in_array($i, $this->lang_qun)) {
				$this->cun_girl[] =$i;
			}
		}
		$this->game_data['cun_girl'] = $this->cun_girl;
	}

	public function getCun()
	{
		return $this->cun_girl;
	}

//设置座位号的方法

	/**
	 * 玩家设置座位
	 *$sit_num当前座位
	 *$up_sit切换当前座位
	 */
	public function setSit($sit_num,$up_sit){

		// print_r($this->get_data);
		$this->game_data = $this->getGameInfo();
		//把座位号存进数组中，键为['sit_nums']
		//intval 获取变量的整数值，也可以是字符串转整数
		$this->game_data['sit_nums'][] = intval($sit_num);
		$this->setGameInfo();

		if ($up_sit) {
			//已坐下
			foreach ($this->game_data['sit_num'] as $key => $value) { 
				if ($value == $up_sit) {
					$this->game_data['sit_num'][$key] = intval($sit_num);
				}
			}
		}
		else{
			$this->game_data['sit_nums'][] = intval($sit_num);
		}

		//保存文件
		$this->setGameInfo();
	}


}
 
$langBoy = new LangBoy();
// $home_num = $_GET['home_num']; //房间编号
$play_type = $_GET['play_type'];
 //1:房主 2：玩家 3:入座



if ($play_type == 3) {
	//入座
     $sit_num = $_GET['sit_num'];
	    //从前端得到sit_num数据，然后存储在变量sit_num变量中

     $sit_num = $_GET['up_sit'];
	 $langBoy ->setSit($sit_num);    //调用setSit方法

}

else{
	$home_num = $_GET['home_num']; //房间编号

	$lang_data = $langBoy->startGame(9,$home_num,$play_type);

	echo json_encode($lang_data);
}



// $lang_data = $langBoy->startGame(9,$home_num,$play_type);

// echo json_encode($lang_data);

?>
 