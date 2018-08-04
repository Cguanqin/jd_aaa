<?php
$shuzu = ['a','b','c','d','e'];

print_r($shuzu); //数组专用
var_dump($shuzu); //字符串和数组都可以打印出来

foreach ($shuzu as $key => $value) {
	echo $value."<br>";
}


?>