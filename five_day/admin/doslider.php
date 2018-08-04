<?php
print_r($_FILES);
//获取表单传过来的文件临时目录
$tmp_file = $_FILES['slider_img']['tmp_name'];

$save_path = 'uploads/'.time().'.jpg';

//copy 复制临时文件到项目的指定目录 
   //图片的命名格式以时间撮为格式 time()
copy($tmp_file ,$save_path );
// print_r($_POST);


save_info('slider.json',['slider_img'=>$save_path,'link'=>$_POST['link']]);


function save_info($file_name,$save_date){
	//如果文件不存在，则创建
	if (file_exists($file_name)=='') {
		fopen($file_name, 'w');
	};

	$data_json_str = file_get_contents($file_name);

	$data_a = json_decode($data_json_str,true);

	$data_a[] = $save_date;

	file_put_contents($file_name, json_encode($data_a));

	return $data_a;

}


?>