<?php session_start();?>
<?php 
if (!isset($_SESSION['pesatips'])) {
    header('Location: login.php');
    die();
}

?>
<html>
<head>

<title>HOME </title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	
<?php include("include/bootstrap/bootstraplinks.php");?>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <link rel="stylesheet" href="css/jquery.timepicker.min.css">
  <script src="js/jquery.timepicker.min.js"></script>
  
<script >
	$('document').ready(function (){
		$('#date').datepicker({ dateFormat: "yy-mm-dd",minDate: 0 });
		 $('#time1').timepicker({'step': 15});	
	});
</script>

<script src="js/games.js"></script>		      
	
</head>
<body Style="background:red; padding:8px;"> 
<div class="container"  style="  border:solid white 2px; border-radius:10px;  background:rgba(255,255,255,0.7); padding:8px;">

<?php include('mainheader.php');?>
   
   <!-- ############################################################################################################### -->
	<!--My Profile-->
	<h2 style="margin:auto">Welcome admin.</h2>
	<h4 style="margin:auto">Select a menu item at top to upload and view games</h4>
</div>

</body>
</html>