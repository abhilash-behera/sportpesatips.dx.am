<?php 
require("include/db.php");
$mysqli->query("DELETE FROM `vip_games` WHERE `recordID` = '".$_POST['id']."'") or die($mysqli->error . __LINE__);
?>