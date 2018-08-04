<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
	*{margin: 0;height: 0;}
	.box{list-style: none;}
	.content{    
		width: 500px;
		height: 600px;
		border: 1px solid #eee;
		margin: auto;
		list-style: none;
	}
	.content ul{list-style: none;}
	.content ul li{width:100%;height :100px;background: #eee;margin-top: 10px;}
	</style>
</head>
<body>

 <?php 
	$menu = ['遍历1','遍历2','遍历3','遍历4','遍历5'];
   ?> 

	<div class="box">
		<div class="content">
			<ul>
				<?php foreach ($menu as $value) {
				
				 echo"<li>$value</li>" ;
					// <li>echo $value</li> ;
				}?>

				                         
			</ul>
		</div>
	</div>
</body>
</html>