<?php
session_start();

require_once 'include/db.php'; // The mysql database connection script

$student = $mysqli->query("SELECT * FROM `admin` WHERE `username`='".$_POST['username']."' AND `password`='".$_POST['pass']."' ") or die($mysqli->error . __LINE__);
if ($student->num_rows > 0) {
	//setting session variables for the students
	$studentvar = $mysqli->query("SELECT * FROM `admin` WHERE `username`='".$_POST['username']."' AND `password`='".$_POST['pass']."' ") or die($mysqli->error . __LINE__);
	$row = $studentvar->fetch_array();
	$_SESSION['pesatips']= $row['username'];
	echo "admin";
	
	
}else{
	
	echo "wrong details";
	
}

?>