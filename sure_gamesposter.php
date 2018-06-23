<?php

if(isset($_POST['league'])){
	$league = $_POST['league'];
}else{
	$league = "---";
}

require("include/db.php");
$mysqli->query("INSERT INTO `sure_tips` (`time`, `date`, `league`, `teamA`, `teamAscore`, `teamB`, `teamBscore`, `tip`, `odds`, `status`) VALUES
 ('".$_POST['time']."','".$_POST['date']."','".$league."','".$_POST['teamA']."','-','".$_POST['teamB']."','-','".$_POST['tip']."','".$_POST['odds']."','upcoming')") or die($mysqli->error . __LINE__);
?>