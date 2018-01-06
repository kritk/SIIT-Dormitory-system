<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bookingconfirm</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootcss/bootstrap.min.css">
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
	if( isset($_POST["friend"]) )
	{
		$fgender = $_POST["friend"];
	}
	$fname = $_POST["fname"];
	$fsurname = $_POST["fsurname"];
	$fstudentid = $_POST["fstudentid"];
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
					<a class="nav-link" href="booking.html" >Create Booking<span class="sr-only">(current)</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="report.html">Reporting Problem</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.html">Contact us</a>
				</li>

			</ul>
		</div>
	</nav>
	<form action="insertbooking.php" method="post">
		<div class="backgroundmain">
			<h2>Confirm Your Information</h2>


			<div class="div_wrapper form-inline">
				<div class="form-group">
					<label>Gender: </label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" name="gender" value="<?php echo $gender ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Name: </label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" name="namer" size="50" value="<?php echo $namer ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Surname:</label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" name="surnamer" size="50" value="<?php echo $surnamer ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Student ID:</label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" size="50" name="studentidr" value="<?php echo $studentidr ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Curriculum:</label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" size="50" name="curriculumr" value="<?php echo $curriculumr ?>">
					</div>
				</div>
				<div class="form-group">
					<label>School:</label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" size="50" name="school" value="<?php echo $school ?>">
					</div>
				</div>
				<div class="form-group">
					<label>E-mail:</label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" size="50" name="emailr" value="<?php echo $emailr ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Mobile Phone:</label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" size="50" name="mphoner" value="<?php echo $mphoner ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Phone:</label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" size="50" name="phoner" value="<?php echo $phoner ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Residence Type:</label>
					<div class="col-sm-4">
						<input type="text" readonly class="form-control-plaintext" size="50" name="option" value="<?php echo $option ?>">
					</div>
				</div>
			</div>
			<?php
			if (isset($_POST["friend"])) {
				?>
				<h2>Confirm Your Friend Information</h2>
				<div class="div_wrapper form-inline">
					<div class="form-group">
						<label>Friend Gender:</label>
						<div class="col-sm-4">
							<input type="text" readonly class="form-control-plaintext" size="50" name="fgender" value="<?php echo $fgender ?>">
						</div>
					</div>
					<div class="form-group">
						<label>Friend Name:</label>
						<div class="col-sm-4">
							<input type="text" readonly class="form-control-plaintext" size="50" name="fname" value="<?php echo $fname ?>">
						</div>
					</div>
					<div class="form-group">
						<label>Friend Surname:</label>
						<div class="col-sm-4">
							<input type="text" readonly class="form-control-plaintext" size="50" name="fsurname" value="<?php echo $fsurname ?>">
						</div>
					</div>
					<div class="form-group">
						<label>Friend Student ID:</label>
						<div class="col-sm-4">
							<input type="text" readonly class="form-control-plaintext" size="50" name="fstudentid" value="<?php echo $fstudentid ?>">
						</div>
					</div>
					<div class="form-group">
						<label>Friend E-mail:</label>
						<div class="col-sm-4">
							<input type="text" readonly class="form-control-plaintext" size="50" name="femail" value="<?php echo $femail ?>">
						</div>
					</div>
					<div class="form-group">
						<label>Friend Mobilephone:</label>
						<div class="col-sm-4">
							<input type="text" readonly class="form-control-plaintext" size="50" name="fmphone" value="<?php echo $fmphone ?>">
						</div>
					</div>
				</div>

					<?php
				}
				?>


			<div>
				<div class="button">
					<button type="submit" class="btn btn-primary">Confirm</button>
				</div>
			</div>
		</div>

	</form>




	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
