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
				<th class="row1">问题</th>
				<th width="220px;">A</th>
				<th width="220px;">B</th>
				<th width="220px;">C</th>
				<th width="220px;">D</th>
				<th width="150px;">操作</th>
			</tr>
			<tr class="qusGroup">
				<th class="Num">1</th>
				<th class="row1" id="addedit">
					<textarea  cols="28" rows="5" class="question_1"></textarea>
				</th>
				<th style="color:red;" id="addedit">
					<input type="radio" name='answer_1' value="answer_1">
					<textarea cols="15"  rows="5" class='answer_1_1'></textarea>
				</th>
				<th id="addedit" name='answer_2'>
					<input type="radio" name='answer_1' value="answer_2">
					<textarea  rows="5" cols="15" class='answer_1_2'></textarea>
				</th>
				<th id="addedit" name='answer_3'>
					<input type="radio" name='answer_1' value="answer_3">
					<textarea rows="5" cols="15"  class='answer_1_3'></textarea>
				</th>
				<th id="addedit" name="answer_4">
					<input type="radio" name='answer_1' value="answer_4">
					<textarea  rows="5" cols="15" class='answer_1_4'></textarea></th>
				<th>
					<input type="submit" id="edit" value="确定" onclick="">
					<input type="button" class="reset" value="重置">
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