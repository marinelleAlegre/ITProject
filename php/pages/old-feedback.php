<?php
require '../classes/UserAccount.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'fragments/head.php' ?>
<body>
    
       <?php
        //Start your session
        session_start();
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
        <?php include 'fragments/sidebar-nav.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Old FeedBack</h2>   
                    </div>    
                </div>
                <div class="jumbotron">
    
                    <table class="table table-striped table-border table-hover">
                        <?php   
                            $status = 03;
                            include 'fragments/feedback-query.php';
                        ?>    
                    </table>
                    <div class="modal-container">
                        
                    </div>
                </div>         
            </div>
        </div>
    </div>
    
     <div id="myModal" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">
                    Feedback Details
                </h4>
            </div>
            <div class="modal-body">
                <?php
                    if(isset($_GET['modalbtn'])){
                        $value = $_GET['modalbtn'];
                        $qry = $pdo->prepare("select * from feedback natural join service_request natural join user_account where feedback.feedback_id = '$value'");
                        $qry->execute();
                        $result = $qry->fetch(PDO::FETCH_ASSOC);
                        $feedback = $result['feedback_messages'];
                        $reply = $result['checked_description'];
                        echo 
                            "<span>Feedback Message<span>"
                            ."<div class='jumbotron'>"
                            ."<div>"
                            ."<p> $feedback </p>"
                            ."</div>"
                            ."</div>";
                        echo 
                            "<span>Checked Description<span>"
                            ."<div class='jumbotron'>"
                            ."<div>"
                            ."<p> $reply </p>"
                            ."</div>"
                            ."</div>";
                            
                     }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
</body>
</html>    
