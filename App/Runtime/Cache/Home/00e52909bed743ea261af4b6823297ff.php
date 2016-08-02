<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>选择题</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL ?>index.css"/>
	<script type="text/javascript" src="<?php echo JS_URL ?>jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL ?>index.js"></script>
</head>
<body>
<!-- 头部加东西 -->
<!-- <div id="header"><img src="main.jpg"></div>
 -->
 <!-- 计时器 -->
<div id="time">
		<div id="text">离测试结束时间仅剩:</div>
		<div id="Countdown"></div>
</div>
<!-- 进度条 -->
<div id="havedo">
	<div id="per">0%</div>
	<div id="speed">
		<div id="do"></div>
	</div>

</div>
<!-- 选择题区 -->
 <div class="chosing">
	<div id="title">	
	<form action="/exam/index.php/Home/index/submit" method="post" id="formD">
		<!-- 第一题 -->
		<?php echo ($question); ?>
		<!-- 下一页 -->
	<div class="nextPage">
		<input type="button"  name="next" value="提交" class="button" id="btn">
	</div>
	</form>
	</div>	
</div>

<!-- li与input -->
<script type="text/javascript">
var T=document.getElementById('title').getElementsByTagName('ul');
	var speed=0;
	var answerArr = [];
	// var Speedheight=1;
	function selectThePlatform(obj){
		var $radio=$(obj).find("input[type=radio]");
		var index=0;
		// console.log($radio)
		// console.log(obj)
		// // 进度条
		// var $other=$(obj).siblings().find("input[type=radio]");
		// alert($other.length)
		// for(var j=0;j<$other.length;j++){
		// 	if ($other[j].checked==false) {
		// 		// console.log(index);
  //       		index++;
  //      		}
		// }
		// if (index == 3) {
		// 	speed +=10;
		// }
		
		if(!$radio.is(":checked")){
			$radio.prop("checked",true);
		}
		// alert(count)
		var x=$radio.attr("name")
		$('.question_all').eq(x-1).css('border','1px solid white');
		$('.question_all').eq(x-1).find('.tips').css('opacity','0');
		// $("#per").html(speed+"%");
		// $('#do').height(speed+"%");	

	}
	
</script>
</body>
</html>