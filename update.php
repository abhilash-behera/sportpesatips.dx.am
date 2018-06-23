<?php session_start(); ?>
<html>
<head>
<title>HOME </title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="ur motto is: life changer, nation changer and world changer." />
	
<?php include("include/bootstrap/bootstraplinks.php");?>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <link rel="stylesheet" href="css/jquery.timepicker.min.css">
  <script src="js/jquery.timepicker.min.js"></script>
  
<script >
	$('document').ready(function (){
		$('#date').datepicker({ dateFormat: "yy-mm-dd", minDate: 0 });
		 $('#time2').timepicker({'step': 15});	
	});
</script>

<script src="js/games.js"></script>		      
	
</head>
<body Style="background:red; padding:8px;"> 
<div class="container"  style="  border:solid white 2px; border-radius:10px;  background:rgba(255,255,255,0.7); padding:8px;">

<?php include('mainheader.php');?>
   
   <!-- ############################################################################################################### -->
	<!--My Profile-->
	<div class="col-sm-offset-2 col-sm-8" id="updats">
	<?php 
		require("include/db.php");
	$games = $mysqli->query("SELECT * FROM games WHERE recordId = '".$_GET['id']."' ");
	$gamedetails = $games->fetch_array();
	
	
	?>
	
		<center><h3>POST GAME</h3></center>
	<form id="gameupdate" action="" method="post" >
		<div class="col-sm-5" >
		<input type="hidden" class="form-control" name="id"  value="<?php echo $_GET['id']; ?>" placeholder="00:00" required /><br />
			
			TIME:
			<input type="text" class="form-control" name="time" id="time" value="<?php echo $gamedetails['time']; ?>" placeholder="00:00" required /><br />
			DATE:
			<input type="text" class="form-control" name="date" id="date" value="<?php echo $gamedetails['date']; ?>" placeholder="yy-mm-dd" required /><br />
			LEAGUE(optional):
			<input type="text" class="form-control" name="league" value="<?php echo $gamedetails['league']; ?>" placeholder="EPL / SPAN / ITALY " /><br />
			
		</div>
		
		<div class="col-sm-6" > 
			TEAM A:
			<input type="text" class="form-control" name="teamA" value="<?php echo $gamedetails['teamA']; ?>" placeholder="HOME-TEAM" required /><br />
			TEAM B:
			<input type="text" class="form-control" name="teamB" value="<?php echo $gamedetails['teamB']; ?>" placeholder="AWAY-TEAM" required /><br />
			
			TIP:
			<input type="text" class="form-control" name="tip" value="<?php echo $gamedetails['tip']; ?>" placeholder="TIP" required /><br />
			
			ODDS:
			<input type="text" class="form-control" name="odds" value="<?php echo $gamedetails['odds']; ?>" placeholder="1.75" required /><br />
			
			<div id="error"></div>
			<center><input type="submit" class="btn btn-success" name="odds" value="UPDATE" /></center>
			<hr />
		</div>
		
	</form>
	</div>
	
	

	
	</div>
	<!--end of My Profile-->
	
	<!-- ############################################################################################################### -->
	

</div>

</body>
</html>