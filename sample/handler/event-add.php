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
		<h1>Add Event</h1>
		<form>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="client-name">Client Name</label>
						<input type="text" id="client-name" class="form-control">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="celebrant">Celebrant</label>
						<input type="text" id="celebrant" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<label for="">Contact Number</label>
					<input type="text" id="" class="form-control">
				</div>
				<div class="col-lg-4">
					<label for="">Motiff</label>
					<input type="text" id="" class="form-control">
				</div>
				<div class="col-lg-4">
					<label for="">Handler</label>
				<input type="text" id="" class="form-control">
				</div>
			</div>
			<div class="row">
			<label>Event Date</label>
			<div class="row">
				<div class="col-lg-4">
					<div class="form-group">
						<label for="month">Month</label>
						<select class="form-control" id="month">
							<option>Jan</option>
							<option>Feb</option>
							<option>Mar</option>
							<option>Apr</option>
							<option>May</option>
							<option>Jun</option>
							<option>Jul</option>
							<option>Aug</option>
							<option>Sep</option>
							<option>Oct</option>
							<option>Nov</option>
							<option>Dec</option>
						</select>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="date">Date</label>
						<select class="form-control" id="date">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>etc</option>
						</select>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="yr">Year</label>
						<select class="form-control" id="yr">
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
							<option>2021</option>
							<option>etc</option>
						</select>
					</div>
				</div>
			</div>
			</div>
			<div class="row">
			<label>Services Offered</label>
			<div class="table-responsive">
				<table class="table table-condensed table-hover">
					<tbody>
						<tr>
							<th>Gowns</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Make-up</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Church</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Floral Entourage</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Reception</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Cakes</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Photo and Video</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Sign Frame</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Tokens</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Invitations</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Doves</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Catering Utensils</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Tool Rentals</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
			<div class="row">
			<label>Tools Rentals</label>
			<div class="table-responsive">
				<table class="table table-condensed table-hover">
					<tbody>
						<tr>
							<th>Tool</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Tool</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
						<tr>
							<th>Tool</th>
							<td><input type="text" id="" class="table-input"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row">
				<a href="#" role="button" class="btn btn-primary">Add Tool</a>
				<a href="#" role="button" class="btn btn-danger">Remove Tool</a>
			</div>
			</div>
			<div class="row">
			<label>Utensils</label>
			<div class="table-responsive">
				<table class="table table-hover table-condensed">
					<tr>
						<th>Glasses/ Goblets</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
					<tr>
						<th>Spoons</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
					<tr>
						<th>Forks</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
					<tr>
						<th>Chafing Dishes</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
					<tr>
						<th>Menu Servers</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
					<tr>
						<th>Soup Bowls</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
					<tr>
						<th>Plates</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
					<tr>
						<th>Drinking Glasses</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
					<tr>
						<th>Serving Spoons</th>
						<td><input type="text" id="" class="table-input"></td>
					</tr>
				</table>
			</div>
			<div class="row">
				<a href="#" role="button" class="btn btn-primary">Add Utensil</a>
				<a href="#" role="button" class="btn btn-danger">Remove Utensil</a>
			</div>
			</div>
			<div class="row">
				<label>Payments Made</label>
				<div class="row">
					<div class="col-lg-6">
						<input type="text" id="" class="form-control">
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>