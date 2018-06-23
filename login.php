<?php session_start(); ?>
<html>
<head>
<title>LOGIN </title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="ur motto is: life changer, nation changer and world changer." />
	
<?php include("include/bootstrap/bootstraplinks.php");?>



<script src="js/login.js"></script>		      
	
</head>
<body Style="background:red; padding:8px;"> 
<div class="container"  style="  border:solid white 2px; border-radius:10px;  background:rgba(255,255,255,0.7); padding:8px;">

<?php include('mainheader.php');?>
   
   <!-- ############################################################################################################### -->

        <!-- LOGIN-->
        <div class="row">
	<div class="col-md-offset-3 col-md-6" id="loginform" style="border:solid grey 2px; border-radius:5px;  background:rgba(255,255,255,1.0); padding:20px;">
		<form method="POST" action="">
		<center><h3>Log In to Admin Portal.</h3></center><hr />
		
		<div id="eeerror" > </div>
		
		Username:
		<input style="height:50px;font-size:14pt;" type="text" class="form-control"  id="username" placeholder="USERNAME" /><br />
		Password:
		<input style="height:50px;font-size:14pt;" type="password" class="form-control"  id="pass" placeholder="PASSWORD" /><br />
		<br /><br />
		<center>
			<button style="height:50px;font-size:14pt;" type="button" class="btn btn-success" id="btn-login">
				<span class="glyphicon glyphicon-log-in"></span> &nbsp; LOGIN
			</button>
		</center>
		
		</form>
	
	</div>
</div>

        <!--end of LOGIN -->

        <!-- ############################################################################################################### -->

</div>

</body>
</html>