
$('document').ready(function(){
	
	$("#btn-login").click(function(){
		$("#eeerror").fadeOut();

		if( $("#username").val() == "" && $("#pass").val() == ""){
				$("#eeerror").fadeIn(500, function(){      
						$("#eeerror").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> please enter both username and password !</div>');
				});
		}else{
			
				var username=$("#username").val();
				var password=$("#pass").val();
				
				data = "username="+username+"&pass="+password;					
				$.ajax({
					method: "post",
					url: "loginverifier.php",
					data: data,
					beforeSend: function(){
						$("#eeerror").fadeOut();
						$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
					},
					success: function(data){	
						
						if(data=="admin"){					 
						  $("#loginform").html('<h1>Welcome to Admin Portal</h2><center> <img src="img/ajax-loader.gif" /> &nbsp; Signing In ...<br/><br/></center>');
						 setTimeout(' window.location.href = "index.php"; ',4000);
						}
						else{
							 
						  $("#eeerror").fadeIn(1000, function(){      
								$("#eeerror").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
							   $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
							 });
						}
					}
					
					
					
				});
	}
		
	});
		
		
	
	
});