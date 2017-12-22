
<?php

    $user = $_SESSION["userAccount"];
    $user_id = $user->getAccountId();
    $query = $pdo->prepare("select * from feedback 
                    INNER JOIN service_request using(request_id) 
                    INNER JOIN user_account cust using (account_id) 
                    INNER JOIN pet_service using (service_id) 
                    where feedback_status = '$status'and service_request.sp_id = '$user_id'");
    $query->execute();
    
 
    echo "<tr>";
    echo "<th>Feedback ID</th>";
    echo "<th>Customer</th>";
    echo "<th>Date of Feedback</th>";
    echo "<th>Service</th>";
    echo "<th>Ranking</th>";
    echo "<th>Message</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    while ($row = $query->fetch(PDO::FETCH_ASSOC)){
        $firstname = $row['first_name'];
        $middlename = $row['middle_name'];
        $lastname = $row['last_name'];
        $customer = $firstname. " ". $middlename. " ". $lastname;
        $id = $row['feedback_id'];
        echo "<tr>";
        echo "<td>" .$id ."</td>";
        echo "<td>" .$customer ."</td>";
        echo "<td>" .$row['feedback_date'] ."</td>";
        echo "<td>" .$row['service_name'] ."</td>";
        echo "<td>" .$row['ranking'] ."</td>";
        echo "<td>" .$row['feedback_messages'] ."</td>";
        $feedbackMsg = $row['feedback_messages'];
        if($status == 01){
            echo <<< block
<td>
            <form action="#" method="get">
            <button id="replyToMessage" type="submit" class="modellink btn btn-default" data-toggle="modal" data-target="#myModal" name="modalbtn" onclick="setUncheckedId('$id:::::$feedbackMsg')">Reply</button>
            <button type='submit' class='details-modal btn btn-default' name='done' value='$id'>Done</button>
            </form>
            </td>
block;

        }elseif($status == 02){
            echo <<< block
<td>
            <form action="#" method="get">
            <button type="submit" class="modellink btn btn-default" data-toggle="modal" data-target="#myModal" name="modalbtn" onclick="setUncheckedId('$id:::::$feedbackMsg')">Reply</button>            
            </form>
            </td>
block;

        }elseif($status == 03){
            echo "<td>"
                .'<form action="#" method="get">'
                ."<button type='submit' class='modellink btn btn-default' data-toggle='modal' data-target='#myModal' name='modalbtn' value='$id'>Details</button>"
                .'</form>'
                ."</td>";       
        } 
        echo "</tr>";
    }

   
    
   
                        
?>