$(document).ready(function(){

	var btn=document.getElementById('btn'); 
	function checked(question){
		var flag = false;
		var inputs = question.find('input');
		for(var i = 0; i < inputs.length; i++){
			if(inputs[i].checked){
				flag = true;
				break;
			}
		}
		return flag;
	}
	if(window.addEventListener){
		btn.addEventListener("click",function(){
			var result = [];
			/*for(var i = 0; i < questions.length; i++){
				result.push(checked(questions[i]));
				//result[i] = checked(questions[i])
			}*/
			$('.question_all').each(function(){		
				result.push(checked($(this)));
			});
			changeStatu(result);
		})
	}
	if(window.attachEvent){
		btn.attachEvent("onclick",function(){
			var result = [];
			/*for(var i = 0; i < questions.length; i++){
				result.push(checked(questions[i]));
				//result[i] = checked(questions[i])
			}*/
			$('.question_all').each(function(){		
				result.push(checked($(this)));
			});
			changeStatu(result);
		});
	}



	function changeStatu(result){
		var count=0;
		for(var i = 0; i < result.length; i++){
			if(result[i]){
				$('.question_all').eq(i).css('border','1px solid white');
				$('.question_all').eq(i).find('.tips').css('visibility','hidden');
				//questions[i].style.border = "1px solid white";
			}else{
				count++;
				//questions[i].style.border = "1px solid red";
				$('.question_all').eq(i).css('border','1px solid red');
				$('.question_all').eq(i).find('.tips').css('visibility','visible');
			}
		}
		
		if(count!==0)
			alert("本页有"+count+"题未完成");
		if(count==0){
			$("#formD").submit();		
		}
		
	}

// 计时器 开始
	

window.onload = function() {
	var ques=document.getElementById('title').getElementsByTagName('ul');
	var flag=0;
	$.ajax({
		type: 'POST',
		url: '/exam/index.php/Home/index/getAnswer',
		data:{

		},
		dataType:"json",
		success:function(res){
			if(res.Status==200){
				var T=document.getElementById('title').getElementsByTagName('ul');
				for(var i=0;i<T.length;i++){
					var choose=T[i].getElementsByTagName('input');
					for(var j=0;j<choose.length;j++){
						if(choose[j].value==res.Answer[i]){
							choose[j].checked='checked';
							flag++;
						}
					}
				}
			    var speed=flag*10;
				$("#per").html(speed+"%");
				$('#do').height(speed+"%");				
				// for(var x=0;x<ques.length;x++){
				// 	// var a=ques[x].getElementsByTagName('input');
				// 	s=x+1;
				// 	var answer = $('input[name="'+s+'"]').filter(':checked').val();
				// 	// console.log(answer);
				// 	if(answer){
						
				// 	}
				// 	// for(var k=0;k<a.length;k++){
				// 	// 	a[k].click(function(){
				// 	// 		alert("saf");
				// 	// 	})
				// 	// }
				// 		// (function(){
				// 			// console.log(a.length)
				// 			// a[k].click(function(){
				// 				// flag++;
				// // 			// 	alert(flag)
				// 				// console.log(flag)
				// 			// })

				// 		// })(j)
				// 	}
			}		
		}
		
	})
	// alert(flag);
	
	// alert(flag)



	$.ajax({ 
		    type: "POST", 	
			url: "/exam/index.php/Home/index/getTime",
			data: {

			},
			dataType: "json",
			success: function(res) {
				if(res.Status==200){
					var y=parseInt(res.Time/60/60);
					var x=parseInt(res.Time/60-y*60),interval;
					var s=parseInt(res.Time-60*x-60*60*y);
					var Countdown =document.getElementById('Countdown');
					var d = new Date("2222/2/2 ," + y + ":" + x + ":"+s);
					interval = setInterval(function() {
						var h = d.getHours();
						var m = d.getMinutes();
						var s = d.getSeconds();
						h = h < 10 ? "0" + h : h;
						m = m < 10 ? "0" + m : m;
						s = s < 10 ? "0" + s : s;
						Countdown.innerHTML = h + ":" + m + ":" + s;
						if (m == 0 && s == 0 && h == 0) {
							$('#formD').submit();
							clearInterval(interval);
							return;
						}
						d.setSeconds(s - 1);
						}, 1000);
					}
				}
		});

		// 定时进行ajax提交
		setInterval(function(){
			// var ques=document.getElementById('title').getElementsByTagName('ul');
			var str='';
			for(var i=0;i<ques.length;i++){
				var a=ques[i].getElementsByTagName('input');
				var flag=0;
				for(var j=0;j<a.length;j++){
					(function(){
						if(a[j].checked){
							val=a[j].value;
							str+=val+',';
							return;
						}else{
							flag++;
						}
						if(flag==4){
							str+=',';
						}
					})(j)
				 }
			}
			// alert(str);
				$.ajax({ 
				    type: "POST", 	
					url: "/exam/index.php/Home/index/saveAnswer",
					data: {
						answer: str,
					},
					dataType: "json",
					success: function(res) {
						// console.log(res);
						
					}
			});	
		},1000*5);
}

// 获取question	
function getElementsByClassName(n) { 
    var el = [],
        _el = document.getElementsByTagName('*');
    for (var i=0; i<_el.length; i++ ) {
       if (_el[i].className == n ) {
           el[el.length] = _el[i];
        }
   }
   return el;
}

})