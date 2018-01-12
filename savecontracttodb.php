<?php
session_start();
require_once('connect.php');

  $gender = $_POST["gender"];
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $program = $_POST["program"];
  $idcard = $_POST["idcard"];
  $studentid = $_POST["studentid"];
  $mail = $_POST["mail"];
  $Cellphone = $_POST["cellphone"];
  $residenttype = $_POST["residenttype"];
  $nummonth = $_POST["nummonth"];
  $fromdate = $_POST["fromdate"];
  $todate = $_POST["todate"];
  $scholarship = $_POST["scholarship"];
  $scholarshipprice = $_POST["scholarshipprice"];

$q = "INSERT INTO contract (Gender, Name, Surname, Program, studentID, IDcard, Cellphone, Email, fromdate, todate, Nummonth, Residenttype, scholarshiptype, scholarshipdiscount)
VALUES ('$gender', '$name', '$surname', '$program', '$studentid', '$idcard', '$Cellphone', '$mail', '$fromdate', '$todate', '$nummonth', '$residenttype', '$scholarship', '$scholarshipprice'); ";


$result = $mysqli->query($q);
if(!$result){
echo "Select failed. Error: ".$mysqli->error ;
}
else {
	header("Location: Contract.php");
	# code...
}
?>