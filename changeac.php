<?php session_destroy();
 require_once('connect.php');?>
 <?php
 $newname = $_POST["newname"];
 $newpassword = $_POST["newp"];

 
 $q = "UPDATE admin SET Username = '$newname', Password = '$newpassword' WHERE adminID = 1";
	$result = $mysqli->query($q);
	if(!$result){
	echo "Select failed. Error: ".$mysqli->error ;
	}
	header("Location: login.html");
 ?>