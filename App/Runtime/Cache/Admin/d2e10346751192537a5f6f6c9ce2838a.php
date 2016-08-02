<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL ?>allquestion.css"/>
	<script type="text/javascript" src="<?php echo JS_URL ?>jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL ?>allquestion.js"></script>
</head>
<body>
	<div id="allquestion">
		<table align="center" id="MyTable">
			<tr id="even">
				<th class="Num"></th>
				<th class="question">问题</th>
				<th width="220px;">A</th>
				<th width="220px;">B</th>
				<th width="220px;">C</th>
				<th width="220px;">D</th>
				<th width="150px;">操作</th>
			</tr>
    		<tr>
                <th class="Num" id="num_1"></th>
                <th class="question" id="question_1">
                </th>
                <th id="addedit" class="answer_1_1"><label></label></th>
                <th id="addedit" class="answer_1_2"><label></label></th>
                <th id="addedit" class="answer_1_3"><label></label></th>
                <th id="addedit" class="answer_1_4"><label></label></th>
                <th>
                <input type="button" id="edit_1" value="编辑" onclick="edit(1)"><input type="button" id="delet" value="删除" onclick="delet()">
                </th>
            </tr>
            <tr id="even">
                <th class="Num" id="num_2"></th>
                <th class="question" id="question_2"></th>
                <th class="answer_2_1"></th>
                <th class="answer_2_2"></th>
                <th class="answer_2_3"></th>
                <th class="answer_2_4"></th>
                <th><input type="button" id="edit_2" value="编辑" onclick="edit(2)"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
            </tr>
            <tr>
                <th class="Num" id="num_3"></th>
                <th class="question" id="question_3">
                </th>
                <th id="addedit" class="answer_3_1"><label></label></th>
                <th id="addedit" class="answer_3_2"><label></label></th>
                <th id="addedit" class="answer_3_3"><label></label></th>
                <th id="addedit" class="answer_3_4"><label></label></th>
                <th>
                <input type="button" id="edit_3" value="编辑" onclick="edit(3)"><input type="button" id="delet" value="删除" onclick="delet()">
                </th>
            </tr>
            <tr id="even">
                <th class="Num" id="num_4"></th>
                <th class="question" id="question_4"></th>
                <th class="answer_4_1"></th>
                <th class="answer_4_2"></th>
                <th class="answer_4_3"></th>
                <th class="answer_4_4"></th>
                <th><input type="button" id="edit_4" value="编辑" onclick="edit(4)"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
            </tr><tr>
                <th class="Num" id="num_5"></th>
                <th class="question" id="question_5">
                </th>
                <th id="addedit" class="answer_5_1"><label></label></th>
                <th id="addedit" class="answer_5_2"><label></label></th>
                <th id="addedit" class="answer_5_3"><label></label></th>
                <th id="addedit" class="answer_5_4"><label></label></th>
                <th>
                <input type="button" id="edit_5" value="编辑" onclick="edit(5)"><input type="button" id="delet" value="删除" onclick="delet()">
                </th>
            </tr>
            <tr id="even">
                <th class="Num" id="num_6"></th>
                <th class="question" id="question_6"></th>
                <th class="answer_6_1"></th>
                <th class="answer_6_2"></th>
                <th class="answer_6_3"></th>
                <th class="answer_6_4"></th>
                <th><input type="button" id="edit_6" value="编辑" onclick="edit(6)"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
            </tr><tr>
                <th class="Num" id="num_7"></th>
                <th class="question" id="question_7">
                </th>
                <th id="addedit" class="answer_7_1"><label></label></th>
                <th id="addedit" class="answer_7_2"><label></label></th>
                <th id="addedit" class="answer_7_3"><label></label></th>
                <th id="addedit" class="answer_7_4"><label></label></th>
                <th>
                <input type="button" id="edit_7" value="编辑" onclick="edit(7)"><input type="button" id="delet" value="删除" onclick="delet()">
                </th>
            </tr>
            <tr id="even">
                <th class="Num" id="num_8"></th>
                <th class="question" id="question_8"></th>
                <th class="answer_8_1"></th>
                <th class="answer_8_2"></th>
                <th class="answer_8_3"></th>
                <th class="answer_8_4"></th>
                <th><input type="button" id="edit_8" value="编辑" onclick="edit(8)"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
            </tr><tr>
                <th class="Num" id="num_9"></th>
                <th class="question" id="question_9">
                </th>
                <th id="addedit" class="answer_9_1"><label></label></th>
                <th id="addedit" class="answer_9_2"><label></label></th>
                <th id="addedit" class="answer_9_3"><label></label></th>
                <th id="addedit" class="answer_9_4"><label></label></th>
                <th>
                <input type="button" id="edit_9" value="编辑" onclick="edit(9)"><input type="button" id="delet" value="删除" onclick="delet()">
                </th>
            </tr>
            <tr id="even">
                <th class="Num" id="num_10"></th>
                <th class="question" id="question_10"></th>
                <th class="answer_10_1"></th>
                <th class="answer_10_2"></th>
                <th class="answer_10_3"></th>
                <th class="answer_10_4"></th>
                <th><input type="button" id="edit_10" value="编辑" onclick="edit(10)"><input type="button" id="delet" value="删除" onclick="delet(this)"></th>
            </tr>
		</table>
	<div id="turnPage">
		<div id="lastPage"><?php echo ($last_page); ?></div>
		<div id="nextPage"><?php echo ($next_page); ?></div>
		<div id="skip">跳转到第<input type="text" id="page_num" name="number" >页
            <button id="#but" type="submit">确定</button>
		</div>
	</div>
</div>
<script type="text/javascript">
    // 提取题目，正确答案红色
    $.ajax({ 
        type: "POST",   
        url: "/exam/index.php/Admin/index/showQuestion",
        data: {
            page: <?php echo ($page); ?>, 
        },
        dataType: "json",
        success: function(res) {
            if(res.Status==200){
                for(var i=0;i<10;i++){
                    $('#num_'+(i+1)).html(res[i]['id']);
                    $('#question_'+(i+1)).html(res[i]['question']);
                    $('.answer_'+(i+1)+'_1').html(res[i]['answer_1']);
                    $('.answer_'+(i+1)+'_2').html(res[i]['answer_2']);
                    $('.answer_'+(i+1)+'_3').html(res[i]['answer_3']);
                    $('.answer_'+(i+1)+'_4').html(res[i]['answer_4']);
                    var answer=res[i]['answer'].split('_');
                    $('.answer_'+(i+1)+'_'+answer[1]).css("color",'red');
                } 
            }else if(res.Status=201){
                alert('不存在该页！');
            }
        }
    });
</script>
</body>
</html>