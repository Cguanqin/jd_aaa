		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			<!-- <link rel="stylesheet" href="JD.css"> -->
			<style>
			.container .row .left{
				width: 200px;height: 400px;background: #eee;margin: 0px;padding: 0px;
			}
			ul{list-style: none;padding: 0px;margin: 0px;}
			.container .row .left ul li{height: 80px;
				border: 1px solid #666;position: relative;}
				.container .row .left ul li img{position: absolute; left: 2px}

		</style>

	</head>
	<body>
		<?php
		// 三维数组
		$menu_left_list = [
			          ['icon'=>'../image/cate1.png', 'title'=>'新鲜水果','fruit'=>['芒果','西瓜','榴莲']],
			          ['icon'=>'../image/cate2.png', 'title'=>'新鲜水果','fruit'=>['芒果','西瓜','榴莲']],
			          ['icon'=>'../image/cate3.png', 'title'=>'新鲜水果','fruit'=>['芒果','西瓜','榴莲']],
			          ['icon'=>'../image/cate4.png', 'title'=>'新鲜水果','fruit'=>['芒果','西瓜','榴莲']],
			          ['icon'=>'../image/cate5.png', 'title'=>'新鲜水果','fruit'=>['芒果','西瓜','榴莲']],
					 ];

		?>


		<div class="container">
			<div class="row">
				<div class="col-xs-3" "col-md-3">京东生鲜</div>
				<div class="col-xs-9" "col-md-9"><input type="text">搜索</div>
			</div>
			<div class="first_box"> 
				<div class="row">
					<div class= "col-md-3 spfl">商品分类</div>
					<div class="col-xs-6" "col-md-6">

						<ul class="row menu_box">
							<li class="col-md-3"><a href="" class="active">生鲜首页</a><span>|</span></li>
							<li class="col-md-2"><a href="">东家菜</a><span>|</span></li>
							<li class="col-md-2"><a href="">优选100</a><span>|</span></li>
							<li class="col-md-2"><a href="">试吃</a></li>
						</ul>

					</div>
					<div class="col-xs-3 pzbz_enter" "col-md-3">品质保障</div>

				</div>
			</div>

			
				<div class="row">
					<div class="col-md-3 left">

						<!-- 左边菜单分类盒子 -->
						<div class="menu_left">
							<ul>
								<?php
								foreach ($menu_left_list as $key => $value) {
								echo "<li>
									<div class='col-md-2'>
										<img src='".$value['icon']."' >
									</div>
									<div class='col-md-10'>
									<div>".$value['title']."</div>
								</li>";
								}?>；
								
							</ul>
						</div>

					</div>
					<div class="col-md-6">
<div></div>
					</div>
					<div class="col-md-3">
					</div>
				</div>	
			

		</div>



		<!-- Second_box -->
	<!-- 	<div class="second_box">
			<div class="title_box">京/东/生/鲜<br>JD FRESH</div>
			<div class="fruite_ad_box" >

				<div class="cate_child_box">新鲜水果</div>
				<div class="center_img" >
					<img src="https://img10.360buyimg.com/babel/jfs/t21754/57/2277969605/75275/5b9c3164/5b4daa68Nc4e84ccc.jpg">

				</div>
				<div class="right_img">
					<img src="https://img10.360buyimg.com/babel/jfs/t21664/245/2283527152/74293/148a9d13/5b4edc58N0e3604f3.png!q80.webp">

				</div>
			</div>
			<div class="fruite_list"></div>
			<div class="fruite_log"></div>
		</div>
		<div>
		</div> -->


		<!-- foot_box -->
	<!-- 	<div class="foot_box">
			<div class="title_box">食/鲜/者/说<br>CUSTOMER SAYS</div>
			<div class=" contain_slide">

				<div class="hdp">
					<img class="img_center" src="image/6e676331303934303673776831353230373337323836393337_sma.jpg" style="border-radius: 50px">
					<img class="img_left" src="image/595d9332Nd7658b26.jpg" style="border-radius: 50px">
					<div class="pinjia">特大，包装好</div>
				</div>

				<div class="hdp">
					<img class="img_center" src="image/6e676331303934303673776831353230373337323836393337_sma.jpg" style="border-radius: 50px">
					<img class="img_left" src="image/595d9332Nd7658b26.jpg" style="border-radius: 50px">
					<div class="pinjia">特大，包装好</div>
				</div>

				<div class="hdp">
					<img class="img_center" src="image/6e676331303934303673776831353230373337323836393337_sma.jpg" style="border-radius: 50px">
					<img class="img_left" src="image/595d9332Nd7658b26.jpg" style="border-radius: 50px">
					<div class="pinjia">特大，包装好</div>
				</div>

			</div>
			<hr />
			<div class="contain_foot">
				<div class="row">
					<div class="spaq">
						食品安全 <span><br>精选生鲜 严格质检</span>
					</div>
					<div class="spaq">食品安全 <span><br>精选生鲜 严格质检</span></div>
					<div class="spaq">食品安全 <span><br>精选生鲜 严格质检</span></div>
					<div class="spaq">食品安全 <span><br>精选生鲜 严格质检</span></div>
					<div class="spaq">食品安全 <span><br>精选生鲜 严格质检</span></div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<img src="image/59828143N265c67e7.png" alt="">

					</div>
					<div class="col-md-2">
						<img src="image/59828143N265c67e7.png" alt="">
					</div>
					<div class="col-md-2">
						<ul>
							<li><span>配送方式</span></li>
							<li>配送方式</li>
							<li>配送方式</li>
							<li>配送方式</li>
						</ul>
					</div>
					<div class="col-md-2">
						<ul>
							<li>配送方式</li>
							<li>配送方式</li>
							<li>配送方式</li>
							<li>配送方式</li>
						</ul>

					</div>
					<div class="col-md-2">
						<ul>
							<li>配送方式</li>
							<li>配送方式</li>
							<li>配送方式</li>
							<li>配送方式</li>
						</ul>
					</div>
					<div class="col-md-2">
						<ul>
							<li>配送方式</li>
							<li>配送方式</li>
							<li>配送方式</li>
							<li>配送方式</li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</body>
</html>