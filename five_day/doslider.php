<?php
print_r($_FILES);
//获取表单传过来的文件临时目录
$tmp_file = $_FILES['slider_img']['tmp_name'];


//copy 复制临时文件到项目的指定目录
// copy($tmp_file ,'uploads/1.jpg');
// print_r($_POST);


?>