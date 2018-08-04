<? 
//使用session会话时，需要开启
session_start();

//获取表单get方法传输过来的值

//第一步，获取表单相关的信息

$uname = $_GET['u_user'];
$_SESSION =$_GET;
// $mobile_num = $_GET['mobile'];
// $psw = $_GET['psd'];
// $rpsw = $_GET['rpsd'];

// print_r($_GET);

$user_json_str = file_get_contents('user.json'); //得到json格式的字符串
// print_r($user_json_str);

$user_a = json_decode($user_json_str,true);   //json字符串,默认是把值转成对象，若第二个参数为true则转数组
print_r($user_a);

$user_a[] = $_GET;   //得到的信息存在数组中

//最后把数组转化成json字符串，因为json文件的内容是以字符串的形式存储起来的
file_put_contents('user.json', json_encode($user_a) );

?>