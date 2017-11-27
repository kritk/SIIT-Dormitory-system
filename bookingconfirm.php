<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bookingconfirm</title>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
<body>
	<?php
	$namer = $_POST["namer"];
 	$sernamer = $_POST["surnamer"];
 	$studentidr = $_POST["studentidr"];
 	$gender = $_POST["gender"];
 	$school = $_POST["school"];
 	$emailr = $_POST["emailr"];
 	$mphoner = $_POST["mphoner"];
 	$phoner = $_POST["phoner"];
 	$option = $_POST["live"];

 	$fgender = $_POST["friend"];
 	$fname = $_POST["fname"];
 	$fsurname = $_POST["fsurname"];
 	$fstudentid = $_POST["friend"];
 	$femail = $_POST["femail"];
 	$fmphone = $_POST["fmphone"];
	?>
	<!--Jumbotron Section-->

             <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-3">SIIT Dormitory management system</h1>
                  </div>
             </div>

            <!--Nav bar go here -->
            <nav class="navbar navbar-expand-lg navbar-light ">

			          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
			            <ul class="navbar-nav">
			              <li class="nav-item">
			                <a class="nav-link" href="index.html">Home</a>
			              </li>
			              
			              <li class="nav-item">
			                <a class="nav-link" href="contract.html">Create Contract</a>
			              </li>
			              
			              <li class="nav-item active">
			                <a class="nav-link" href="booking.html">Create Booking</a>
			              </li>
			              <li class="nav-item">
			                <a class="nav-link" href="report.html">Reporting Problem</a>
			              </li>
			              <li class="nav-item">
			                <a class="nav-link" href="contact.html">Contact us</a>
			              </li>
			              <li class="nav-item">
			                <a class="nav-link" href="login.html">Staff login</a>
			              </li>
			            </ul>
			          </div>
       		 </nav>
       		 <form action="insertbooking.php" method="post">
       		 	<input type="text" name="namer" value="<?php echo $namer ?>" readonly>
       		 	<div class="button">
            		<button type="submit" class="btn btn-primary">Confirm</button>
        		</div>

       		 </form>




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>