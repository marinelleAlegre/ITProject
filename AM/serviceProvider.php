<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Service Provider</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/plugins/morris.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/table.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">PAWGRAM</a>
            </div>

            <ul class="nav navbar-right top-nav">
                <!--notification-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">

                    <!--insert php code for notification-->

                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-thumbs-o-up"></i> User Approval<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                           <li>
                                <a href="customer.php"><i class= "fa fa-users"></i> Customer</a>
                            </li>
                            <li>
                                <a href="serviceProvider.php"><i class= "fa fa-handshake-o"></i> Service Provider</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#um"><i class="fa fa-thumbs-o-up"></i> User Management<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="um" class="collapse">
                            <li>
                                <a href="customerUM.php"><i class= "fa fa-users"></i> Customer</a>
                            </li>
                            <li>
                                <a href="spUM.php"><i class= "fa fa-handshake-o"></i> Service Provider</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="transactionMonitoring.php"><i class="fa fa-fw fa-edit"></i> Transaction Monitoring</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Service Provider
                            
                        </h1>


                        <?php

                            require_once('db.php');

                            $sql = "SELECT register_id, lastName, firstName, username, email, age, gender, address, contactNumber, status, typeOfuser FROM registration where typeOfuser = 'Service Provider' AND status='Pending'";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                echo "<table><tr><th>ID</th><th>Lastname</th><th>Firstname</th><th>Username</th><th>Email</th><th>Age</th><th>Gender</th>
                                <th>Address</th><th>Contact Number</th><th>Status</th><th>Type of the User</th>";
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<form action='acceptdecline.php'><tr><td>" . $row["register_id"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["firstName"]. "</td><td>" . $row["username"]. "</td>
                                    <td>" . $row["email"]. "</td><td>" . $row["age"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["address"]. "</td>
                                    <td>" . $row["contactNumber"]. "</td><td>" . $row["status"]. "</td><td>" . $row["typeOfuser"] . "</td><td>". "</td><td>" . "<input type='hidden' name='username' value='". $row["username"]."'/>" . "<input type='submit' name='status' value='Accept'/>" . "<input type='submit' name='status' value='Decline'/>" . "</td></tr></form>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }
    
                            $con->close();
                            
                            ?>


                    </div>
                </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
