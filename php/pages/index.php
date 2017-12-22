<?php
require '../classes/UserAccount.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include 'fragments/head.php';
    ?>
<body id="index">
<?php 
    session_start();
    
    function echoActiveClassIfRequestMatches($requestUri)
    {
        $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

        if ($current_file_name == $requestUri)
            echo 'class="active-menu"';
    }
    
    $user = $_SESSION["userAccount"];
    $user_id = $user->getAccountId();

?>
    <div id="wrapper">
        <?php include 'fragments/page-head.php'; ?>
           <!-- /. NAV TOP  -->
        <?php include 'fragments/sidebar-nav.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                        <h5>Welcome 
                            <?php  
                                    
                                    echo  $_SESSION["username"];

                            ?> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr/> 
            <div class="row">    
                <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                        <div class="text-box" >
                            <h4 align="center">
                                <strong>
                                    <?php
                                    $datenow = date("Y-m");
                                    require_once 'fragments/connection.php';
                                    $query = $pdo->prepare("SELECT * FROM service_request WHERE request_status = 01 and sp_id = '$user_id'");
                                    $query->execute();
                                    $result = $query->fetchAll();
                                    echo count($result);                                          

                                    ?> Pending Requests
                                </strong>
                            </h4>
                            <center><a href="pending.php" class="btn btn-primary">View Pending Requests</a></center>
                        </div>

                     </div>
                 </div>
              

           
                <div class="col-md-3 col-sm-6 col-xs-6">      

                    <div class="panel panel-back noti-box">
                        <div class="text-box" >
                            <h4 align="center">
                                <strong>
                                    <?php
                                    $datenow = date("Y-m");
                                    require_once 'fragments/connection.php';
                                    $query = $pdo->prepare("SELECT * FROM service_request WHERE request_status = 04 and sp_id='$user_id' "); 
                                    $query->execute();
                                    $result = $query->fetchAll();
                                    echo count($result);                                          

                                    ?> Finished Services
                                </strong>
                            </h4>
                            <center><a href="finished.php" class="btn btn-primary">View Finished Services</a></center>
                        </div>

                     </div>
                 </div>
             

                  
                <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                        <div class="text-box" >
                            <h4 align="center">
                                <strong>
                                    <?php
                                    $datenow = date("Y-m");
                                    require_once 'fragments/connection.php';
                                    $query = $pdo->prepare("SELECT * FROM service_request where request_status= 03 and sp_id='$user_id' ");
                                    $query->execute();
                                    $result = $query->fetchAll();
                                    echo count($result);                                          

                                    ?> On-going Services
                                </strong>
                            </h4>
                            <center><a href="onGoing.php" class="btn btn-primary">View On-going Services</a></center>
                        </div>

                     </div>
                 </div>
             
                <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                        <div class="text-box" >
                            <h4 align="center">
                                <strong>
                                    <?php
                                    $datenow = date("Y-m");
                                    require_once 'fragments/connection.php';
                                    $query = $pdo->prepare("SELECT * FROM feedback natural join service_request where feedback_status= 01 and sp_id ='$user_id' ");
                                    $query->execute();
                                    $result = $query->fetchAll();
                                    echo count($result);                                          

                                    ?> New Feedback
                                </strong>
                            </h4>
                            <center><a href="unchecked-feedback.php" class="btn btn-primary">View Feedback</a></center>
                        </div>

                     </div>
                 </div>
         </div>

                <div class="row" >
                <div class="panel panel-back noti-box">
                        <div class="text-box" >
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               Expired Pending Requests
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="expired" name="anothercontent">
                                        <thead>
                                            
                                        <?php
                                             require_once 'fragments/connection.php';

                                             $usr = $_SESSION['username'];

                                            $query = $pdo->prepare("SELECT request_id, service_name, start_servicing, service_price, end_servicing FROM service_request  INNER JOIN pet_service ON service_request.service_id  = pet_service.service_id WHERE request_status = 01 and start_servicing < curdate() AND service_request.sp_id ='$user_id'"); 
                                            $query->execute();
                                            $result = $query->fetchAll();
                                            
                                            echo "<tr>";
                                            echo "<th>Request ID</th>";
                                            echo "<th>Service Name</th>";
                                            echo "<th>Amount</th>";
                                            echo "<th>Start of Service</th>";
                                            echo "<th>End of Service</th>";
                                            echo "</tr>";

                                            foreach($result as $query){
                                                echo "<tr>";
                                                echo "<td>" . $query['request_id'] . "</td>";
                                                echo "<td>" . $query['service_name'] . "</td>";
                                                echo "<td>" . $query['service_price'] . "</td>";
                                                echo "<td>" . $query['start_servicing'] . "</td>";
                                                echo "<td>" . $query['end_servicing'] . "</td>";
                                                echo "</tr>";
                                            }

                                            echo "</table>";
                                        ?>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                          </div>   
                          </div>
                          </div>   
                </div>

        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    
   
</body>
</html>

