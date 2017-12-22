<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Navigation Bar -->
	<?php include("navbar.php") ?>

	<!-- main content -->
	<div class="container">
		<h1>Revise Event</h1>
		<!--<div class="row">
			<label>Payments Made</label>
			<div class="row">
				<div class="col-lg-6">
					<label>1st Payment</label>
					<input type="text" id="" class="form-control">
				</div>
			</div>
			<div class="row">
				<a href="#" role="button" class="btn btn-primary">Add Payment</a>
			</div>
		</div>-->
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Event</th>
						<th>Date</th>
						<th>Time</th>
						<th>Client</th>
						<th>Location</th>
						<th>Handler</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><div class="row">
							<a href="event-revise-event.php" role="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span> Abc's Wedding </a>
							</div></td>
						<td><div class="row">Dec 22, 2017</div></td>
						<td>10:00</td>
						<td>Abc</td>
						<td>Baguio Cathedral</td>
						<td>Ichi</td>
					</tr>
					<tr>
						<td><div class="row">
							<a href="event-revise-event.php" role="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span> SLU's SCIS Night</a>
							</div></td>
						<td><div class="row">Dec 22, 2017</div></td>
						<td>19:00</td>
						<td>Some name</td>
						<td>Burgos Gym, Saint Louis University, Baguio City</td>
						<td>Ni</td>
					</tr>		
					<tr>
						<td><div class="row">
							<a href="event-revise-event.php" role="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span> MNHS' JS Prom</a>
							</div></td>
						<td><div class="row">Dec 22, 2017</div></td>
						<td>19:00</td>
						<td>MNHS</td>
						<td>Easter College Gym</td>
						<td>San</td>
					</tr>	
					<tr>
						<td><div class="row">
							<a href="event-revise-event.php" role="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span> Kwa's Wedding</a>
							</div></td>
						<td><div class="row">Dec 22, 2017</div></td>
						<td>1:00</td>
						<td>Kwa</td>
						<td>Idyay</td>
						<td>Shi</td>
					</tr>	
					<tr>
						<td><div class="row">
							<a href="event-revise-event.php" role="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span> LES' Reunion</a>
							</div></td>
						<td><div class="row">Dec 22, 2017</div></td>
						<td>9:00</td>
						<td>LES</td>
						<td>Lucban Elementary School</td>
						<td>Go</td>
					</tr>	
					<tr>
						<td><div class="row">
							<a href="event-revise-event.php" role="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span> Wen's Wedding</a>
							</div></td>
						<td><div class="row">Dec 24, 2017</div></td>
						<td>9:00</td>
						<td>Wen</td>
						<td>Idyaaaayyy</td>
						<td>Roku</td>
					</tr>	
					<tr>
						<td><div class="row">
							<a href="event-revise-event.php" role="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span> MNHS' Reunion</a>
							</div></td>
						<td><div class="row">Dec 26, 2017</div></td>
						<td>9:00</td>
						<td>Some name</td>
						<td>Hotel Veniz</td>
						<td>Shichi</td>
					</tr>	
					<tr>		
						<td><div class="row">
							<a href="event-revise-event.php" role="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span> Han's Wedding</a>
							</div></td>
						<td><div class="row">Dec 28, 2017</div></td>
						<td>10:00</td>
						<td>Han</td>
						<td>Adayu</td>
						<td>Hachi</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>