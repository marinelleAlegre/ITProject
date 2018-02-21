<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style.css" rel = "stylesheet"/>
    </head>
<body>
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
       $query = "SELECT * FROM 'employees' WHERE username='$username' AND password='$password'";
            $result = mysqli_query($con, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
        if($rows == 1){
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect user to index.php
            }else{
                echo "<div class='form'><h3>Username/password is incorrect.</h3>
                <br/>Click here to <a href='login1.php'>Login</a></div>";
                }
    }else{
?>

<div id="registration-form">
    <div class='fieldset'>
    <legend>Account Login</legend>
            <form action="" method="post" name="login">
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <input name="submit" type="submit" value="Login" />
            </form>
       </div>
    </div>
	<?php } ?>
</body>
</html>