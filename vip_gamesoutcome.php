<?php 

require("include/db.php");
$mysqli->query("UPDATE `vip_games` SET `teamAscore` = '".$_POST['teamAscore']."', `teamBscore` = '".$_POST['teamBscore']."', `status` = '".$_POST['status']."' WHERE `recordID` = '".$_POST['id']."';") or die($mysqli->error . __LINE__);

?>