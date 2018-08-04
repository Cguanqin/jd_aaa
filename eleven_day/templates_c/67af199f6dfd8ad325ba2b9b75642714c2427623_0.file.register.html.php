<?php
/* Smarty version 3.1.30, created on 2018-08-03 13:30:59
  from "C:\wamp64\www\web\eleven_day\view\User\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b645913687c70_13752711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67af199f6dfd8ad325ba2b9b75642714c2427623' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\User\\register.html',
      1 => 1533303038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b645913687c70_13752711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<form action="http://localhost/web/eleven_day/index.php" method="post" >
	<!-- <form action="<?php echo url('user','doReg');?>
" method="post"></form> -->
	<div class="form-group">
		<label for="">用户名</label>
		<input name="uname" type="text" class="form-control">
	</div>
	<div class="form-group">
		<label for="">密码</label>
		<input name="upwd" type="text" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="control" value="user">
		<input type="hidden" name="action" value="doReg">
		<input type="submit" class="btn btn-primary">
	</div>
</form>
</body>
</html><?php }
}
