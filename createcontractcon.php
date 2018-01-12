<?php
session_start();
require_once('connect.php');



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage contract</title>
	<link href="css/maincss/bootstrap.min.css" rel="stylesheet">
	<link href="css/maincss/font-awesome.min.css" rel="stylesheet">
	<link href="css/maincss/datepicker3.css" rel="stylesheet">
	<link href="css/maincss/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
  <?php
  $gender = $_POST["gender"];
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $program = $_POST["program"];
  $idcard = $_POST["idcard"];
  $studentid = $_POST["studentid"];
  $mail = $_POST["mail"];
  $cellphone = $_POST["telephone"];
  $residenttype = $_POST["residenttype"];
  $nummonth = $_POST["nummonth"];
  $fromdate = $_POST["fromdate"];
  $todate = $_POST["todate"];
  $scholarship = $_POST["scholarship"];
  $scholarshipprice = $_POST["scholarshipprice"];
    # code...
  

  
  
    # code...
  

  ?>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
				</button>
				<a class="navbar-brand" href="main.php"><span>SIIT Dormitory</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images/pmod.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION["username"] ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="main.php"><img src="/icon/homeicon.png"> Home</a></li>
			<li><a href="Account.php"><img src="/icon/005-settings.png">  Manage Account</a></li>
			<li><a href="Room.php"><img src="/icon/003-agenda.png">  Manage Room</a></li>
			<li><a href="Booking.php"><img src="/icon/001-agenda-1.png">  Manage Booking</a></li>
			<li class="active"><a href="Contract.php"><img src="/icon/004-application.png"> Manage Contract</a></li>
			<li><a href="Report.php"><img src="/icon/002-business.png">  Manage Report</a></li>
			<li><a href="logout.php"><img src="/icon/circle.png">  Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="Contract.php">
					<img src="/icon/004-application.png">
				</a>
				</li>
				<li class="active"><a href="Contract.php">Manage contract</a></li>
				<li class="active"><a href="createcontractin.php">Create contract</a></li>
        <li class="active">Check Information</li>
			</ol>
		</div><!--bar top-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Check Information</h1>
			</div>
		</div><!--content table-->
		<!--form begin here-->
		<form class="form-horizontal" action="savecontracttodb.php" method="post">
			<div class="form-group">
				<label class="col-sm-3 control-label">Gender</label>
				<div class="col-sm-9">
                        <input type="text"  value="<?php echo $gender ?>" class="form-control" name="gender" readonly>
        		</div>
			</div>
			<div class="form-group">
                    <label class="col-sm-3 control-label">Firstname</label>
                    <div class="col-sm-9">
                        <input type="text"  value="<?php echo $name ?>" class="form-control" name="name" readonly>
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Surname</label>
                    <div class="col-sm-9">
                        <input type="text"  value="<?php echo $surname ?>" class="form-control" name="surname" readonly>
                    </div>
            </div>
            <div class="form-group" >
                      <label class="col-sm-3 control-label">Program </label>
                      <div class="col-sm-9">
                        <input type="text"  value="<?php echo $program ?>" class="form-control" name="program" readonly>
                      </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">National Identify Card</label>
                    <div class="col-sm-9">
                        <input type="text"  value="<?php echo $idcard ?>" class="form-control" name="idcard" readonly>
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Student ID</label>
                    <div class="col-sm-9">
                        <input type="text"  value="<?php echo $studentid ?>" class="form-control" name="studentid" readonly>
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">E-mail </label>
                    <div class="col-sm-9">
                       <input type="text" value="<?php echo $mail ?>" class="form-control" name="mail" readonly>
                    </div>
            </div>
             <div class="form-group">
                    <label class="col-sm-3 control-label">Mobile Phone </label>
                    <div class="col-sm-9">
                       <input type="text" value="<?php echo $cellphone ?>" class="form-control" name="cellphone" readonly>
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Resident Type </label>
                    <div class="col-sm-9">
                       <input type="text" value="<?php echo $residenttype ?>" class="form-control" name="residenttype" readonly>
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Number of month </label>
                    <div class="col-sm-9">
                       <input type="text"  value="<?php echo $nummonth ?>" class="form-control" name="nummonth" readonly>
                    </div>
            </div>
           <div class="form-group">
                    <label class="col-sm-3 control-label">From date</label>
                    <div class="col-sm-9">
                       <input class="form-control" type="date" value="<?php echo $fromdate ?>" name="fromdate" readonly>
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">To date</label>
                    <div class="col-sm-9">
                       <input class="form-control" type="date" value="<?php echo $todate ?>" name="todate" readonly>
                    </div>
            </div>
            <?php
            if($scholarship !== '') {

              ?>
                <div class="form-group">
                        <label class="col-sm-3 control-label">Type of scholarship</label>
                        <div class="col-sm-9">
                           <input type="text"  value="<?php echo $scholarship ?>" class="form-control" name="scholarship" readonly>
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label">Price reduce by scholarship</label>
                        <div class="col-sm-9">
                           <input type="text"  value="<?php echo $scholarshipprice ?>" class="form-control" name="scholarshipprice" readonly>
                        </div>
                </div>
              <?php
            }
              ?>
            <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Confirm and Save</button>
                    </div>
            </div>
		</form>

	
	</div>

	
	<script src="js/mainjs/jquery-1.11.1.min.js"></script>
	<script src="js/mainjs/bootstrap.min.js"></script>
	<script src="js/mainjs/bootstrap-datepicker.js"></script>
	<script src="js/mainjs/custom.js"></script>
</body>
</html>