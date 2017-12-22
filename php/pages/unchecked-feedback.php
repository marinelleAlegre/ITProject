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
                        <h2>Unchecked FeedBack</h2>   
                    </div>    
                </div>
                <div class="jumbotron">
        
                    <table class="table table-striped table-border table-hover">
                        <?php   
                            $status = 01;
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
                    Reply to clients feedback
                </h4>
            </div>
              <form action="" method="post" role="form" id="editform">
                <input id="userFeedbackMessageId" name="feedbackId" type="hidden" value=""/>
                  <div class="modal-body">

                 <div class="form-group">
                    <label class="control-label">Feedback:</label>
                    <div id="userFeedbackMessageText" class="jumbotron">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="control-label">Message:</label>
                    <textarea class="form-control" id="message-text" name="reply"></textarea>
                  </div>

                </div>
                <div class="modal-footer">
                    <button type='submit' class='btn btn-primary' name='srep'>Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>

                
        </div>
        </div>
    </div>
            
    <?php
         include "fragments/connection.php";
         if(isset($_GET['done'])){
            $id = $_GET['done'];
            $sql = $pdo->prepare("update feedback set feedback_status=2 where feedback_id = '$id';");
            $sql->execute();
            //echo "<meta http-equiv='refresh' content='0'>";
        }           
        if(isset($_POST['srep'])){
            
            $reply = $_POST['reply'];
            $value = $_POST['feedbackId'];
            $sql = $pdo->prepare("update feedback set checked_description = '$reply', feedback_status=03 where feedback_id = '$value';");
            $sql->execute();
        }


    ?>
</body>
</html>    
