<!DOCTYPE html>
<?php
    require '../classes/UserAccount.php';
    session_start();
    $sessionUserAccount = $_SESSION["userAccount"];
?>
<html lang="en">

<?php
    include 'fragments/head.php';
?>

    <body>
           

           <?php
            //Start your session

            if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
                echo "You are logged in as, " . $_SESSION['username'] . "!";
            } else {
                header("location: login.php");
            }
            function echoActiveClassIfRequestMatches($requestUri){
                $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
                if ($current_file_name == $requestUri)
                    echo 'class="active-menu"';
            }
            ?>

            <div id="wrapper">
                <?php include 'fragments/page-head.php'; ?>
                <!-- /. NAV TOP  -->
                <?php
                if(isset($_POST['saveprofile'])){
                    $account = $_SESSION["userAccount"];
                    $accountId = $account->getAccountId();


                    $username = $_POST['inputUsername'];
                    $password = $_POST['inputPassword'];
                    $rePassword = $_POST['inputRePassword'];
                    $address = $_POST['inputAddress'];
                    $fname = $_POST['inputFname'];
                    $mname = $_POST['inputMname'];
                    $lname = $_POST['inputLname'];
                    $emailadd = $_POST['inputEmail'];
                    $birthday = $_POST['inputBirthday'];
                    $phonenum = $_POST['inputPhonenum'];
                    //$selfinfo = $_POST['selfinfo'];
                    //$yearexp = $_POST['inputExp'];

                    include "fragments/connection.php";

                    if($password == $rePassword && $password != ''){
                        $updateWithPass = "update user_account 
                                                      set username=:username, password=:password, address=:address,
                                                      first_name=:fname, middle_name=:mname, last_name=:lname, email_address=:emailadd,
                                                      birthday=:birthday, phone_number=:phonenum
                                                    where account_id = '$accountId';";
                        $sql = $pdo->prepare($updateWithPass);
                        $sql->bindParam(':username', $username);
                        $sql->bindParam(':password', $password);
                        $sql->bindParam(':address', $address);
                        $sql->bindParam(':fname', $fname);
                        $sql->bindParam(':mname', $mname);
                        $sql->bindParam(':lname', $lname);
                        $sql->bindParam(':emailadd', $emailadd);
                        $sql->bindParam(':birthday', $birthday);
                        $sql->bindParam(':phonenum', $phonenum);
                        $sql->execute();

                        $status = $account->getStatus();
                        $roleId = $account->getRoleId();
                        $userPicture = $account->getUserPicture();

                        $_SESSION["userAccount"] = new UserAccount($accountId, $username, '', $address, $fname,
                            $lname, $mname, $status, $emailadd, $birthday, $phonenum, $roleId, $userPicture);
                        header('view-profile.php');

                    }else{
                        $updateWithoutPass = "update user_account 
                                                      set username=:username, address=:address,
                                                      first_name=:fname, middle_name=:mname, last_name=:lname, email_address=:emailadd,
                                                      birthday=:birthday, phone_number=:phonenum
                                                    where account_id = '$accountId';";
                        $sql = $pdo->prepare($updateWithoutPass);
                        $sql->bindParam(':username', $username);
                        $sql->bindParam(':address', $address);
                        $sql->bindParam(':fname', $fname);
                        $sql->bindParam(':mname', $mname);
                        $sql->bindParam(':lname', $lname);
                        $sql->bindParam(':emailadd', $emailadd);
                        $sql->bindParam(':birthday', $birthday);
                        $sql->bindParam(':phonenum', $phonenum);
                        $sql->execute();

                        $status = $account->getStatus();
                        $roleId = $account->getRoleId();
                        $userPicture = $account->getUserPicture();

                        $_SESSION["userAccount"] = new UserAccount($accountId, $username, '', $address, $fname,
                            $lname, $mname, $status, $emailadd, $birthday, $phonenum, $roleId, $userPicture);

                        header('view-profile.php');
                    }
                }

                ?>
                <?php include 'fragments/sidebar-nav.php'; ?>
                <!-- /. NAV SIDE  -->
                <div id="page-wrapper" >
                    <div id="page-inner">
                    <?php
                        
                        $user = $_SESSION["userAccount"];
                        $user_id = $user->getAccountId();
                        
                        $qry = $pdo->prepare("select * from user_account left join sp_profile using(account_id) where user_account.account_id = '$user_id'");
                        $qry->execute();
                        $profileqry = $qry->fetch();     
                        
                    ?> 
                    <div class="row">
                        <div class="col-md-12">
                        <h2>Edit Profile</h2>   
                        </div>    
                    </div>
                    <div class="jumbotron">
                        <form class="form-horizontal" action="" method="post">
                          <fieldset>
                            <legend>Profile</legend>
                             <div class="form-group">
                              <label for="inputFirstname" class="col-lg-2 control-label">First Name</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="inputFname" placeholder="<?php echo $profileqry['first_name'] ?>" value="<?php echo $_SESSION["userAccount"]->getFirstName()?>">
                              </div>
                            </div>
                               <div class="form-group">
                              <label for="inputMiddlename" class="col-lg-2 control-label">Middle Name</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="inputMname" placeholder="<?php echo $profileqry['middle_name'] ?>" value="<?php echo $_SESSION["userAccount"]->getMiddleName()?>">
                              </div>
                            </div>
                               <div class="form-group">
                              <label for="inputLastname" class="col-lg-2 control-label">Last Name</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="inputLname" placeholder="<?php echo $profileqry['last_name'] ?>" value="<?php echo $_SESSION["userAccount"]->getlastName()?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputUsername" class="col-lg-2 control-label">Username</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="inputUsername" placeholder="<?php echo $profileqry['username'] ?>" value="<?php echo $_SESSION["userAccount"]->getUsername()?>">
                              </div>
                            </div>
                                <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="inputPassword" placeholder="<?php echo $profileqry['password'] ?>" value="">
                              </div>
                            </div>
                              <div class="form-group">
                                  <label for="inputRePassword" class="col-lg-2 control-label">Repeat Password</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" name="inputRePassword" placeholder="<?php echo $profileqry['password'] ?>" value="">
                                  </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail" class="col-lg-2 control-label">Email Address</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="inputEmail" placeholder="<?php echo $profileqry['email_address'] ?>" value="<?php echo $_SESSION["userAccount"]->getEmailAddress()?>">
                              </div>
                            </div>
                                <div class="form-group">
                              <label for="inputPhonenum" class="col-lg-2 control-label">Phone Number</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="inputPhonenum" placeholder="<?php echo $profileqry['phone_number'] ?>" value="<?php echo $_SESSION["userAccount"]->getPhoneNumber()?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress" class="col-lg-2 control-label">Home Address</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="inputAddress" placeholder="<?php echo $profileqry['address'] ?>" value="<?php echo $_SESSION["userAccount"]->getAddress()?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputBirthday" class="col-lg-2 control-label">Birthday</label>
                              <div class="col-lg-10">
                                <input type="date" class="form-control" name="inputBirthday" placeholder="<?php echo $profileqry['birthday'] ?>" value="<?php echo $_SESSION["userAccount"]->getBirthday()?>">
                              </div>
                            </div>
                              <?php
                                include 'draft.php';
                              ?>
                                   <div class="form-group">
                                  <div class="col-lg-10 col-lg-offset-2">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" name="saveprofile" class="btn btn-primary" id="saveprofile" value="submit">Submit</button>
                                  </div>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>    