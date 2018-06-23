<center><h3>POSTED GAMES</h3></center>
	<?php
	require("include/db.php");
	$games = $mysqli->query("SELECT * FROM games ORDER BY recordID desc limit 30 ");
	while($gamedetails = $games->fetch_array()){
		
		//if status is pending , lost, or won
		if($gamedetails['status'] == "upcoming"){
			
			echo '
			<table border=0 width=100% style="font-size:10px;font-weight:bold;">
				<tr> 	<td width=25% style="padding:5px;"> '.$gamedetails['time'].' </td>	<td width=50%> '.$gamedetails['teamA'].' </td>				<td width=25% align="right"> '.$gamedetails['teamAscore'].' </td>		 	</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['date'].' </td>			<td> '.$gamedetails['teamB'].' </td>				 		<td align="right"> '.$gamedetails['teamBscore'].' </td>		</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['league'].' </td>	 		<td style="color:blue;"> '.$gamedetails['tip'].' </td>	<td align="right" style="color:blue;"> <span class="pull-left">@ '.$gamedetails['odds'].'</span>  <img width=10px height=10px src=img/ajax-loader.gif> </td>							</tr>
				<tr>	<td style="padding:5px;" colspan=3>  
				
					<button class="btn btn-danger btn-sm " onclick="del('.$gamedetails['recordID'].')" > <span class="glyphicon glyphicon-trash"></span> DELETE </button>
					<a href="update.php?id='.$gamedetails['recordID'].'" ><button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-edit"></span> Edit </button></a>
					<span class="pull-right"> <a href="results.php?id='.$gamedetails['recordID'].'" ><button type="button" class="btn btn-success btn-xs" > Update Result </button></a> </span>					
				</td></tr>
			
			</table>
			<hr />
			';			
			
		}else if($gamedetails['status'] == "won"){
			
			echo '
			<table border=0 width=100% style="font-size:10px;font-weight:bold;">
				<tr> 	<td width=25% style="padding:5px;"> '.$gamedetails['time'].' </td>	<td width=50%> '.$gamedetails['teamA'].' </td>				<td width=25% align="right"> '.$gamedetails['teamAscore'].' </td>		 	</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['date'].' </td>			<td> '.$gamedetails['teamB'].' </td>				 		<td align="right"> '.$gamedetails['teamBscore'].' </td>		</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['league'].' </td>	 		<td style="color:green;"> '.$gamedetails['tip'].' </td>	    <td align="right" style="color:green;"> <span class="pull-left">@ '.$gamedetails['odds'].'</span>  <span class="glyphicon glyphicon-ok"></span> </td>							</tr>
				<tr>	<td style="padding:5px;" colspan=3>  
				
					<button class="btn btn-danger btn-sm " onclick="del('.$gamedetails['recordID'].')" > <span class="glyphicon glyphicon-trash"></span> DELETE </button>
					<a href="update.php?id='.$gamedetails['recordID'].'" ><button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-edit"></span> Edit </button></a>
					<span class="pull-right"> <a href="results.php?id='.$gamedetails['recordID'].'" ><button type="button" class="btn btn-success btn-xs" > Update Result </button></a> </span>					
				</td></tr>
			
			</table>
			<hr />
			';			
			
		}if($gamedetails['status'] == "lost"){
			
			echo '
			<table border=0 width=100% style="font-size:10px;font-weight:bold;">
				<tr> 	<td width=25% style="padding:5px;"> '.$gamedetails['time'].' </td>	<td width=50%> '.$gamedetails['teamA'].' </td>				<td width=25% align="right"> '.$gamedetails['teamAscore'].' </td>		 	</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['date'].' </td>			<td> '.$gamedetails['teamB'].' </td>				 		<td align="right"> '.$gamedetails['teamBscore'].' </td>		</tr>
				<tr>	<td style="padding:5px;"> '.$gamedetails['league'].' </td>	 		<td style="color:red;"> '.$gamedetails['tip'].' </td>		<td align="right" style="color:red;"> <span class="pull-left">@ '.$gamedetails['odds'].'</span>  <span class="glyphicon glyphicon-remove-sign"></span> </td>							</tr>
				<tr>	<td style="padding:5px;" colspan=3>  
				
					<button class="btn btn-danger btn-sm " onclick="del('.$gamedetails['recordID'].')" > <span class="glyphicon glyphicon-trash"></span> DELETE </button>
					<a href="update.php?id='.$gamedetails['recordID'].'" ><button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-edit"></span> Edit </button></a>
					<span class="pull-right"> <a href="results.php?id='.$gamedetails['recordID'].'" ><button type="button" class="btn btn-success btn-xs" > Update Result </button></a> </span>					
				</td></tr>
			
			</table>
			<hr />
			';
			
		}
	}
	?>