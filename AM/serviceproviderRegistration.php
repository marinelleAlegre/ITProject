<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Service Prvoder Registration</title>
<link rel="stylesheet" href="styles/navigation.css" />
<link rel="stylesheet" href="styles/registration.css" />
<Link rel="icon" href="styles/images/icon.png">
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
    require_once('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $lastName = stripslashes($_REQUEST['lastName']);
        $lastName = mysqli_real_escape_string($con,$lastName);
        $firstName = stripslashes($_REQUEST['firstName']);
        $firstName = mysqli_real_escape_string($con,$firstName);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con,$address);
        $age = stripslashes($_REQUEST['age']);
        $age = mysqli_real_escape_string($con,$age);
        $contactNumber = stripslashes($_REQUEST['contactNumber']);
        $contactNumber = mysqli_real_escape_string($con,$contactNumber);
        $gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($con,$gender);
        $expertise = stripslashes($_REQUEST['expertise']);
        $expertise = mysqli_real_escape_string($con,$expertise);
        $registrationDate = date("Y-m-d");

        $query = "INSERT into `registration` (lastName, firstName, username, password, email, age, gender, address, contactNumber, status, typeOfUser)
        VALUES ('$lastName','$firstName', '$username', '".md5($password)."', '$email', '$age', '$gender', '$address', '$contactNumber', 'Pending', 'Service Provider')";
        $result = mysqli_query($con,$query);

        $rgId = "SELECT register_id FROM registration WHERE email='$email' ";
        $resultId = mysqli_query($con,$rgId);
        $resultArray = mysqli_fetch_assoc($resultId);
        $registration_id = $resultArray['register_id'];


        $query1 = "INSERT into `serviceprovider` (serviceproviderLastname,serviceproviderFirstname,expertise,dateOfRegistration,workedStarted,registration_id) 
        VALUES ('$lastName','$firstName','$expertise','$registrationDate','$registrationDate', '$registration_id')";
        $result1 = mysqli_query($con,$query1);
        

        if($result){
            echo "<div class='form'><h3>You are registered successfully. Please wait for the admin to accept your registration.</h3><br/>Click here to <a href='splogin.php'>Login</a></div>";
        } else {
            echo "Registration failed!";
        }

    }else{
?>
<div class="form">
<h1>Service Provider Registration</h1>
    <form name="registration" action="serviceProviderRegistration.php" method="post">
        <div class="flname">
        <input type="text" name="lastName" placeholder="Lastname" required />
        <input type="text" name="firstName" placeholder="Firstname" required />
        </div>
        
        <div class="usernamepassword">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="email" name="email" placeholder="Email" required />
        </div>
        
        <div class="address">
        <input type = "text" name="address" placeholder="Address" required />
        <input type = "tel" name="contactNumber" placeholder="Contact Number" required />
        <input type = "text" name="expertise" placeholder = "Expertise" required />
        <input type = "radio" name = "gender" value="M" required/>Male
        <input type = "radio" name = "gender" value="F" required/>Female
        <input type = "text" name="age" placeholder="Age" required />
        </div>
        
        <input type="submit" name="submit" value="Register" />
    </form>
</div>
<?php } ?>
</body>
</html>
