<?php
session_start();
require_once('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Room</title>
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
			<li class="active"><a href="Room.php"><img src="/icon/003-agenda.png">  Manage Room</a></li>
			<li><a href="Booking.php"><img src="/icon/001-agenda-1.png">  Manage Booking</a></li>
			<li><a href="Contract.php"><img src="/icon/004-application.png"> Manage Contract</a></li>
			<li><a href="Report.php"><img src="/icon/002-business.png">  Manage Report</a></li>
			<li><a href="logout.php"><img src="/icon/circle.png">  Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<img src="/icon/003-agenda.png">
				</a></li>
				<li class="active">Manage room</li>
			</ol>
		</div><!--bar top-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Room</h1>
			</div>
		</div><!--content table-->
		<div class="form-group">
			<a href="" class="btn btn-info" role="button">Assign room to new contract</a>
		</div>
		<form action="" method="post">
			<div class="bootstrap-table">

				<div class="fixed-table-container">
					
					<div class="fixed-table-container">
					
					<div class="fixed-table-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th >
										<div class="th-inner sortable ">
									 Number
										</div>
										<div class="fht-cell">
										</div>
									</th>
									<th style="">
										<div class="th-inner sortable ">
										Room 
										</div>
										<div class="fht-cell">
										</div>

									</th>
									<th style="">
										<div class="th-inner sortable contractdatetable">Student ID
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
									<th class="">
										<div class="th-inner sortable">fromdate YY/MM/DD
										</div>
										<div class="fht-cell">
										</div>
									</th>
									<th style="">
										<div class="th-inner sortable">todate YY/MM/DD
										</div>
										<div class="fht-cell">
										</div>
									</th>
									<th style="">
										<div class="th-inner sortable ">Electricity 
										</div>
										<div class="fht-cell">
										</div>
									</th>
									<th style="">
										<div class="th-inner sortable ">Water 
										</div>
										<div class="fht-cell">
										</div>
									</th>
									<th style="">
										<div class="th-inner sortable">Price
										</div>
										<div class="fht-cell">
										</div>
									</th>
									<th style="">
										<div class="th-inner sortable"> Edit        
										</div>
										<div class="fht-cell">
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$q="SELECT room.roomnumber, room.roomtype, contract.name, contract.surname, contract.fromdate, contract.todate, contract.studentID, room.electricity, room.water, room.price
	  								FROM contract
	  								INNER JOIN  room ON room.contractID = contract.contractID";
								$result=$mysqli->query($q);
								if(!$result){
									echo "Select failed. Error: ".$mysqli->error ;
								break;
								}
								while($row=$result->fetch_array()){?>
								<form method="post" action="main.php">
									<tr data-index="0">
										<td style=""><?=$row['roomnumber']?></td>
										<td style=""><?=$row['roomtype']?></td>
										<td style=""><?=$row['studentID']?></td>
										<td style=""><?=$row['name']?></td>
										<td style=""><?=$row['surname']?></td>
										<td style=""><?=$row['fromdate']?></td>
										<td style=""><?=$row['todate']?></td>
										<td style=""><?=$row['electricity']?></td>
										<td style=""><?=$row['water']?></td>
										<td style=""><?=$row['price']?></td>
										<td style=""><input type="submit" class="btn btn-warning" value="main.php">Edit</td>
										
										<script>
											// Jquery event-handlers are automatically bound to
											// the element selected, so using "this" is safe
											function modifyAction(e) {
											    this.form.action = this.value;
											}

											// Bind the click-event on all input with type=submit
											$("input[type=submit]").click(modifyAction);
										</script>
								<?php 
							}
								$count=$result->num_rows;
								$result->free();
								 ?>
									</tr>
								</form>
							</tbody>
						</table>
					</div>
					</div>
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