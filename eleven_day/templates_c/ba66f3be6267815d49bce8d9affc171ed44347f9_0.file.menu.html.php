<?php
/* Smarty version 3.1.30, created on 2018-08-05 02:11:59
  from "C:\wamp64\www\web\eleven_day\view\Ucenter\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b665cef58fef3_90483501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba66f3be6267815d49bce8d9affc171ed44347f9' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\Ucenter\\menu.html',
      1 => 1533306210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b665cef58fef3_90483501 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
	<li>
		<a href="<?php echo url('Ucenter','order');?>
">订单列表</a>
	</li>
	<li>
		<a href="<?php echo url('Ucenter','profile');?>
">个人信息</a>
	</li>
	<li> 
		<a href="<?php echo url('Ucenter','address');?>
">收货地址</a>
	</li>
	<li>
		<a href="<?php echo url('User','logout');?>
">退出</a>
	</li> 
</ul><?php }
}
