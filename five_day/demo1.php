<?
session_start();

//1.获取文件内容
$user_json_str = file_get_contents('user.json')
 $user_a = json_decode($user_json_str,true);

 //往数组里面添加记录
 user_a[] = $_GET;

 //将数组存放到文件中
 file_put_contents('user.json', json_encode($user_a));




?>