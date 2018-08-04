<?php

session_start();

$C = include_once 'config.php';
// 注册、登录都要3秒跳转，所以引用
include_once 'function.php';
include_once 'father/Model.php';
// smarty放在父类控制器的上面
include_once 'father/smarty/Smarty.class.php';
include_once 'father/Control.php';
include_once 'father/Auth.php';

Control::run();

?>