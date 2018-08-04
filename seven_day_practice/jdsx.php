<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="home.css">
	<style type="text/css">
		ul{padding: 0;}
	</style>
</head>
<body>

<?
// 一位数组的菜单
	 $menu_a = ['首页','牦牛','公牛','老牛'];

	 // 数组
	 $left_menu_a = [
	 			[
			 		'icon'=>'images/cate_1.png',//图标
			 		'title'=>'新鲜水果',//标题
			 		'top_three'=>['芒果','西瓜','榴莲']//前三个热门分类
			 	],
			 	[
			 		'icon'=>'images/cate_2.png',
			 		'title'=>'海鲜水产',
			 		'top_three'=>['小龙虾','大闸蟹','小驴米']
			 	],
			 	[
			 		'icon'=>'images/cate_1.png',
			 		'title'=>'新鲜水果',
			 		'top_three'=>['芒果','西瓜','榴莲']
			 	],
			 	[
			 		'icon'=>'images/cate_1.png',
			 		'title'=>'新鲜水果',
			 		'top_three'=>['芒果','西瓜','榴莲']
			 	]

	 ];
?>

	<div class="container">
		<div class="row">
			<!-- 两列column，col -->
			<!-- >
			960px -->
			<div class="col-xs-5 col-md-3">京东logo</div>
			<div class="col-xs-7 col-md-9">
				<input type="text"></div>
		</div>
		<div class="first_box">
			<div class="row">
				<div class="col-md-3 cate_zhu_title">商品分类</div>
				<div class="col-md-6">
					<ul class="row menu_box">
					 <!-- foreach($menu_a as $key=>$val){ 
							语法1：foreach(数组变量 as 值)
							语法2：foreach(数组变量 as 键=>值)
					 	 -->

						<? foreach($menu_a as $key=>$val){ 
							// 数组的长度
							// count(数组的变量)
							$shushu = "|";
							if (count($menu_a)-1 == $key) {
								 $shushu = "";
							}

						echo "<li class='col-md-2 home'>
							<a href='' class='active'>$val</a>
							<span>$shushu</span>
						</li>";

						  }?>
					</ul>
				</div>
				<div class="col-md-3 pzbz_enter">
					<span class="glyphicon glyphicon-cloud"></span>
					品质保障
				</div>

			</div>
			<div class="row"></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<!-- 左边菜单分类盒子 -->
				<ul>
					<?php foreach ($left_menu_a as  $value) {
						echo "<li class='row'>
						<div class='col-md-2'> 
							<img src='".$value['icon']."'>
						</div>
						<div class='col-md-10'>
							".$value['title']."
						</div>
					</li>";
					}
					?>
				</ul>
			</div>
			<div class="col-md-6"></div>
			<div class="col-md-3"></div>
		</div>

		<div class="second_box">
			<div class="title_box">
				京/东/生/鲜
				<br>JD FRESH</div>
			<div class="fruite_ad_box">
				<div class="cate_child_box">新鲜水果</div>
				<div class=" center-img">
					<img src="https://img10.360buyimg.com/babel/jfs/t21754/57/2277969605/75275/5b9c3164/5b4daa68Nc4e84ccc.jpg" alt="">
				</div>
				<div class="">
					<img src="https://img10.360buyimg.com/babel/jfs/t21664/245/2283527152/74293/148a9d13/5b4edc58N0e3604f3.png!q80.webp" alt="">
				</div>
			</div>
			<div class="row"></div>
			<div class="row"></div>
		</div>
	</div>
</body>
</html>