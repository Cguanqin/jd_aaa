<? 

//获取表单get方法传输过来的值

//第一步，获取表单相关的信息

$uname = $_GET['u-user'];
$mobile_num = $_GET['mobile'];
$psw = $_GET['psw'];
$rpsw = $_GET['rpsw'];

print_r($_GET);

file_put_contents('user.json', $_GET)

?>