<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="" src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"> </script>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="test.css">
</head>
<body>
	<div class="container">
		<!-- 导航栏 -->
		<div class="shenxiang">
			<div class="head">
				<div class="row">
					<div class="zsqx">
						<img src="image/1.png" alt="">
						<p :class="{'cur':cur_goods_code==0}" @click="change_box(0)">早市鲜拍 <br>17:00结束</p>
					</div>
					<div class="zsqx ">
						<img src="image/2.png" alt="">
						<p :class="{'cur':cur_goods_code==1}" @click="change_box(1)">午时预报<br>22:00结束</p>
					</div>
					<div class="zsqx ">
						<img src="image/3.png" alt="">
						<p :class="{'cur':cur_goods_code==2}" @click="change_box(2)">万事预报 <br>22:00开始</p>
					</div>
				</div>
				<div class="right">
					<p>距离本场结束还有</p>
					<div class="time">
						<div class="Hour showtime"></div>
						<div class="min showtime"></div>
						<div class="sec showtime"></div>
					</div>

				</div>

			</div>

			<div class="content">
				<div class="top_price">
					<div class="tprice">
						<p>￥9.9</p>
					</div>
					<div class="tprice">
						<p>￥9.9</p>
					</div>
					<div class="tprice">
						<p>￥9.9</p>
					</div>
					<div class="tprice">
						<p>￥9.9</p>
					</div>
					<div class="tprice">
						<p>￥9.9</p>
					</div>

				</div>

				<div class="wrap">

					<!-- 左 右轮播 -->
					<!-- <div class="left_arrow icon">左<</div>
					<div class="right_arrow icon">右></div> -->
				<ul  class="big_box">

			<!-- 导入function文件 -->
			<?php 
			include '../six_day/admin/function.php';
			$slider_a = get_info('../six_day/admin/slider.json');

			?>

					<?php
					foreach ($slider_a as $key => $value) {
						?>
						<li class="item">
							<!-- 价格 -->
							<div class="pic"><img src="../six_day/admin/<?=$value['slider_img']?>" alt=""></div>
							<div class="text">汇果洲 男孩木瓜 1kg 国产水果</div>
							<p >好评率</p>
							<div class="price">立即抢购</div>
						</li>
					<?	}?>

					</ul>

				</div>




				</div>
			</div>

		</div>

	</body>

	<script type="">
		var hourtime = 0;
		var mintime = 0;
		var sectime = 0;
		var start = 24*60*60;
		var zero = "0";
		var Time = null;

//倒计时
		function time(){

			hourtime = Math.floor(start/3600);
			mintime = Math.floor(start/60%60);
			sectime = Math.floor(start%60);
			if (hourtime<10) {
				hourtime = zero+hourtime;
			}
			if (mintime<10) {
				mintime = zero+mintime;
			}
			if (sectime<10) {
				sectime = zero+sectime;
			}
			start = start-1;

			document.querySelector(".Hour").innerHTML = hourtime;
			document.querySelector(".min").innerHTML = mintime;
			document.querySelector(".sec").innerHTML = sectime;
		}
		setInterval("time()",1000);	

//Vue框架
		new Vue({
			el:'.container',
			data:{
				cur_goods_code:0,
			},
			methods:{
				change_box(code){
					this.cur_goods_code = code
				},
				
			}
		})
	</script>
	</html>