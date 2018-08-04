<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<?php
	include 'function.php';
	$slider_a = get_info("slider.json");  //get_info定义了是返回一个数组

	if(empty($slider_a)){
		$slider_a = [];
	}
	//数组进行倒序
	$slider_a = array_reverse($slider_a);



	?>
	<div class="container">
		<!--  method="post" enctype="multipart/form-data 并用-->
		<form action="dolider.php" class="form" method="post" enctype="multipart/form-data">
			<h4>添加幻灯片</h4>
			<div class="form-group">
				<label for="">图片</label>
				<input type="file" class="form-control" name="slider_img">
			</div>
			<div class="form-group">
				<label for="">链接</label>
				<input type="text" class="form-control" name="link">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" >
			</div>
		</form>
		<h2>幻灯片内容预览表</h2>
		<table class="table">
			<tr>
				<th>id</th>
				<th>图片路径</th>
				<th>链接</th>
				<th>操作</th>
			</tr>
			<?
			foreach ($slider_a as $key => $value) {
			?>
			<tr>
				<td><?=$key+1 ?></td>
				<td>
					<img style="width: 80px ;height: 80px" src="<?=$value['slider_img']?>" alt="">
				</td>
				<td><?=$value['link'] ?></td>
				<td><a href="" class="btn btn-primary">编辑</a></td>
			</tr>
			<?php
		}
			?>
		</table>
	</div>

</body>
</html>