<?php
require 'classes/UserAccount.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <title>Pet Services</title><meta charset="UTF-8" />

      <link rel="stylesheet" href="pages/assets/css/style.css">

      <style type="text/css">
      body {
        background-image: url("pages/assets/img/background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-color: rgb(0,0,0); /* Black fallback color */
      background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
      }
      </style>

</head>
<body>

    <?php
    $errMsg = "";
  if(isset($_POST['submit'])){
    //username and password sent from Form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == '')
      $errMsg .= 'You must enter your Username<br>';

    if($password == '')
      $errMsg .= 'You must enter your Password<br>';

    //if($errMsg == ''){
        if($username && $password){
            require "pages/fragments/connection.php";
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $queryLogin = "SELECT * FROM user_account WHERE username='$username' AND password='$password' and role_id = 2";

            $records = $pdo->query($queryLogin);
            $records->execute();
            $counter = $records->rowCount();


            if($counter != 0){
                while($rows = $records->fetch(PDO::FETCH_ASSOC)){
                    $dbuser = $rows["username"];
                    $dbpass = $rows["password"];
                    if($username == $dbuser && $password == $dbpass ) {
                        session_start();

                        /*
                         * The whole userAccount information pack into an object and place inside the user session for further usage
                         * */
                        $accountId = $rows["account_id"];
                        $address = $rows["address"];
                        $firstName = $rows["first_name"];
                        $lastName = $rows["last_name"];
                        $middleName = $rows["middle_name"];
                        $status = $rows["status"];
                        $emailAddress = $rows["email_address"];
                        $birthday = $rows["birthday"];
                        $phoneNumber = $rows["phone_number"];
                        $roleId = $rows["role_id"];
                        $userPicture = $rows["user_picture"];

                        $userAccount = new UserAccount($accountId, $dbuser, '', $address, $firstName,
                            $lastName, $middleName, $status, $emailAddress, $birthday, $phoneNumber, $roleId, $userPicture);

                        $_SESSION["userAccount"] = $userAccount;


                        $_SESSION["username"]=$dbuser;
                        header('location:pages/index.php');

                    }else{
                       $errMsg .= "User Credentials Not Found!";
                    }
                }
            }

    }

  }

?>

    <?php
    $errMsg = "";
    if(isset($_GET['submit'])){
        //username and password sent from Form
        $username = trim($_GET['username']);
        $password = trim($_GET['password']);

        if($username == '')
            $errMsg .= 'You must enter your Username<br>';

        if($password == '')
            $errMsg .= 'You must enter your Password<br>';

        //if($errMsg == ''){
        if($username && $password){
            require "pages/fragments/connection.php";
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $queryLogin = "SELECT * FROM user_account WHERE username='$username' AND password='$password' and role_id = 2";

            $records = $pdo->query($queryLogin);
            $records->execute();
            $counter = $records->rowCount();


            if($counter != 0){
                while($rows = $records->fetch(PDO::FETCH_ASSOC)){
                    $dbuser = $rows["username"];
                    $dbpass = $rows["password"];
                    if($username == $dbuser && $password == $dbpass ) {
                        session_start();

                        /*
                         * The whole userAccount information pack into an object and place inside the user session for further usage
                         * */
                        $accountId = $rows["account_id"];
                        $address = $rows["address"];
                        $firstName = $rows["first_name"];
                        $lastName = $rows["last_name"];
                        $middleName = $rows["middle_name"];
                        $status = $rows["status"];
                        $emailAddress = $rows["email_address"];
                        $birthday = $rows["birthday"];
                        $phoneNumber = $rows["phone_number"];
                        $roleId = $rows["role_id"];
                        $userPicture = $rows["user_picture"];

                        $userAccount = new UserAccount($accountId, $dbuser, '', $address, $firstName,
                            $lastName, $middleName, $status, $emailAddress, $birthday, $phoneNumber, $roleId, $userPicture);

                        $_SESSION["userAccount"] = $userAccount;


                        $_SESSION["username"]=$dbuser;
                        header('location:pages/index.php');

                    }else{
                        $errMsg .= "User Credentials Not Found!";
                    }
                }
            }

        }

    }

    ?>

    ?>
  <div align="center">
    <div style="width:300px; border: solid 1px #006D9C; " align="left">
      <?php
        if(isset($errMsg)){
          echo '<div style="color:#FFFFFF;text-align:center;font-size:12px;">'.$errMsg.'</div>';
        }
      ?>
      <div style="background-color:#006D9C; color:#FFFFFF; padding:3px;text-align:center; font-size:18px;"><b>User Login </b></div>
      <div style="margin:30px">
        <form action="" method="post">
          <label style="color:white; text-align: center;">Username  :</label><input type="text" name="username" class="box"/><br /><br />
          <label style="color:white; text-align: center;">Password  :</label><input type="password" name="password" class="box" /><br/><br />
          <input type="submit" name='submit' class="btn btn-info" value="Submit" class="col s6" class='submit'/><br />
        </form>
      </div>
    </div>
  </div>
    </body>

</html>
