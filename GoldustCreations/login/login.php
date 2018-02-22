<!DOCTYPE html>
<html lang="en">
<head>
	<title>Goldust Creations</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php
    require('db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
        $username = stripslashes($_REQUEST['user']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        
    //Checking is user existing in the database or not
       $query1 = "SELECT * FROM `employees` WHERE username='$username' AND password='$password' AND role='admin'";
       $adminResult = mysqli_query($con, $query1) or die(mysql_error());
       $adminLogin = mysqli_num_rows($adminResult);
       $query2 = "SELECT * FROM `employees` WHERE username='$username' AND password='$password' AND role='handler'";
       $handlerResult = mysqli_query($con, $query2) or die(mysql_error());
       $handlerLogin = mysqli_num_rows($handlerResult);
       if($adminLogin == 1){
       		$_SESSION['username'] = $username;
       		header("Location: ../adminpages/adminhome.php");
       } else if ($handlerLogin == 1) {
       		$_SESSION['username'] = $username;
       		header("Location: ../handlerpages/home.php");
       } else {
       		echo "<div class='form'><h3>Username/password is incorrect.</h3>
                <br/>Click here to <a href='login1.php'>Login</a></div>";
       }
	} else {

	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" id="username" name="user">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" id="pass" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					<!--<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="login">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	<?php } ?>

	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>