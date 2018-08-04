<?php


//取出数据的函数
function get_info($file_name){
	$json_str = file_get_contents($file_name);
	return json_decode($json_str,true);  //返回一个数组
}


//保存数据到json文件的函数
function save_info($file_name,$save_date){
	//如果文件不存在，则创建
	if (file_exists($file_name)=='') {
		fopen($file_name, 'w');
	}

	$data_json_str = file_get_contents($file_name);

	$data_a = json_decode($data_json_str,true);

	$data_a[] = $save_date;

	file_put_contents($file_name, json_encode($data_a));

	return $data_a;

}


?>
