<?php
session_start();
require_once('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage booking</title>
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
			<li  class="active"><a href="Booking.php"><img src="/icon/001-agenda-1.png">  Manage Booking</a></li>
			<li><a href="Contract.php"><img src="/icon/004-application.png"> Manage Contract</a></li>
			<li><a href="Report.php"><img src="/icon/002-business.png">  Manage Report</a></li>
			<li><a href="logout.php"><img src="/icon/circle.png">  Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<img src="/icon/001-agenda-1.png">
				</a></li>
				<li class="active">Manage booking</li>
			</ol>
		</div><!--bar top-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Booking</h1>
			</div>
		</div><!--content table-->
		<div class="bootstrap-table">
			<div class="fixed-table-toolbar">
				<div class="columns btn-group pull-left">
					
					
					<!--indent for sorting column-->
				</div>
			</div>
			<div class="fixed-table-container">
				<div class="fixed-table-header">
					<table>
					</table>
				</div>
				<div class="fixed-table-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th style="">
									<div class="th-inner sortable">ID
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Gender
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Name
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Surname
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Student ID
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Curriculum
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">School
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">E-mail
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Mobile Phone
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Phone
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Option
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Friend Gender
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Friend Name
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Friend Surname
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Friend Student ID
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Friend E-mail
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Friend Mobilephone
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable"> Edit/Delete
									</div>
									<div class="fht-cell">
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$q="SELECT * FROM booking";
							$q = strtolower($q);
							$result=$mysqli->query($q);
							if(!$result){
								echo "Select failed. Error: ".$mysqli->error ;
							break;
							}
							while($row=$result->fetch_array()){?>

							<tr data-index="0">
								<td style=""><?=$row['bookingID']?></td>
								<td style=""><?=$row['Gender']?></td>
								<td style=""><?=$row['Name']?></td>
								<td style=""><?=$row['Surname']?></td>
								<td style=""><?=$row['Studentid']?></td>
								<td style=""><?=$row['Curriculum']?></td>
								<td style=""><?=$row['School']?></td>
								<td style=""><?=$row['Email']?></td>
								<td style=""><?=$row['Mobilephone']?></td>
								<td style=""><?=$row['Phone']?></td>
								<td style=""><?=$row['Option']?></td>
								<?php
								
							
							if ($row['Option'] == 1) { ?>

								<td style="">None</td>
								<td style="">None</td>
								<td style="">None</td>
								<td style="">None</td>
								<td style="">None</td>
								<td style="">None</td>
								<td style="">None</td>
								<?php
							}
							else{
								?>
								<td style=""><?=$row['Fgender']?></td>
								<td style=""><?=$row['Fname']?></td>
								<td style=""><?=$row['Fsurname']?></td>
								<td style=""><?=$row['Fstudentid']?></td>
								<td style=""><?=$row['Femail']?></td>
								<td style=""><?=$row['Fmobilephone']?></td>
								<td style="">None</td>
							<?php }
						}
							$count=$result->num_rows;
							$result->free();
							 ?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>



	</div>
	
	<script src="js/mainjs/jquery-1.11.1.min.js"></script>
	<script src="js/mainjs/bootstrap.min.js"></script>
	<script src="js/mainjs/bootstrap-datepicker.js"></script>
	<script src="js/mainjs/custom.js"></script>
</body>
</html>