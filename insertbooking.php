<?php
 require_once('connect.php');
 ?>
 <?php

$namer = $_POST["namer"];
$surnamer = $_POST["surnamer"];
$studentidr = $_POST["studentidr"];
$gender = $_POST["gender"];
$curriculumr = $_POST["curriculumr"];
$school = $_POST["school"];
$emailr = $_POST["emailr"];
$mphoner = $_POST["mphoner"];
$phoner = $_POST["phoner"];
$option = $_POST["option"];
/* friend */
if (isset($_POST["fgender"])) {
	$fgender = $_POST["fgender"];
	$fname = $_POST["fname"];
 	$fsurname = $_POST["fsurname"];
 	$fstudentid = $_POST["fstudentid"];
 	$femail = $_POST["femail"];
 	$fmphone = $_POST["fmphone"];

	# code...
	$q = "INSERT INTO booking (Gender, Name, Surname, Studentid, Curriculum, School, Email, Mobilephone, Phone, Option, Fgender, Fname, Fsurname, Fstudentid, Femail, Fmobilephone) VALUES ('$gender', '$namer', '$surnamer', '$studentidr', '$curriculumr', '$school', '$emailr', '$mphoner', '$phoner', '$option', '$fgender', '$fname', '$fsurname', '$fstudentid', '$femail', '$fmphone')";
	header("Location: index.html");
}
else{
	$q = "INSERT INTO booking (Gender, Name, Surname, Studentid, Curriculum, School, Email, Mobilephone, Phone, Option) VALUES ('$gender', '$namer', '$surnamer', '$studentidr', '$curriculumr', '$school', '$emailr', '$mphoner', '$phoner', '$option')";
	header("Location: index.html");
}

 

 $result = $mysqli->query($q);
if(!$result){
echo "Select failed. Error: ".$mysqli->error ;
}

 ?>