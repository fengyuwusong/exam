<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>后台</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL ?>houtai.css">
	
	<script type="text/javascript" src="<?php echo JS_URL ?>jquery-1.9.1.min.js"></script>
</head>
<body>
	<div id="wrap_rm">
		<div id="left_rm">
		  	<div id="putimg">
		  		<img src="<?php echo IMAGE_URL ?>GCU2.png">
		  	</div>
			<div id="bot_rm">
				<nav>
					<li>题库<span class="transparent_1" ></span></li>
					<li>新增题目<span class="transparent_2"></span></li>
					<li>设置<span class="transparent_3"></span></li>
				</nav>
			</div>
		</div>
		<div id="rightHeader_rm">
			<div id="title"><lable>题库管理系统</lable></div>
			<div id="username"><span id="name">username</span><br/>
			<a href="#">退出</a></div>
		</div>
		 <div id="main">
			<iframe src="/exam/index.php/admin/index/showAllQuestion" scrolling="yes"  frameborder="no" ></iframe>  
			<!-- <iframe src="addquestion.html" scrolling="yes" frameborder="no" ></iframe>   -->
			<!-- <iframe src="set.html" scrolling="yes" frameborder="no" ></iframe>   -->

		</div> 
	</div>

<script>
function adoptWin(){
	var outCon = document.getElementById('wrap_rm');
	outCon.style.height = window.innerHeight + 'px';
}
adoptWin();
window.onresize = adoptWin;
</script>
<script type="text/javascript" src="<?php echo JS_URL ?>houtia.js"></script>
</body>
</html>