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
				<li><a href="#">
					<img src="/icon/004-application.png">
				</a></li>
				<li class="active">Manage contract</li>
			</ol>
		</div><!--bar top-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Contract</h1>
			</div>
		</div>
		<div class="form-group">
			<a href="createcontractin.php" class="btn btn-info" role="button">Create new contract</a>
		</div>


		<!--content table-->

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
					<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…
					</div>
					<table data-toggle="table" data-url="tables/data1.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" class="table table-hover">
						<thead>
							<tr>
								<th class="bs-checkbox " style="width: 36px; ">
									<div class="th-inner ">
										<input name="btSelectAll" type="checkbox">
									</div>
									<div class="fht-cell">

									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Item ID
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Item Name
										<span class="order">
											<span class="caret" style="margin: 10px 5px;">

											</span>
										</span>
									</div>
									<div class="fht-cell">
									</div>
								</th>
								<th style="">
									<div class="th-inner sortable">Item Price
									</div>
									<div class="fht-cell">
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr data-index="0">
								<td class="bs-checkbox">
									<input data-index="0" name="toolbar1" type="checkbox">
								</td>
								<td style="">9
								</td>
								<td style="">Item 9
								</td><td style="">$9
								</td>
							</tr>
							<tr data-index="1">
								<td class="bs-checkbox">
									<input data-index="1" name="toolbar1" type="checkbox">
								</td>
								<td style="">8
								</td>
								<td style="">Item 8
								</td>
								<td style="">$8
								</td>
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