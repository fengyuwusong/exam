<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>错误提醒</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>error.css">
</head>
<body>
	<div id="box">
		<div id="xkl">
			<img src="<?php echo IMAGE_URL ?>/xkl2.jpg">
		</div>
		<div id="tips">
			<span><?php echo ($message); ?></span>
		</div>
		<div id="returns">
			<a  id="but" href="/exam/index.php/Home/login/index">返回</a>
		</div>
	</div>

</body>
</html>