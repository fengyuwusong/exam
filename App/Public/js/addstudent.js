

$(document).ready(function() {
	

	

	function registBtnEvent(){
		function resetArea(obj){
			obj.val('');
		}
		//resetInputs is array
		var resetInputs = $('.qusGroup').find('input[class="reset"]');
		resetInputs.each(function(){
			this.onclick = function(e){
				var input = $(this).parent().parent().find('input');
				input.each(function(){
					resetArea($(this));
				})
			};
		})
	}
registBtnEvent();


	var index = 1;
	var even = 'id="even"';
	

	var addQesBtn = $('#addQes');
	addQesBtn.bind('click',function(){
		var qusTemplete = '<tr class="qusGroup" ' + (index % 2 ? even : null) +'>' +
						'<th class="Num">'+ (index+1) +'</th>' + 
						'<th><input type="text" class="stunum_'+index+'"></th>' +
						'<th style="color:red;"><input type="text" class="name_'+index+'"></th>'+
						'<th><input type="text" class="pw_'+index+'"></th>' +
						'<th><input type="button" id="edit" value="确定" onclick=""><input type="button" class="reset" value="重置"></th>'+
						'</tr>';
		$('#qusTable').append(qusTemplete);
		index++;
		registBtnEvent();
	});




	var suc_flag=0;
	var err_flag=0;
	$("#submit").click(function(){ 
	for(var i=0;i<index;i++){
		var stunum=$(".stunum_"+i).val();
		var name=$(".name_"+i).val();
		var pw=$(".pw_"+i).val();
		$.ajax({ 
				    type: "POST", 	
					url: "/exam/index.php/Admin/index/addStu",
					data: {
						stunum: stunum,
						name: 	name,
						pw: 	pw,
					},
					dataType: "json",
					success: function(res) {
						console.log(res);
						if(res.Status==200){
							suc_flag++;
						}else if(res.Status==201){
							err_flag++;
							alert("第"+flag+"个不能为空！");
						}else if(res.Status==202){
							err_flag++;
							alert("第"+flag+"个用户已存在！")
						}
					}
				});
		if((suc_flag+err_flag)==index){
			alert("test");
		}
	}
})

})


	
