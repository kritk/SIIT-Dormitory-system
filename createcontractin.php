<?php
session_start();

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
				<li class="active">Create contract</li>
			</ol>
		</div><!--bar top-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Create Contract</h1>
			</div>
		</div><!--content table-->
		<!--form begin here-->
		<form class="form-horizontal" action="createcontractcon.php" method="post">
			<div class="form-group">
				<label class="col-sm-3 control-label">Gender</label>
				<div class="col-sm-9 radio-button">
                  <label class="radio"><input type="radio" name="gender" value="Male" checked >Mr.</label>
                  <label class="radio"><input type="radio" name="gender" value="Female">Miss</label>
          		</div>
			</div>
			<div class="form-group">
                    <label class="col-sm-3 control-label">Firstname</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Name" class="form-control" autofocus name="name">
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Surname</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Surname" class="form-control" name="surname" >
                    </div>
            </div>
            <div class="form-group" >
                      <label class="col-sm-3 control-label">Program </label>
                      <div class=" dropdown">
                            <select class="selectpicker" name="program">
                              <option value="Che">ChE</option>
                              <option value="CE">CE</option>
                              <option value="CPE">CPE</option>
                              <option value="EC">EC</option>
                              <option value="EM">EM</option>
                              <option value="IE">IE</option>
                              <option value="IT">IT</option>
                              <option value="MT">MT</option>
                              <option value="ME">ME</option>
                            </select>
                      </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Student ID</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Or other" class="form-control" name="idcard">
                    </div>
            </div>
            
            <div class="form-group">
                    <label class="col-sm-3 control-label">E-mail </label>
                    <div class="col-sm-9">
                       <input type="text"  placeholder="mail" class="form-control" name="mail">
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Resident Type </label>
                      <div class=" dropdown">
                            <select class="selectpicker" name="residenttype" id="myselect" onchange="displayfriend()">
                              <option value="Type 1 The tenant intends to stay alone with the use of both A and B rooms during the rental period." selected>Type 1 The tenant intends to stay alone with the use of both A and B rooms during the rental period.</option>
                              <option value="Type 2   The tenant stays with his/her specified roommate.">Type 2   The tenant stays with his/her specified roommate.</option>
                              <option value="Type 3  The tenant stays with a roommate that the institute has assigned.">Type 3  The tenant stays with a roommate that the institute has assigned.</option>
                            </select>
                      </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Number of month </label>
                    <div class="col-sm-9">
                       <input type="text"  placeholder="number" class="form-control" name="nummonth">
                    </div>
            </div>
           <div class="form-group">
                    <label class="col-sm-3 control-label">From date</label>
                    <div class="col-sm-9">
                       <input class="form-control" type="date" value="2018-01-01" name="fromdate">
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">To date</label>
                    <div class="col-sm-9">
                       <input class="form-control" type="date" value="2018-01-01" name="todate">
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Type of scholarship</label>
                    <div class="col-sm-9">
                       <input type="text"   class="form-control" name="scholarship">
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Price reduce by scholarship</label>
                    <div class="col-sm-9">
                       <input type="text"  placeholder="Please specific" class="form-control" name="scholarshipprice">
                    </div>
            </div>
            <script>
            function displayfriend() {
            var x = document.getElementById("myselect").value;
            var y = "Type 2   The tenant stays with his/her specified roommate.";

            if (x == y) {
            document.getElementById("txt1").style.display = '';
             
            }
            else{
              document.getElementById("txt1").style.display = 'none';
              
            }
            }
            </script>
            <body onload="displayfriend()">

            <div id="txt1">
              <div class="form-group">
                    <label class="col-sm-3 control-label">Friend Name </label>
                    <div class="col-sm-9">
                       <input type="text"  placeholder="Name" class="form-control" name="fname">
                    </div>
              </div>
              <div class="form-group">
                    <label class="col-sm-3 control-label">Friend Surname </label>
                    <div class="col-sm-9">
                       <input type="text"  placeholder="Surname" class="form-control" name="fsurname">
                    </div>
              </div>
              <div class="form-group">
                    <label class="col-sm-3 control-label">Friend Student ID </label>
                    <div class="col-sm-9">
                       <input type="text"  placeholder="Number" class="form-control" name="fstudentid">
                    </div>
              </div>
              <div class="form-group" >
                      <label class="col-sm-3 control-label">Friend Program </label>
                      <div class=" dropdown">
                            <select class="selectpicker" name="fprogram">
                              <option value="Che">ChE</option>
                              <option value="CE">CE</option>
                              <option value="CPE">CPE</option>
                              <option value="EC">EC</option>
                              <option value="EM">EM</option>
                              <option value="IE">IE</option>
                              <option value="IT">IT</option>
                              <option value="MT">MT</option>
                              <option value="ME">ME</option>
                            </select>
                      </div>
              </div>
              <div class="form-group">
                    <label class="col-sm-3 control-label">Friend Mobile </label>
                    <div class="col-sm-9">
                       <input type="text"  placeholder="Phone" class="form-control" name="fphone">
                    </div>
              </div>
            </div>
            <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Next</button>
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