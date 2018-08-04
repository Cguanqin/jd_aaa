<?php
/* Smarty version 3.1.30, created on 2018-08-03 14:47:57
  from "C:\wamp64\www\web\eleven_day\view\Ucenter\address.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b646b1d188739_60521032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8813269197fbe7347be4037b3d568d95a80dd983' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\Ucenter\\address.html',
      1 => 1533307674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:ucenter/menu.html' => 1,
  ),
),false)) {
function content_5b646b1d188739_60521032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="http://unpkg.com/iview/dist/styles/iview.css">
<!-- import iView -->
<?php echo '<script'; ?>
 src="http://unpkg.com/iview/dist/iview.min.js"><?php echo '</script'; ?>
>
<body>
	<div class="container">
		<div class="col-md-3"><?php $_smarty_tpl->_subTemplateRender("file:ucenter/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
		<div class="col-md-9" >
		<h3>收货地址管理 <a @click="show=true" class="btn btn-success">添加地址</a></h3>
		<modal v-model = "show">

			<form action="" class="form">
				<div class="from-group">
					<label >收货地址</label>
					<input type="text" class="form-control">
				</div>
				<div class="from-group">
					<label >选择地区</label>
					<Cascader :data="data" v-model="area"></Cascader>
				</div>
			</form>
		</modal>
		<ul>
			<li></li>
		</ul>
		</div>
	</div>
<?php echo '<script'; ?>
 type="text/javascript">
	
	new Vue({
		el:'.container',
		data:{
			show:false,
			area:'',//选择后赋值给它
			data:[{
                    value: 'beijing',
                    label: '北京',
                    children: [
                        {
                            value: 'gugong',
                            label: '故宫'
                        },
                        {
                            value: 'tiantan',
                            label: '天坛'
                        },
                        {
                            value: 'wangfujing',
                            label: '王府井'
                        }
                    ]
                }, {
                    value: 'jiangsu',
                    label: '江苏',
                    children: [
                        {
                            value: 'nanjing',
                            label: '南京',
                            children: [
                                {
                                    value: 'fuzimiao',
                                    label: '夫子庙',
                                }
                            ]
                        },
                        {
                            value: 'suzhou',
                            label: '苏州',
                            children: [
                                {
                                    value: 'zhuozhengyuan',
                                    label: '拙政园',
                                },
                                {
                                    value: 'shizilin',
                                    label: '狮子林',
                                }
                            ]
                        }
                    ],
                }]
		}
	})
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
