<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>addstudent</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>addstudent.css"/>
	<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL;?>addstudent.js"></script>
</head>
<body>
	<div id="addquestion">
		<table align="center" id="qusTable">
			<tr id="even">
				<th class="Num"></th>
				<th class="num">学号</th>
				<th width="220px;">姓名</th>
				<th width="220px;">密码</th>
				<th width="150px;">操作</th>
			</tr>
			<tr class="qusGroup">
				<th class="Num">1</th>
				<th class="num" id="addedit"><input type="text" class="stunum_0"></th>
				<th style="color:red;" id="addedit"><input type="text" class='name_0' ></th>
				<th id="addedit"><input type="text" class='pw_0'></th>
				<th>
				<input type="submit" id="edit" value="确定" onclick=""><input type="button" class="reset" value="重置">
				</th>
			</tr>		
		</table>
	</div>
	<div id="addBtn">
			<input type="button" id="addQes" value="+">
	</div>	
	<div id="sure"><input type="button" id="submit" value="提交"></div>
</body>
</html>