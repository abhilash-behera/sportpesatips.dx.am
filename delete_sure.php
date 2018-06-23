<?php 
require("include/db.php");
$mysqli->query("DELETE FROM `sure_tips` WHERE `recordID` = '".$_POST['id']."'") or die($mysqli->error . __LINE__);
?>