<?php session_start();?>
<?php
if (!isset($_SESSION['pesatips'])) {
    header('Location: login.php');
    die();
}

?>
<html>
<head>
	<title>Sure Tips</title>
 	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="ur motto is: life changer, nation changer and world changer." />

	<?php include "include/bootstrap/bootstraplinks.php";?>

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

	<?php include 'mainheader.php';?>
	<script>
		document.getElementById("sure-tips").style.color="black";
		document.getElementById("sure-tips").style.fontWeight="bold";
		document.getElementById("sure-tips").style.fontSize="1.1em";
	</script>

   <!-- ############################################################################################################### -->
	<!--My Profile-->

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<center><h3>POST Sure Tips</h3></center>
				<form id="sure_gamepost" action="" method="post" >
					<div class="col-sm-5" >
						TIME:
						<input type="text" class="form-control" name="time" id="time" placeholder="00:00" required /><br />
						DATE:
						<input type="text" class="form-control" name="date" id="date" placeholder="yy-mm-dd" required /><br />
						LEAGUE(optional):
						<input type="text" class="form-control" name="league" id="league" placeholder="EPL / SPAN / ITALY " /><br />

					</div>

					<div class="col-sm-6" >
						TEAM A:
						<input type="text" class="form-control" name="teamA" id="teamA" placeholder="HOME-TEAM" required /><br />
						TEAM B:
						<input type="text" class="form-control" name="teamB" id="teamB" placeholder="AWAY-TEAM" required /><br />

						TIP:
						<input type="text" class="form-control" name="tip" id="tip" placeholder="TIP" required /><br />

						ODDS:
						<input type="text" class="form-control" name="odds" id="odds" placeholder="1.75" required /><br />

						<div id="error"></div>
						<center><input type="submit" class="btn btn-success"  value="ADD" /></center>
						<hr />
					</div>
				</form>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 " id="games" >
				<center><h3>Sure Tips</h3></center>
				<?php

if (date("H") == '23' || date("H") == '22' || date("H") == '21') {
    $mysay = date("d") + 1;
    $query = "SELECT * FROM sure_tips WHERE date = '" . date("Y") . "-" . date("m") . "-" . $mysay . "' ORDER BY date desc,time desc limit 30 ";

} else {
    $query = "SELECT * FROM sure_tips WHERE date = CURDATE() ORDER BY date desc,time desc limit 30 ";
}

require "include/db.php";
$games = $mysqli->query($query);

$count = 0;
while ($gamedetails = $games->fetch_array()) {

    //if status is pending , lost, or won
    if ($gamedetails['status'] == "upcoming") {

        echo '
						<table border=0 width=100% style="font-size:10px;font-weight:bold;">
							<tr> 	<td width=25% style="padding:5px;"> ' . $gamedetails['time'] . ' </td>	<td width=50%> ' . $gamedetails['teamA'] . ' </td>				<td width=25% align="right"> ' . $gamedetails['teamAscore'] . ' </td>		 	</tr>
							<tr>	<td style="padding:5px;"> ' . $gamedetails['date'] . ' </td>			<td> ' . $gamedetails['teamB'] . ' </td>				 		<td align="right"> ' . $gamedetails['teamBscore'] . ' </td>		</tr>
							<tr>	<td style="padding:5px;"> ' . $gamedetails['league'] . ' </td>	 		<td style="color:blue;"> ' . $gamedetails['tip'] . ' </td>	<td align="right" style="color:blue;"> <span class="pull-left">@ ' . $gamedetails['odds'] . '</span>  <img width=10px height=10px src=img/ajax-loader.gif> </td>							</tr>
							<tr>	<td style="padding:5px;" colspan=3>

								<button class="btn btn-danger btn-sm " onclick="del_sure(' . $gamedetails['recordID'] . ')" > <span class="glyphicon glyphicon-trash"></span> DELETE </button>
								<a href="update_sure.php?id=' . $gamedetails['recordID'] . '" ><button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-edit"></span> Edit </button></a>
								<span class="pull-right"> <a href="results_sure.php?id=' . $gamedetails['recordID'] . '" ><button type="button" class="btn btn-success btn-xs" > Update Result </button></a> </span>
							</td></tr>

						</table>
						<hr />
						';

    } else if ($gamedetails['status'] == "won") {

        echo '
						<table border=0 width=100% style="font-size:10px;font-weight:bold;">
							<tr> 	<td width=25% style="padding:5px;"> ' . $gamedetails['time'] . ' </td>	<td width=50%> ' . $gamedetails['teamA'] . ' </td>				<td width=25% align="right"> ' . $gamedetails['teamAscore'] . ' </td>		 	</tr>
							<tr>	<td style="padding:5px;"> ' . $gamedetails['date'] . ' </td>			<td> ' . $gamedetails['teamB'] . ' </td>				 		<td align="right"> ' . $gamedetails['teamBscore'] . ' </td>		</tr>
							<tr>	<td style="padding:5px;"> ' . $gamedetails['league'] . ' </td>	 		<td style="color:green;"> ' . $gamedetails['tip'] . ' </td>	    <td align="right" style="color:green;"> <span class="pull-left">@ ' . $gamedetails['odds'] . '</span>  <span class="glyphicon glyphicon-ok"></span> </td>							</tr>
							<tr>	<td style="padding:5px;" colspan=3>

								<button class="btn btn-danger btn-sm " onclick="del_sure(' . $gamedetails['recordID'] . ')" > <span class="glyphicon glyphicon-trash"></span> DELETE </button>
								<a href="update_sure.php?id=' . $gamedetails['recordID'] . '" ><button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-edit"></span> Edit </button></a>
								<span class="pull-right"> <a href="results_sure.php?id=' . $gamedetails['recordID'] . '" ><button type="button" class="btn btn-success btn-xs" > Update Result </button></a> </span>
							</td></tr>

						</table>
						<hr />
						';

    }if ($gamedetails['status'] == "lost") {

        echo '
						<table border=0 width=100% style="font-size:10px;font-weight:bold;">
							<tr> 	<td width=25% style="padding:5px;"> ' . $gamedetails['time'] . ' </td>	<td width=50%> ' . $gamedetails['teamA'] . ' </td>				<td width=25% align="right"> ' . $gamedetails['teamAscore'] . ' </td>		 	</tr>
							<tr>	<td style="padding:5px;"> ' . $gamedetails['date'] . ' </td>			<td> ' . $gamedetails['teamB'] . ' </td>				 		<td align="right"> ' . $gamedetails['teamBscore'] . ' </td>		</tr>
							<tr>	<td style="padding:5px;"> ' . $gamedetails['league'] . ' </td>	 		<td style="color:red;"> ' . $gamedetails['tip'] . ' </td>		<td align="right" style="color:red;"> <span class="pull-left">@ ' . $gamedetails['odds'] . '</span>  <span class="glyphicon glyphicon-remove-sign"></span> </td>							</tr>
							<tr>	<td style="padding:5px;" colspan=3>

								<button class="btn btn-danger btn-sm " onclick="del_sure(' . $gamedetails['recordID'] . ')" > <span class="glyphicon glyphicon-trash"></span> DELETE </button>
								<a href="update_sure.php?id=' . $gamedetails['recordID'] . '" ><button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-edit"></span> Edit </button></a>
								<span class="pull-right"> <a href="results_sure.php?id=' . $gamedetails['recordID'] . '" ><button type="button" class="btn btn-success btn-xs" > Update Result </button></a> </span>
							</td></tr>

						</table>
						<hr />
						';

    }
    $count++;
}

// if($count==0){

//     echo '
//     <center><h3>Today\'s Games will be posted soon. <br />Please check after some time.</h3></center>
//     ';
// }
?>
			</div>

		</div>
	</div>

	<!--end of My Profile-->

	<!-- ############################################################################################################### -->


</div>

</body>
</html>