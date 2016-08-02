<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>score_students</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL ?>score_students.css">
</head>
<body>
<div id="allstudents">
		<table align="center" id="MyTable">
			<tr id="even">
				<th class="ID">ID</th>
				<th class="num">学号</th>
				<th width="150px;">是否提交</th>
				<th width="150px;">分数</th>
			</tr>
			<tr>
				<th class="ID"><?php echo ($num_1); ?></th>
				<th class="num"><?php echo ($stunum_1); ?></th>
				<th><label><?php echo ($submit_1); ?></label></th>
				<th id="addedit"><label><?php echo ($src_1); ?></label></th>
			</tr>
			<tr id="even">
				<th class="ID"><?php echo ($num_2); ?></th>
				<th class="num"><?php echo ($stunum_2); ?></th>
				<th ><?php echo ($submit_2); ?></th>
				<th><?php echo ($src_2); ?></th>
			</tr>
			<tr>
				<th class="ID" ><?php echo ($num_3); ?></th>
				<th class="num"><?php echo ($stunum_3); ?></th>
				<th><?php echo ($submit_3); ?></th>
				<th><?php echo ($src_3); ?></th>
			</tr>
			<tr id="even">
				<th class="ID"><?php echo ($num_4); ?></th>
				<th class="num"><?php echo ($stunum_4); ?></th>
				<th><?php echo ($submit_4); ?></th>
				<th><?php echo ($src_4); ?></th>
			</tr>
			<tr>
				<th class="ID"><?php echo ($num_5); ?></th>
				<th class="num"><?php echo ($stunum_5); ?></th>
				<th><?php echo ($submit_5); ?></th>
				<th><?php echo ($src_5); ?></th>
			</tr>
			<tr id="even">
				<th class="ID"><?php echo ($num_6); ?></th>
				<th class="num"><?php echo ($stunum_6); ?></th>
				<th><?php echo ($submit_6); ?></th>
				<th><?php echo ($src_6); ?></th>
			</tr>
			<tr>
				<th class="ID"><?php echo ($num_7); ?></th>
				<th class="num"><?php echo ($stunum_7); ?></th>
				<th><?php echo ($submit_7); ?></th>
				<th><?php echo ($src_7); ?></th>
			</tr>
			<tr id="even">
				<th class="ID"><?php echo ($num_8); ?></th>
				<th class="num"><?php echo ($stunum_8); ?></th>
				<th><?php echo ($submit_8); ?></th>
				<th><?php echo ($src_8); ?></th>
			</tr>
			<tr>
				<th class="ID"><?php echo ($num_9); ?></th>
				<th class="num"><?php echo ($stunum_9); ?></th>
				<th><?php echo ($submit_9); ?></th>
				<th><?php echo ($src_9); ?></th>
			</tr>
			<tr id="even">
				<th class="ID"><?php echo ($num_10); ?></th>
				<th class="num"><?php echo ($stunum_10); ?></th>
				<th><?php echo ($submit_10); ?></th>
				<th><?php echo ($src_10); ?></th>
			</tr>
			<tr>
				<th class="ID"><?php echo ($num_11); ?></th>
				<th class="num"><?php echo ($stunum_11); ?></th>
				<th><?php echo ($submit_11); ?></th>
				<th><?php echo ($src_11); ?></th>
			</tr>
			<tr id="even">
				<th class="ID"><?php echo ($num_12); ?></th>
				<th class="num"><?php echo ($stunum_12); ?></th>
				<th><?php echo ($submit_12); ?></th>
				<th><?php echo ($src_12); ?></th>
			</tr>
			<tr>
				<th class="ID"><?php echo ($num_13); ?></th>
				<th class="num"><?php echo ($stunum_13); ?></th>
				<th><?php echo ($submit_13); ?></th>
				<th><?php echo ($src_13); ?></th>
			</tr>
			<tr id="even">
				<th class="ID"><?php echo ($num_14); ?></th>
				<th class="num"><?php echo ($stunum_14); ?></th>
				<th><?php echo ($submit_14); ?></th>
				<th><?php echo ($src_14); ?></th>
			</tr>
			<tr>
				<th class="ID"><?php echo ($num_15); ?></th>
				<th class="num"><?php echo ($stunum_15); ?></th>
				<th><?php echo ($submit_15); ?></th>
				<th><?php echo ($src_15); ?></th>
			</tr>
			<tr id="even">
				<th class="ID"><?php echo ($num_16); ?></th>
				<th class="num"><?php echo ($stunum_16); ?></th>
				<th><?php echo ($submit_16); ?></th>
				<th><?php echo ($src_16); ?></th>
			</tr>
		</table>
	<div id="turnPage">
		<div id="lastPage"><a href="#"><strong>上一页</strong></a></div>
		<div id="nextPage"><a href="#"><strong>下一页</strong></a></div>
		<button id="Scores" type="submit">评分</button>
	</div>
</div>
</body>
</html>