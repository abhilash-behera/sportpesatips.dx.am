<?php 

if(isset($_POST['league'])){
	$league = $_POST['league'];
}else{
	$league = "---";
}

require("include/db.php");
$mysqli->query("UPDATE `games` SET `time` = '".$_POST['time']."', `date` = '".$_POST['date']."', `league` = '".$league."', `teamA` = '".$_POST['teamA']."', `teamB` = '".$_POST['teamB']."',
 `tip` = '".$_POST['tip']."', `odds` = '".$_POST['odds']."' WHERE `recordID` = '".$_POST['id']."';") or die($mysqli->error . __LINE__);
?>