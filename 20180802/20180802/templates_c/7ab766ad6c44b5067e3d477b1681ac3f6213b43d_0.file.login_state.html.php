<?php
/* Smarty version 3.1.30, created on 2018-08-03 10:33:31
  from "C:\wamp64\www\20180802\view\login_state.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b642f7b28d8b7_51211466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ab766ad6c44b5067e3d477b1681ac3f6213b43d' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\login_state.html',
      1 => 1533283469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b642f7b28d8b7_51211466 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="top">
	<p>Jdsx首页</p>
	<div class="user">
		<?php if ($_smarty_tpl->tpl_vars['uname']->value) {?>
			<a href="<?php echo url('ucenter','profile');?>
"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
已登录</a>
			<a href="http://localhost/20180802/index.php?control=user&action=logout">退出登录</a>
		<?php } else { ?>
			<a href="http://localhost/20180802/index.php?control=user&action=login">您好，请登录！</a>
			<a href="http://localhost/20180802/index.php?control=user&action=register">免费注册</a>
		<?php }?>
	</div>
</div><?php }
}
