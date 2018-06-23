<?php session_start();?>
<?php 
if (!isset($_SESSION['pesatips'])) {
    header('Location: login.php');
    die();
}

?>
<html>
<head>
<title>Settings </title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="where sportpesa winners are" />
		
<?php include("include/bootstrap/bootstraplinks.php");?>      
	<script src="js/settings.js"></script>
</head>
<body Style="background:red; padding:8px;"> 
<div class="container"  style="  border:solid white 2px; border-radius:10px;  background:rgba(255,255,255,0.7); padding:8px;">
<?php include("mainheader.php"); ?>

<div class="row">
	<div class="col-md-12">
		<center>
			<h2> General Account Settings </h2> 
			
		</center>
	</div>
</div>
<br /><br />
<div class="row">
	
	<div class="col-md-offset-3 col-md-6" >
	
		<table class="table table-responsive table-hover" style="background:white;">
			<tr>
				<td>
					Username: <b><?php echo $_SESSION['pesatips']; ?></b>  <span class="pull-right"> <button class="btn btn-link" id="usernameedit" > Edit</button> </span>  <br />
					<span id="uedit" hidden  >
					<span id="error"></span>
					<br />
					
						<input style="height:30px;font-size:12pt;" type="text"   id="username" placeholder="NEW USERNAME" /> 
						
						<button style="height:30px;font-size:12pt;" type="button" class="btn btn-primary" id="btn-saveuname" >
							SAVE
						</button>
						<span class="pull-right" >
							<button style="height:30px;font-size:12pt;" type="button" class="btn btn-danger" id="btn-cancle" >
								Cancle
							</button>
						</span>
					</span>
				</td>
			</tr>
			
			<tr>
				<td>
					Password: ******  <span class="pull-right"><button class="btn btn-link" id="passwordedit" > Edit</button></span> <br /> 
					<span id="pedit" hidden  >
					<span id="error2"></span>
					<br />
					
						<input style="height:30px;font-size:12pt;" type="password"   id="password" placeholder="NEW PASSWORD" /><br /> <br /> 
						<input style="height:30px;font-size:12pt;" type="password"   id="password2" placeholder="CONFIRM NEW PASSWORD" /> 
						&nbsp;&nbsp;
						<button style="height:30px;font-size:12pt;" type="button" class="btn btn-primary" id="btn-savepass" >
							SAVE
						</button>
						<span class="pull-right" >
							<button style="height:30px;font-size:12pt;" type="button" class="btn btn-danger" id="btn-canclepass" >
								Cancle
							</button>
						</span>
					</span>
				
				</td>
			</tr>
		</table>
		
		<br /><br /><br />
	
	</div>

	
	
	
</div>

</div>

</body>
</html>