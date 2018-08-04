<?php
/* Smarty version 3.1.30, created on 2018-08-02 13:04:36
  from "C:\wamp64\www\web\eleven_day\view\jdsx\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b630164386007_12037742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c250fe0f2c55a0960add0a40db5441af2092bd47' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\jdsx\\info.html',
      1 => 1533215073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_5b630164386007_12037742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img style="" src="<?php echo $_smarty_tpl->tpl_vars['info']->value['J_thumb'];?>
" >
			</div>
		<div class="col-md-8">
			<div><?php echo $_smarty_tpl->tpl_vars['info']->value['J_name'];?>
</div>
			<div><?php echo $_smarty_tpl->tpl_vars['info']->value['J_price'];?>
</div>
		</div> 
		</div>
		<div class="row">

			<h3>店长推荐</h3>

			<!-- goods_list是jdsx.php传过来的值 -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods_list']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
				<div class="col-md-2">
					<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['J_thumb'];?>
" style="width:100%;" alt="">
					<p>价格：<?php echo $_smarty_tpl->tpl_vars['list']->value['J_price'];?>
</p>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		
		
	</div>


</body>
</html><?php }
}
