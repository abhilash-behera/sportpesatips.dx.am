<?php session_start(); ?>
<html>
<head>
<title>HOME </title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="ur motto is: life changer, nation changer and world changer." />
	
<?php include("include/bootstrap/bootstraplinks.php");?>		      
	
</head>

<?php 
	require("include/db.php");
		$adimg = $mysqli->query("SELECT * FROM images");
		$count=0;
		while($imgdetails = $adimg->fetch_array()){$count++;}
		
		if($count==0){ 
		 echo '<body Style="background:red; padding:8px; ">';
		}else{
			echo '<body Style="background:red; padding:8px; padding-top:52px;">';
		}
	?>

 

<?php include("mybanner.php");?>

<div class="container"  style="  border:solid white 2px; border-radius:10px;  background:rgba(255,255,255,0.7); padding:8px;">
   
   <!-- ############################################################################################################### -->
	<!--My Profile-->
	<div class="col-sm-offset-4 col-sm-4 " >	
	
	<?php
	require("include/db.php");
	$games = $mysqli->query("SELECT * FROM games ORDER BY date desc,time desc limit 30 ");
	while($gamedetails = $games->fetch_array()){
		
		//if status is pending , lost, or won
		if($gamedetails['status'] == "upcoming"){
			
			echo '
			<table border=0 width=100% style="font-size:10px;font-weight:bold;">
				<tr> 	<td width=25% style="padding:5px;"> '.$gamedetails['time'].' </td>	<td width=50%> '.$gamedetails['teamA'].' </td>				<td width=25% align="right"> '.$gamedetails['teamAscore'].' </td>		 	</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['date'].' </td>			<td> '.$gamedetails['teamB'].' </td>				 		<td align="right"> '.$gamedetails['teamBscore'].' </td>		</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['league'].' </td>	 		<td style="color:blue;"> '.$gamedetails['tip'].' </td>	<td align="right" style="color:blue;"> <span class="pull-left">@ '.$gamedetails['odds'].'</span>  <img width=10px height=10px src=img/ajax-loader.gif> </td>							</tr>
			</table>
			<hr />
			';			
			
		}else if($gamedetails['status'] == "won"){
			
			echo '
			<table border=0 width=100% style="font-size:10px;font-weight:bold;">
				<tr> 	<td width=25% style="padding:5px;"> '.$gamedetails['time'].' </td>	<td width=50%> '.$gamedetails['teamA'].' </td>				<td width=25% align="right"> '.$gamedetails['teamAscore'].' </td>		 	</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['date'].' </td>			<td> '.$gamedetails['teamB'].' </td>				 		<td align="right"> '.$gamedetails['teamBscore'].' </td>		</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['league'].' </td>	 		<td style="color:green;"> '.$gamedetails['tip'].' </td>	    <td align="right" style="color:green;"> <span class="pull-left">@ '.$gamedetails['odds'].'</span>  <span class="glyphicon glyphicon-ok"></span> </td>							</tr>
			</table>
			<hr />
			';			
			
		}if($gamedetails['status'] == "lost"){
			
			echo '
			<table border=0 width=100% style="font-size:10px;font-weight:bold;">
				<tr> 	<td width=25% style="padding:5px;"> '.$gamedetails['time'].' </td>	<td width=50%> '.$gamedetails['teamA'].' </td>				<td width=25% align="right"> '.$gamedetails['teamAscore'].' </td>		 	</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['date'].' </td>			<td> '.$gamedetails['teamB'].' </td>				 		<td align="right"> '.$gamedetails['teamBscore'].' </td>		</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['league'].' </td>	 		<td style="color:red;"> '.$gamedetails['tip'].' </td>		<td align="right" style="color:red;"> <span class="pull-left">@ '.$gamedetails['odds'].'</span>  <span class="glyphicon glyphicon-remove-sign"></span> </td>							</tr>
			</table>
			<hr />
			';
			
		}
	}
	?>
	
	
	
	
		
		

	
	</div>
	<!--end of My Profile-->
	
	<!-- ############################################################################################################### -->
	

</div>

</body>
</html>