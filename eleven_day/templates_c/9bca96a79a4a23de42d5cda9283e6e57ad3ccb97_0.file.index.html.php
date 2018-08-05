<?php
/* Smarty version 3.1.30, created on 2018-08-05 02:11:08
  from "C:\wamp64\www\web\eleven_day\view\goods\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b665cbcd30cd6_02591893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bca96a79a4a23de42d5cda9283e6e57ad3ccb97' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\goods\\index.html',
      1 => 1533356794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b665cbcd30cd6_02591893 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<link type="text/css" rel="stylesheet" href="public/static/bootstrap-vue.min.css"/>

	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/static/bootstrap-vue.min.js"><?php echo '</script'; ?>
>
<body>
	<div class="container">
		<h3>商品管理</h3>

		<b-table :sort-by.sync="sortBy" :sort-desc.sync="sortDesc" hover :items="goods_list" :fields="fields"></b-table>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		
		new Vue({
			el:'.container',
			data:{
				sortBy: 'age',
     	 		sortDesc: false,   //默认升序
				fields:[
					{
						key:'ID',
						sortable:true,
					},
					{
						key:'J_name',
						label:'商品名称',
					},
					{
						key:'J_price',    //显示的键
						label:'商品价格', //表头标签
						sortable:true,   //排序
					},
					{
						label:'编辑',
					}

				],
				goods_list:[]
			},
			mounted(){
				this.$http.get('http://localhost/web/eleven_day?action=getList')
				.then((rtnData)=>{
					this.goods_list = rtnData.data
				})
			}
		})
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
