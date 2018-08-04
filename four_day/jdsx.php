<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="home.css"></head>
<body>

<?
// 一位数组的菜单
	 $menu_a = ['首页','牦牛','公牛','老牛'];
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

						<? foreach($menu_a as $val){  

						echo "<li class='col-md-2 home'>
							<a href='' class='active'>$val</a>
							<span>|</span>
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