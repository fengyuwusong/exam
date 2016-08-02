<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>addquestion</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL ?>addquestion.css"/>
	<script type="text/javascript" src="<?php echo JS_URL ?>jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL ?>addquestion.js"></script>
</head>
<body>
	<div id="addquestion">
		<table align="center" id="qusTable">
			<tr id="even">
				<th class="Num"></th>
				<th class="question">问题</th>
				<th width="220px;">A</th>
				<th width="220px;">B</th>
				<th width="220px;">C</th>
				<th width="220px;">D</th>
				<th width="150px;">操作</th>
			</tr>
			<tr class="qusGroup">
				<th class="Num">1</th>
				<th class="question" id="addedit"><textarea  cols="28" rows="5"></textarea></th>
				<th style="color:red;" id="addedit"><textarea cols="15"  rows="5" ></textarea></th>
				<th id="addedit"><textarea  rows="5" cols="15"></textarea></th>
				<th id="addedit"><textarea rows="5" cols="15" ></textarea></th>
				<th id="addedit"><textarea  rows="5" cols="15"></textarea></th>
				<th>
				<input type="button" id="edit" value="确定" onclick=""><input type="button" class="reset" value="重置">
				</th>
			</tr>
			

			
		</table>
		<div id="addBtn">
			<button id="addQes">+</button>
		</div>	
	</div>
	<script type="text/javascript">
		
    </script>
</body>
</html>