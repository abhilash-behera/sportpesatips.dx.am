<?php 
session_start();

session_unset($_SESSION['pesatips']);

header("Location: login.php");

?>