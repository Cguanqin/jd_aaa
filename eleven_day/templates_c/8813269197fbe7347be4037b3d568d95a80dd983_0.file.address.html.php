<?php
/* Smarty version 3.1.30, created on 2018-08-04 17:35:57
  from "C:\wamp64\www\web\eleven_day\view\Ucenter\address.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b65e3fdeb1ce4_38606563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8813269197fbe7347be4037b3d568d95a80dd983' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\eleven_day\\view\\Ucenter\\address.html',
      1 => 1533404154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:ucenter/menu.html' => 1,
  ),
),false)) {
function content_5b65e3fdeb1ce4_38606563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<link rel="stylesheet" href="http://unpkg.com/iview/dist/styles/iview.css">
<!-- import iView -->
<?php echo '<script'; ?>
 src="http://unpkg.com/iview/dist/iview.min.js"><?php echo '</script'; ?>
>
<div class="container">
    <div class="col-md-3"><?php $_smarty_tpl->_subTemplateRender("file:ucenter/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
    <div class="col-md-9">
         <h3>收货地址管理 <a @click="show=true"  class="btn btn-success">添加地址</a></h3>
         <modal v-model="show" @on-ok="add">

            <form action="" class="form">   
                <div class="from-group">
                    <label >收货人</label>
                    <input v-model="receive_people" type="text" class="form-control" >
                </div>
                <div class="from-group">
                    <label>选择地区</label>
                    <Cascader :data="data" v-model="area"></Cascader>
                </div>
            </form>
        </modal>
         <ul>
            <li v-for="addr in addr_list">
                <p>收货人：$ addr.receive_people $</p>
                <p>收货地址：$ addr.area $</p>
            </li>
         </ul>
    </div>
</div>  
<?php echo '<script'; ?>
 type="text/javascript">

    //如果是post类型请求给后台，必须要加上下面一句代码，主要的作用是转化代码格式
    Vue.http.options.emulateJSON = true;
    new Vue({
        
        el:'.container',
        delimiters:['$','$'],
        data:{
            show:false,
            area:'',//选择后赋值给它
            receive_people:'', //收货人
            addr_list:[],
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
        },
        mounted(){
            this.$http.post('<?php echo url("ucenter","getAdres");?>
')
            .then((rtnD)=>{
                this.addr_list = rtnD.data
            })
        },
        methods:{
            add(){
                this.$http.post('<?php echo url("ucenter","saveAdres");?>
',{
                    receive_people:this.receive_people,
                    //数组转字符串
                    area:JSON.stringify(this.area)
                }
                    )
                .then((rtnD)=>{
                    if(rtnD.data.status == 1){
                        this.addr_list.unshift({
                     receive_people:this.receive_people,
                    //数组转字符串
                    // area:JSON.stringify(this.area)
                    area:rtnD.data.area,
                        })
                    }
                })


                 //查看多级联动是什么类型，查询结果是数组类型 
                console.log(this.area)
            }
            

        }
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
