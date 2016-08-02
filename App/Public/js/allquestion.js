function delet(){
	 var r=confirm("是否确定删除？")
	  if (r==true)
	    {
	   	 alert("已删除")

	    }
	  else
	    {

	    }
}


	function edit(i){
			var question='#question_'+i;
			var answer_1='.answer_'+i+'_1';
			var answer_2='.answer_'+i+'_2';
			var answer_3='.answer_'+i+'_3';
			var answer_4='.answer_'+i+'_4';
			var edit='#edit_'+i;
			if($(edit).val()=='编辑'){
			     var question_text=$(question).text();
			     var answer_1_text=$(answer_1).text();
			     var answer_2_text=$(answer_2).text();
			     var answer_3_text=$(answer_3).text();
			     var answer_4_text=$(answer_4).text();
				 var queText = '<textarea  cols="15" rows="5" class="T" id="editing_question"  style="resize:none" >'+question_text+'</textarea>';
				 var ansText_1 = '<textarea  cols="15" rows="5" class="T" id="editing_1"  style="resize:none" >'+answer_1_text+'</textarea>';
				 var ansText_2 = '<textarea  cols="15" rows="5" class="T" id="editing_2"  style="resize:none" >'+answer_2_text+'</textarea>';
				 var ansText_3 = '<textarea  cols="15" rows="5" class="T" id="editing_3"  style="resize:none" >'+answer_3_text+'</textarea>';
				 var ansText_4 = '<textarea  cols="15" rows="5" class="T" id="editing_4"  style="resize:none" >'+answer_4_text+'</textarea>';
				 $(question).append(queText);
				 $(answer_1).append(ansText_1); 
				 $(answer_2).append(ansText_2);
				 $(answer_3).append(ansText_3);
				 $(answer_4).append(ansText_4);
				 $(edit).val('确定');
			}else if($(edit).val()=='确定'){
				$(question).html($('#editing_question').val());
				$(answer_1).html($('#editing_1').val());
				$(answer_2).html($('#editing_2').val());
				$(answer_3).html($('#editing_3').val());
				$(answer_4).html($('#editing_4').val());
				$(edit).val('编辑');
			}

		
			
		

	}
	
