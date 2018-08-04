<?php
/* Smarty version 3.1.30, created on 2018-08-03 14:32:09
  from "C:\wamp64\www\web\eleven_day\view\ucenter\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64676919ea70_48519257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a93e66035bbe27c1a2f90ad36a5b13de6480e78' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\ucenter\\menu.html',
      1 => 1533306210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b64676919ea70_48519257 (Smarty_Internal_Template $_smarty_tpl) {
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
