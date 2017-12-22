<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LOGIN</title>
		<link rel="stylesheet" href="styles/navigation.css" />
		<link rel="stylesheet" href="styles/login.css" />
	</head>
	<body>

<div id= "nav">
        <nav>
            <ul class="nav nav-right nav fixed">
            <li><a href="store.html">STORE</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="about.html">OUR TEAM</a></li>
                
                <li class="dropdown">
                <a href="#" class="dropbtn">SERVICES</a>
                <div class="dropdown-content">
                    <a href="pawgroom.html">PawGroom</a>
                    <a href="pawmed.html">PawMed</a>
                </div>
                </li>
                <li><a href="index.html">HOME</a></li>
               
            </ul>
        </nav>
</div>
	
	
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `registration` WHERE username='$username' and password='".md5($password)."' and status = 'Accepted'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: http://localhost:8080/CM"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='customerlogin.php'>Login</a></div>";
				}
    }else{
?>
	<div class="form">
		<h1>Login</h1>
	<form action="" method="post" name="login">
		<input type="text" name="username" placeholder="Username" required />
		<input type="password" name="password" placeholder="Password" required />
		<input name="submit" type="submit" value="Login" />
	</form>
     </div>
	<?php } ?>
	</body>
</html>
