<?php
 require_once('connect.php');
 ?>
 <?php

$namer = $_POST["namer"];

 $q = "INSERT INTO booking (Name) VALUES ('$namer')";

 $result = $mysqli->query($q);
if(!$result){
echo "Select failed. Error: ".$mysqli->error ;
}
echo $_POST["namer"];
 ?>