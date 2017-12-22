<?php
    $user= $_SESSION['userAccount'];
    $usr = $_SESSION['username'];
    $user_id = $user->getAccountId();
    $query = $pdo->prepare("
SELECT request_id, request_status, pet_service.service_name, start_servicing, end_servicing,  service_price FROM service_request
 inner join pet_service using (service_id) 
 WHERE request_status = 03 and service_request.sp_id = '$user_id';");
    $query->execute();
    $result = $query->fetchAll();

    echo "<tr>";
    echo "<th>Date </th>";
    echo "<th>Customer</th>";
    echo "<th>Service Name </th>";
    echo "<th>Amount</th>";
    echo "<th>Expected Finish Date</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    foreach($result as $query){
        $rid = $query['request_id'];
        echo "<tr>";
        echo "<td>" . $query['start_servicing'] . "</td>";
        echo "<td>" . $query['service_name'] . "</td>";
        echo "<td>" . $query['service_name'] . "</td>";
        echo "<td>" . $query['service_price'] . "</td>";
        echo "<td>" . $query['end_servicing'] . "</td>";
        echo "<td>";
        echo "<form action='' method='post' onSubmit='window.location.reload()'>";
        echo "<input type='hidden' name='requestId' value='$rid' />";
        echo "<input type='submit' class='details-modal btn btn-default' name='request_cancel' value='Cancel' />"; // NEEED TO FIX THIS TO ADD ENTRY INTO CANCELLED TAB BY CHANGING STATUS TO 5
        echo "<input type='submit' class='details-modal btn btn-default' name='request_done' value='Done' />";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
        
    }
?>