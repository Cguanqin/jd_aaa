<?php
/* Smarty version 3.1.30, created on 2018-08-05 02:11:42
  from "C:\wamp64\www\web\eleven_day\view\user\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b665cdeede491_06534328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c016ba095229c03a0a307e78bf12945bea51c9cc' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\user\\register.html',
      1 => 1533303038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b665cdeede491_06534328 (Smarty_Internal_Template $_smarty_tpl) {
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
