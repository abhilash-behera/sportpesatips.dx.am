<?php 
require("include/db.php");
$mysqli->query("TRUNCATE TABLE `images`")or die($mysqli->error . __LINE__);
?>