
$(document).ready(function(){
	$("#stunum").blur(function(){ 
		var per=/^[0-9]*$/;
		if(!per.test(stunum.value)){
			$("#stunum_judge").css({"visibility":"visible"});
			$('#stunum_judge').html('学号只能是数字');
			$("#pw").attr('disabled',true);
		}
		else{
			$("#stunum_judge").css({"visibility":"hidden"});
			$("#pw").attr('disabled',false);	

		
		if($("input[name='ID']:checked").val()=='stu'){
			$.ajax({ 
			    type: "POST", 	
				url: "/exam/index.php/Home/login/check_name",
				data: {
					stunum: $("#stunum").val(), 
				},
				dataType: "json",
				success: function(res) {
					// console.log(res);
					if(res.Status==201){
						$("#stunum_judge").css({"visibility":"visible"});
						$("#stunum_judge").html(res.Message);
						$("#pw").attr('disabled',true);
					}else if(res.Status==200){
						$("#stunum_judge").css({"visibility":"hidden"});
						$("#pw").attr('disabled',false);
					}
				}
			});
		}
		else if($("input[name='ID']:checked").val()=='admin'){
			$.ajax({ 
			    type: "POST", 	
				url: "/exam/index.php/Admin/login/checkAdminname",
				data: {
					name: $("#stunum").val(), 
				},
				dataType: "json",
				success: function(res) {
					// console.log(res);
					if(res.Status==201){
						$("#stunum_judge").css({"visibility":"visible"});
						$("#stunum_judge").html(res.Message);
						$("#pw").attr('disabled',true);
					}else if(res.Status==200){
						$("#stunum_judge").css({"visibility":"hidden"});
						$("#pw").attr('disabled',false);
					}
				}
			});
		}
	}
	});
	$("#login").click(function(){
		if($("input[name='ID']:checked").val()=='stu'){
			$.ajax({ 
			    type: "POST", 	
				url: "/exam/index.php/Home/login/check_pw_verify",
				data: {
					stunum: $("#stunum").val(),
					stupw:  $("#pw").val(),
					code: $("#Verification").val(),  
				},
				dataType: "json",
				success: function(res) {
					// console.log(res);
					if(res.Status==201){
						$("#identify").attr("src","/exam/index.php/home/login/set_verify");
						alert("密码错误！");
					}else if(res.Status==200){
						 window.location.href="/exam/index.php/Home/login/start"; 
					}else if(res.Status==203){
						$("#identify").attr("src","/exam/index.php/home/login/set_verify");						
						 alert("考试时间已到，不能进入考试！");
					}else if(res.Status==204){
						$("#identify").attr("src","/exam/index.php/home/login/set_verify");
						alert('你已经提交试卷，无法再次进入答题！');
					}
					else if(res.Status==205){
						alert("验证码错误");
						$("#identify").attr("src","/exam/index.php/home/login/set_verify");
					}
				}
			});
		}
		else if($("input[name='ID']:checked").val()=='admin'){
			$.ajax({ 
			    type: "POST", 	
				url: "/exam/index.php/Admin/login/checkAdminpw",
				data: {
					name: $("#stunum").val(),
					pw:  $("#pw").val(), 
				},
				dataType: "json",
				success: function(res) {
					// console.log(res);
					if(res.Status==201){
						 alert("密码错误！");
					}else if(res.Status==200){
						 // alert("密码正确");
						 window.location.href='/exam/index.php/Admin/index/index';
					}
				}
			});
		}
	});
});
