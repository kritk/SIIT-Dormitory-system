<?php session_start();
 require_once('connect.php');?>
 <?php
 $username = $_POST["username"];
 $password = $_POST["password"];


$q = "SELECT * FROM admin WHERE Username = '$username' AND Password = '$password' ";


$result = $mysqli->query($q);
if(!$result){
echo "Select failed. Error: ".$mysqli->error ;
}
while ($obj = mysqli_fetch_object($result)) {
        printf ("%s (%s)\n", $obj->Username, $obj->Password);
         $iusername = $obj->Username;
    	 $ipassword = $obj->Password;
    }
   
 if(($iusername == $username) && ($ipassword == $password)){
 	header("Location: main.php");
 	$_SESSION["username"] = $iusername;
	die();

 }






   



 ?>
