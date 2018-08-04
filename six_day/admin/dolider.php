<?php
// 引入php文件
include "function.php";

// 获取文件 $_FILES
// 保存图片流程

// 1、获取表单传过来的文件临时目录
$tmp_file = $_FILES['slider_img']['tmp_name'];
// 2、copy复制临时文件到项目指定目录uploads
// 	2.1、以时间戳132165465465(time())命名文

$save_path  = 'uploads/'.time().'.jpg';

copy($tmp_file, $save_path);

save_info('slider.json',[
	'slider_img' => $save_path,
	'link' => $_POST['link']
]); 


//php跳转页面
header("location:slider.php");

?>