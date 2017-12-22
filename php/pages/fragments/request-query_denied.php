<?php
    $user= $_SESSION['userAccount'];
    $usr = $_SESSION['username'];
    $user_id = $user->getAccountId();
    $query = $pdo->prepare("SELECT b.username AS sp_username, a.username AS cust_username, request_status, pet_service.service_name, start_servicing, end_servicing,  service_price, request_id FROM service_request INNER JOIN user_account AS b ON service_request.sp_id = b.account_id  INNER JOIN user_account AS a ON service_request.account_id = a.account_id  INNER JOIN pet_service ON service_request.service_id = pet_service.service_id 
                WHERE request_status = 05  AND service_request.sp_id = '$user_id';");
    $query->execute();
    $result = $query->fetchAll();

    echo "<tr>";
    echo "<th>Request id</th>";
    echo "<th>Date </th>";
    echo "<th>Customer</th>";
    echo "<th>Service Name </th>";
    echo "<th>Amount</th>";
    echo "<th>Expected Finish Date</th>";
    echo "</tr>";

    foreach($result as $query){
        $rid = $query['request_id'];
        echo "<tr>";
        echo "<td>" . $query['request_id'] . "</td>";
        echo "<td>" . $query['start_servicing'] . "</td>";
        echo "<td>" . $query['cust_username'] . "</td>";
        echo "<td>" . $query['service_name'] . "</td>";
        echo "<td>" . $query['service_price'] . "</td>";
        echo "<td>" . $query['end_servicing'] . "</td>";
        echo "</td>";
        echo "</tr>";
        
    }
?>