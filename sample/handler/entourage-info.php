<!-- Handler page -->
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
	<title>Handler page</title>
</head>
<body>
	<!-- Navigation Bar -->
	<?php include("navbar.php") ?>
	
	<!-- main content -->
	<div class="container">
		<h1>[Client] Entourage</h1>
		<h2>Measurements</h2>
		<!-- record measurements of each entourage member -->
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Role</th>
						<th>Shoulder</th>
						<th>Chest</th>
						<th>Stomach</th>
						<th>Waist</th>
						<th>Arm Length</th>
						<th>Arm Hole</th>
						<th>Muscle</th>
						<th>Pants Length</th>
						<th>Baston</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" id="name" class="table-input"></td>
						<td><input type="text" id="role" class="table-input"></td>
						<td><input type="text" id="shoulder" class="table-input"></td>
						<td><input type="text" id="chest" class="table-input"></td>
						<td><input type="text" id="stomach" class="table-input"></td>
						<td><input type="text" id="waist" class="table-input"></td>
						<td><input type="text" id="arm-length" class="table-input"></td>
						<td><input type="text" id="arm-hole" class="table-input"></td>
						<td><input type="text" id="muscle" class="table-input"></td>
						<td><input type="text" id="pants-length" class="table-input"></td>
						<td><input type="text" id="baston" class="table-input"></td>
					</tr>
					<tr>
						<td><input type="text" id="name" class="table-input"></td>
						<td><input type="text" id="role" class="table-input"></td>
						<td><input type="text" id="shoulder" class="table-input"></td>
						<td><input type="text" id="chest" class="table-input"></td>
						<td><input type="text" id="stomach" class="table-input"></td>
						<td><input type="text" id="waist" class="table-input"></td>
						<td><input type="text" id="arm-length" class="table-input"></td>
						<td><input type="text" id="arm-hole" class="table-input"></td>
						<td><input type="text" id="muscle" class="table-input"></td>
						<td><input type="text" id="pants-length" class="table-input"></td>
						<td><input type="text" id="baston" class="table-input"></td>
					</tr>
					<tr>
						<td><input type="text" id="name" class="table-input"></td>
						<td><input type="text" id="role" class="table-input"></td>
						<td><input type="text" id="shoulder" class="table-input"></td>
						<td><input type="text" id="chest" class="table-input"></td>
						<td><input type="text" id="stomach" class="table-input"></td>
						<td><input type="text" id="waist" class="table-input"></td>
						<td><input type="text" id="arm-length" class="table-input"></td>
						<td><input type="text" id="arm-hole" class="table-input"></td>
						<td><input type="text" id="muscle" class="table-input"></td>
						<td><input type="text" id="pants-length" class="table-input"></td>
						<td><input type="text" id="baston" class="table-input"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<a href="#" role="button" class="btn btn-primary">Add New Member</a>
			<a href="#" role="button" class="btn btn-danger">Delete Member</a>
		</div>
	</div>
</body>
</html>