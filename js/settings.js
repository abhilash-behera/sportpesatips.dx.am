$('document').ready(function(){
	
	//Username Edit
	$("#error").html('');
	$("#usernameedit").click(function(){		
		$("#usernameedit").html('');
		$("#uedit").toggle();
		
	});
	
	$("#btn-cancle").click(function(){
		$("#uedit").fadeOut();
		$("#usernameedit").html('Edit');
		
	});
	
	$("#btn-saveuname").click(function(){
		if($("#username").val()== "" ){
			$("#error").fadeIn(500, function(){      
						$("#error").html('<span class=" alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> Please Enter new username!</span>');
				});
		}else{
		$("#error").html('');
		//change in database
		data = "username=set&newusername="+$("#username").val();					
				$.ajax({
					method: "post",
					url: "settingssaver.php",
					data: data,
					success: function(data){						
					$("#usernameedit").html('Edit');
					$("#uedit").fadeOut();
					$("#username").val("");
					document.location.reload()
					}	
				});
		}
	});
	
//password Edit
	
	$("#passwordedit").click(function(){		
		$("#passwordedit").html('');
		$("#pedit").toggle();
		
	});
	
	$("#btn-canclepass").click(function(){
		$("#pedit").fadeOut();
		$("#passwordedit").html('Edit');
		
	});
	
	$("#btn-savepass").click(function(){
		$("#error2").html('');
		if($("#password").val()== "" ){
			$("#error2").fadeIn(500, function(){      
						$("#error2").html('<span class=" alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> Please Enter new password!</span>');
				});
		}else if($("#password2").val()== "" ){
			$("#error2").fadeIn(500, function(){      
						$("#error2").html('<span class=" alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> Please confirm new password!</span>');
				});
		}else if($("#password").val() != $("#password2").val() ){
			$("#error2").fadeIn(500, function(){      
						$("#error2").html('<span class=" alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> Passwords does not match!</span>');
				});
		}else{
		$("#error2").html('');
		//change in database
		data = "pass=set&newpass="+$("#password").val();					
				$.ajax({
					method: "post",
					url: "settingssaver.php",
					data: data,
					success: function(data){						
					$("#passwordedit").html('Edit');
					$("#pedit").fadeOut();
					$("#username").val("");
					document.location.reload()
					}	
				});
		}
	});
		
		
	
	
});