

$(document).ready(function() {
	

	function registBtnEvent(){
		function resetArea(obj){
			obj.val('');
		}
		//resetInputs is array
		var resetInputs = $('.qusGroup').find('input[class="reset"]');
		resetInputs.each(function(){
			this.onclick = function(e){
				var textarea = $(this).parent().parent().find('textarea');
				textarea.each(function(){
					resetArea($(this));
				})
			};
		})
	}
registBtnEvent();


	var index = 2;
	var even = 'id="even"';


	var addQesBtn = $('#addQes');
	addQesBtn.bind('click',function(){
		var addques='<tr class="qusGroup" ' + (index % 2 ? even : null) +'>' +
						'<th class="Num">'+index+'</th>'+
						'<th class="row1" id="addedit">'+
							'<textarea  cos="28" rows="5" class=question_'+index+'></textarea>'+
						'</th>'+
						'<th style="color:red;" id="addedit">'+
							'<input type="radio" name="answer_'+index+'" value="answer_1">'+
							'<textarea cols="15"  rows="5" class="answer_'+index+'_1"></textarea>'+
						'</th>'+
						'<th id="addedit" name="answer_2">'+
							'<input type="radio" name="answer_'+index+'" value="answer_'+index+'_2">'+
							'<textarea cols="15"  rows="5" class="answer_'+index+'_2"></textarea>'+
						'</th>'+
						'<th id="addedit" name="answer_3">'+
							'<input type="radio" name="answer_'+index+'" value="answer_'+index+'_3">'+
							'<textarea cols="15"  rows="5" class="answer_'+index+'_3"></textarea>'+
						'</th>'+
						'<th id="addedit" name="answer_4">'+
							'<input type="radio" name="answer_'+index+'" value="answer_'+index+'_4">'+
							'<textarea cols="15"  rows="5" class="answer_'+index+'_4"></textarea>'+
						'<th>'+
							'<input type="submit" id="edit" value="确定" onclick="">'+
							'<input type="button" class="reset" value="重置">'+
						'</th>'
					'</tr>';
		$('#qusTable').append(addques);
		index++;
		registBtnEvent();
	});


	$("#submit").click(function(){ 
		var flag=0;
		alert(index);
	// for(var i=1;i<index;i++){
	// 	var question=$(".question_"+i).val();
	// 	var answer_1=$(".answer_"+i+"_1").val();
	// 	var answer_2=$(".answer_"+i+"_2").val();
	// 	var answer_3=$(".answer_"+i+"_3").val();
	// 	var answer_4=$(".answer_"+i+"_4").val();
	// 	var answer=$('input');
	// 	alert(answer_1);
	// 	$.ajax({ 
	// 			    type: "POST", 	
	// 				url: "/exam/index.php/Admin/index/addQuestion",
	// 				data: {
	// 					question: 
	// 					answer_1:
	// 					answer_2:
	// 					answer_3:
	// 					answer_4:
	// 				},
	// 				dataType: "json",
	// 				success: function(res) {
	// 					if(res.Status==200){
	// 						flag++;
	// 					}
	// 				}
	// 			});
	// }
	// if(flag==index){
	// 	alert("添加成功！");
	// }
})








})






	
