<?php
/* Smarty version 3.1.30, created on 2018-08-05 02:11:37
  from "C:\wamp64\www\web\eleven_day\view\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b665cd9b85e65_51637013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2820ffbf504bbdf76c504903e3c1a680d071a35' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\message.html',
      1 => 1533301657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b665cd9b85e65_51637013 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>提醒跳转</title>
</head>
<body>
	<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
	setInterval(tiaoz,1000)
	var n =3
	function tiaoz(){
		if(n>=0){
			document.querySelector("#s").innerHTML = n
		}
		else{
			location.href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
			// location.href = "http://localhost/web/eleven_day/?control=user&action=register";
		}
		--n
		
	}
	
<?php echo '</script'; ?>
>

<br>
<b id="s"></b>秒自动跳转
<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">手工跳转</a>
</body>
</html><?php }
}
