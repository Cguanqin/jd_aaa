<?php
session_start(); 

// 异地域变量
// $_SERVER;

// smarty框架必须在control的上面
include_once 'father/smarty/Smarty.class.php';
include_once 'function.php';
include_once 'father/Control.php';
include_once 'father/Model.php';
include_once 'father/Auth.php';
$C = include_once 'config.php';   //引入配置文件



// $control = new Control();
// $control->run(); 


Control::run();

// echo $_GET['control'];

?>