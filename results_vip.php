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
		 $('#time').timepicker({'step': 15});	
	});
</script>

<script src="js/games.js"></script>		      
	
</head>
<body Style="background:red; padding:8px;"> 
<div class="container"  style="  border:solid white 2px; border-radius:10px;  background:rgba(255,255,255,0.7); padding:8px;">

<?php include('mainheader.php');?>
   
   <!-- ############################################################################################################### -->
	<!--My Profile-->
	<div class="col-sm-offset-3 col-sm-6" id="updats">
	<?php 
		require("include/db.php");
	$games = $mysqli->query("SELECT * FROM vip_games WHERE recordID = '".$_GET['id']."' ");
	$gamedetails = $games->fetch_array();
	?>
	
		<center><h3>GAME OUTCOME</h3></center>
	<form id="vip_updateresults" action="" method="post" >
	<input type="hidden" class="form-control" name="id"  value="<?php echo $gamedetails['recordID']; ?>" placeholder="00:00" required /><br />
		
		<table border=0 width=100% style="font-size:13px;font-weight:bold;">
				<tr> 	<td width=25% style="padding:5px;"> <?php echo $gamedetails['time'];?> </td>	<td width=50%> <?php echo $gamedetails['teamA'];?> </td>				<td width=25% align="right" style="padding:5px;"> <select placeholder="0" name="teamAscore" class="form-control" required> <option></option> <option>-</option>  <?php for($i=0;$i<11;$i++){echo "<option>".$i."</option>";}?> </select> </td>		 	</tr>
				<tr>	<td style="padding:5px;"> <?php echo $gamedetails['date']; ?> </td>			<td> <?php echo $gamedetails['teamB'];?> </td>				 		   <td align="right" style="padding:5px;"> <select placeholder="0" name="teamBscore" class="form-control" required> <option></option> <option>-</option>  <?php for($i=0;$i<11;$i++){echo "<option>".$i."</option>";}?> </select> </td>		</tr>
				<tr>	<td style="padding:5px;"> <?php echo $gamedetails['league']; ?> </td>	 		<td style="color:blue;"><?php echo $gamedetails['tip']; ?> </td>	<td align="right" style="padding:5px;"><select placeholder="Won/Lost"  name="status" class="form-control" required> <option></option> <option>upcoming</option> <option>won</option> <option>lost</option>   </select>  </td>							</tr>
				<tr>	<td style="padding:5px;" colspan=3>  
				
					<span class="pull-right"> <input type="submit" class="btn btn-success" name="odds" value="Post" /> </span>	
					
				</td></tr>
			
			</table>
			<div id="error"></div>
		
	</form>
	</div>
	
	

	
	</div>
	<!--end of My Profile-->
	
	<!-- ############################################################################################################### -->
	

</div>

</body>
</html>