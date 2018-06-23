<?php session_start();


if(isset($_POST['username'])){
	require_once 'include/db.php'; // The mysql database connection script
	
	$mysqli->query("UPDATE `admin` SET `username` = '".$_POST['newusername']."'  ") or die($mysqli->error . __LINE__);
	$_SESSION['pesatips']= $_POST['newusername'];

}

if(isset($_POST['pass'])){
	require_once 'include/db.php'; // The mysql database connection script
	
	$mysqli->query("UPDATE `admin` SET `password` = '".$_POST['newpass']."'  ") or die($mysqli->error . __LINE__);
	

}


?>