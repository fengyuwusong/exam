<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>设置</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL ?>set.css">
</head>
<body>
	<div id="box">
		<table align="center" id="MyTable">
			<tr id="even">
				<th class="Num"></th>
				<th class="set">试卷时间</th>
				<th width="200px;">考试时长</th>
				<th width="200px">考试题数</th>
				<th width="150px;">操作</th>

			</tr>
			<tr>
				<th class="Num">1</th>
				<th class="set"></th>
				<th width="150px"></th>
				<th width="150px"></th>
				<th>
					<input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet()">
				</th>
			</tr>
			<tr id="even">
				<th class="Num">2</th>
				<th class="set"></th>
				<th width="150px;"></th>
				<th width="150px"></th>
				<th><input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
			</tr>
			<tr>
				<th class="Num">3</th>
				<th class="set"></th>
				<th width="150px"></th>
				<th width="150px"></th>
				<th>
					<input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet()">
				</th>
			</tr>
			<tr id="even">
				<th class="Num">4</th>
				<th class="set"></th>
				<th width="150px;"></th>
				<th width="150px"></th>
				<th><input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
			</tr>
			<tr>
				<th class="Num">5</th>
				<th class="set"></th>
				<th width="150px"></th>
				<th width="150px"></th>
				<th>
					<input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet()">
				</th>
			</tr>
			<tr id="even">
				<th class="Num">6</th>
				<th class="set"></th>
				<th width="150px;"></th>
				<th width="150px"></th>
				<th><input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
			</tr>
			<tr>
				<th class="Num">7</th>
				<th class="set"></th>
				<th width="150px"></th>
				<th width="150px"></th>
				<th>
					<input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet()">
				</th>
			</tr>
			<tr id="even">
				<th class="Num">8</th>
				<th class="set"></th>
				<th width="150px;"></th>
				<th width="150px"></th>
				<th><input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
			</tr>
			<tr>
				<th class="Num">9</th>
				<th class="set"></th>
				<th width="150px"></th>
				<th width="150px"></th>
				<th>
					<input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet()">
				</th>
			</tr>
			<tr id="even">
				<th class="Num">10</th>
				<th class="set"></th>
				<th width="150px;"></th>
				<th width="150px"></th>
				<th><input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
			</tr>
			<tr>
				<th class="Num">11</th>
				<th class="set"></th>
				<th width="150px;"></th>
				<th width="150px"></th>
				<th><input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
			</tr>
			<tr  id="even">
				<th class="Num">12</th>
				<th class="set"></th>
				<th width="150px"></th>
				<th width="150px"></th>
				<th>
					<input type="button" id="edit" value="编辑" onclick="edit()"><input type="button" id="delet" value="删除" onclick="delet()">
				</th>
			</tr>
			
		</table>
		<div id="turnPage">
		<div id="lastPage"><a href="#"><strong>上一页</strong></a></div>
		<div id="nextPage"><a href="#"><strong>下一页</strong></a></div>
		<div id="skip">跳转到第<input type="text" id="page_num" name="number">页
			<button id="but" type="submit">确定</button>
		</div>
	</div>
	</div>
</body>
</html>