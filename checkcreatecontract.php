<?php
session_start();
require_once('connect.php');
$studentid = $_POST["studentid"];

$q = "SELECT * FROM booking WHERE Studentid = '$studentid' ";

$result = $mysqli->query($q);
if(!$result){
echo "Select failed. Error: ".$mysqli->error ;
}
while ($obj = mysqli_fetch_object($result)) {
        printf ("%s (%s)\n", $obj->Studentid, $obj->Name);
         $istudentid = $obj->Studentid;
    }
    if ($istudentid == $studentid ) {
    	header("Location: createcontract.php");
    	$_SESSION["studentid"] = $studentid;
    	die();

    	# code...
    }
    else{
    	header("Location: precontractfail.html");
    }

?>