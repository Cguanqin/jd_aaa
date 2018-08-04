<?php
session_start(); 
include_once 'father/Control.php';
include_once 'father/Model.php';
$C = include_once 'config.php';   //引入配置文件



// $control = new Control();
// $control->run(); 


Control::run();

// echo $_GET['control'];

?>