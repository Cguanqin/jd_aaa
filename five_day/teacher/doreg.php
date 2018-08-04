<?php
// 使用的session开启

session_start();

// 内部变量
// 获取表单get方法传输过来的值
// 第一步、获取表单相关信息

// $uname = $_GET['u_name'];
// $mobile = $_GET['mobile'];
// $pwd = $_GET['pwd'];


	 // 1.1、表单入侵
	 // 验证 手机号码、密码、重复密码
 // 第二步、存起来
// 问题1、多人注册
// 问题2、登录的时候，一般都是要匹配用户名和密码
// 方案1、json字符串

// file_put_contents 方法 往一个文件，存入内容
// 语法：第一个参数，文件的名称，可以自动创建
// 第二个参数：mix混合类型，

// json_encode 方法 把一个数组转换为json格式的字符串
// 第一个参数：数组

// 1、获取文件user.json的内容
$user_json_str = file_get_contents('user.json');

// 2、旧的用户信息一个数组，一旦注册新的用户，
// 2.1、把json字符串转换为数组
// 2.2、json_decode(json字符串,boolean)
// 	默认是把值转换成的是对象
// 	第二个参数设置为true，才是数组

$user_a = json_decode($user_json_str,true);

// 3、就往数组添加一条记录

$user_a[] = $_GET;

// 4、往文件存放的时候，把这一个用户信息数组全部扔进去

// 问题三、手机号码不能重复
file_put_contents('user.json', json_encode($user_a) );


$_SESSION['uname'] = $uname;

echo 1;
?>