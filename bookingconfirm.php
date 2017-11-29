<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bookingconfirm</title>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="css/confirm.css">
</head>
<body>
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
 	$option = $_POST["live"];
//roommate
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
       		 	<div class="backgroundmain">
       		 	<h2>Confirm Your Information</h2>


		       		 	<div class="div_wrapper">

		       		 		<div class="form-group row">
						    <label for="staticEmail" class="col-sm-2 col-form-label">Gender: </label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" value="<?php echo $gender ?>">
						    </div>
						  	</div>
						  	<div class="form-group row">
						    <label for="inputPassword" class="col-sm-2 col-form-label">Name: </label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" value="<?php echo $namer ?>">
						    </div>
						  	</div>
						  	<div class="form-group row">
						    <label for="staticEmail" class="col-sm-2 col-form-label">Surname:</label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" value="<?php echo $surnamer ?>">
						    </div>
						  	</div>
								<div class="form-group row">
						    <label for="staticEmail" class="col-sm-2 col-form-label">Student ID:</label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" value="<?php echo $studentidr ?>">
						    </div>
						  	</div>
								<div class="form-group row">
						    <label for="staticEmail" class="col-sm-2 col-form-label">Curriculum:</label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" value="<?php echo $curriculumr ?>">
						    </div>
						  	</div>
								<div class="form-group row">
						    <label for="staticEmail" class="col-sm-2 col-form-label">School:</label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" value="<?php echo $school ?>">
						    </div>
						  	</div>
								<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">E-mail:</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control-plaintext" value="<?php echo $emailr ?>">
								</div>
								</div>
								<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Mobile Phone:</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control-plaintext" value="<?php echo $mphoner ?>">
								</div>
								</div>
								<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Phone:</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control-plaintext" value="<?php echo $phoner ?>">
								</div>
								</div>
								<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Residence Type:</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control-plaintext" value="<?php echo $option ?>">
								</div>
								</div>

						</div>


		       		 	<div>
			       		 	<input type="text" name="namer" value="<?php echo $namer ?>" readonly>
			       		 	<div class="button">
			            		<button type="submit" class="btn btn-primary">Confirm</button>
			        		</div>
			        	</div>
			    </div>

       		 </form>




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
