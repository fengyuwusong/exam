$(document).ready(function(){
	var bodyWidth=document.body.clientWidth;
 	var leftl=bodyWidth-245;
 	$('#rightHeader_rm').css({'width':leftl+'px'});
 	var bodyHeight=document.body.clientHeight;
 	$('#main').css({"margin-top":-bodyHeight+110+'px'});
 	var lis=$('li');
 	for(var i=0;i<lis.length;i++){
 		(function(){
 			var index=i;
 			lis[index].onclick=function(){
 				if(index==0){
 					$('#A').css({'visibility':'visible'})
 					 $('#B').css({'visibility':'hidden'})
 					 $('#C').css({'visibility':'hidden'})
 					 $('#D').css({'visibility':'hidden'})
 					  $('#E').css({'visibility':'hidden'})
 					 $('iframe').attr('src','/exam/index.php/admin/index/showAllQuestion');
					
 				}
 				else if(index==1){
 					 $('#A').css({'visibility':'hidden'})
 					 $('#B').css({'visibility':'visible'})
 					 $('#C').css({'visibility':'hidden'})
 					 $('#D').css({'visibility':'hidden'})
 					  $('#E').css({'visibility':'hidden'})
 					 $('iframe').attr('src','/exam/index.php/admin/index/showAddQuestion');
 				}
 				else if(index==2){
 					$('#A').css({'visibility':'hidden'})
 					 $('#B').css({'visibility':'hidden'})
 					 $('#C').css({'visibility':'visible'})
 					 $('#D').css({'visibility':'hidden'})
 					  $('#E').css({'visibility':'hidden'})
 					  $('iframe').attr('src','/exam/index.php/admin/index/set');
 				}
 				else if(index==3){
 					$('#A').css({'visibility':'hidden'})
 					 $('#B').css({'visibility':'hidden'})
 					 $('#C').css({'visibility':'hidden'})
 					 $('#D').css({'visibility':'visible'})
 					  $('#E').css({'visibility':'hidden'})
 					 $('iframe').attr('src','/exam/index.php/admin/index/score');
 				}
 				else if(index==4){
 					$('#A').css({'visibility':'hidden'})
 					 $('#B').css({'visibility':'hidden'})
 					 $('#C').css({'visibility':'hidden'})
 					 $('#D').css({'visibility':'hidden'})
 					  $('#E').css({'visibility':'visible'})
 					 $('iframe').attr('src','/exam/index.php/admin/index/addstudent');
 				}
 			}
 		})(i)
 	}
 })