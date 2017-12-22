<?php
require '../classes/UserAccount.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'fragments/head.php';
?>
<body>

<?php
//Start your session
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
    echo "You are logged in as, " . $_SESSION['username'] . "!";
} else {
    header("location: login.php");
}

function echoActiveClassIfRequestMatches($requestUri)
{
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
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Pending Requests</h2>
                </div>
            </div>
            <div class="jumbotron">
                <?php
                require_once 'fragments/connection.php';

                if (isset($_POST['submit'])) {
                    foreach ($_POST['approval'] as $item) {
                        $array = explode(':', $item);
                        $status =$array[0];
                        if ($array[0] == 1) {
                            continue;
                        }

                        $rid = $array[1];
                        $sql = $pdo->prepare("update service_request set request_status= $status, start_servicing=curdate() where request_id = $rid;");
                        $sql->execute();
                    }
                }

                $query = $pdo->prepare("SELECT service_name, service_price, service_duration FROM pet_service");
                $query->execute();
                $result = $query->fetchAll();

                ?>
                <!-- /. ROW  -->
                <div class="panel-heading">
                    Pending Requests as of <?php echo date("Y-m-d") ?>
                </div>
                <form method='post' action=''>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example"
                           name="anothercontent">

                        <?php
                        require_once 'fragments/connection.php';

                        $usr = $_SESSION['username'];
                        $userAccount = $_SESSION["userAccount"];
                        $spAccountId = $userAccount->getAccountId();

                        $query = $pdo->prepare("SELECT * FROM service_request 
                              INNER JOIN user_account USING (account_id) 
                              INNER JOIN pet_service USING (service_id) 
                              where request_status = 1 AND 
                              service_request.sp_id = $spAccountId;");

                        $query->execute();
                        $result = $query->fetchAll();

                        echo "<tr>";
                        echo "<th>Customer</th>";
                        echo "<th> Service Name </th>";
                        echo "<th>Amount</th>";
                        /*echo "<th>Expected Duration</th>";*/
                        echo "<th>More Details</th>";
                        echo "</tr>";

                        foreach ($result as $query) {
                            //$expd = $query['end_servicing'] - $query['start_servicing'];
                            echo "<tr>";
                            echo "<td>" . $query['username'] . "</td>";
                            echo "<td>" . $query['service_name'] . "</td>";
                            echo "<td>" . $query['service_price'] . "</td>";
                            /*                        echo "<td>" . $expd . "</td>";*/
                            echo "<td>";

                            echo <<< OPTIONS
                            <select name="approval[]">
                                <option value="1:${query['request_id']}">Not Checked</option>
                                <option value="3:${query['request_id']}">Approve for servicing</option>
                            </select>
OPTIONS;
                            echo "                          
                            </td>;
                        </tr>";
                        }

                        ?>
                    </table>
                    <input id="reply_btn" type="submit" name='submit' value="Submit" class="btn btn-default"/>
                </form>


                <!--
                <button type="button" class="btn btn-primary">Accept</button>
                <button type="button" class="btn btn-primary">Reject</button>
            -->

            </div>

        </div>
    </div>
</div>

<div id="reply_modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Request Details</h4>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    require_once 'fragments/connection.php';

                    $usr = $_SESSION['username'];
                    echo $usr;

                    $query = $pdo->prepare("SELECT start_servicing, end_servicing, request_status, pet_service.service_name, username FROM service_request INNER JOIN user_account ON service_request.account_id = user_account.account_id INNER JOIN pet_service ON service_request.service_id  = pet_service.service_id WHERE request_status = 01 AND username = '$usr'");
                    $query->execute();
                    $result = $query->fetchAll();


                    foreach ($result as $query) {
                        echo "<tr>";
                        echo "<td>" . $query['start_servicing'] . "</td>";
                        echo "<td>" . $query['end_servicing'] . "</td>";
                        echo "<td>" . $query['request_status'] . "</td>";
                        echo "<td>" . $query['service_name'] . "</td>";
                        echo "<td>" . $query['username'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                    ?>


                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Accept</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Reject</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>    
