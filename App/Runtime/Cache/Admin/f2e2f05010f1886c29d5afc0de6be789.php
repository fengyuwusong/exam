<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL ?>admin.css">
	<script type="text/javascript" src="<?php echo JS_URL ?>jquery-1.9.1.min.js"></script>

	<script type="text/javascript" src="<?php echo JS_URL ?>admin.js"></script>
</head>
<body>
	<div id="wrap_rm">
	    <div id="left_rm">
			<div id="putimg">
		  		<img src="<?php echo IMAGE_URL ?>GCU2.png">
		  	</div>
			<div id="bot_rm">
				<nav>
					<li><label id="tk">题库</label><div class="transparent" id="A"></div></li>
					<li><label id="zt">新增题目</label><div class="transparent" id="B"></div></li>
					<li><label id="sz">设置</label><div class="transparent" id="C"></div></li>
					<li><label id="tj">成绩统计</label><div class="transparent" id="D"></div></li>
					<li><label id="zc">学生注册</label><div class="transparent" id="E"></div></li>		
				</nav>
			</div>
		</div>
		<div id="rightHeader_rm">
			<div id="title"><lable>题库管理系统</lable></div>
			<div id="username"><span id="name"><?php echo ($name); ?></span><br/>
			<a href="/exam/index.php/admin/login/singnOut">退出</a></div>
		</div> 
		 <div id="main">
		 <iframe src="/exam/index.php/admin/index/showAllQuestion" scrolling="yes"  frameborder="no" name="allquestion" ></iframe>  
		</div>
	</div>

</body>
</html>