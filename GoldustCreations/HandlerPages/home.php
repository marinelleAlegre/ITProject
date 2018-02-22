<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Home</title>
  <?php include("../head.php") ?>
</head>
<style type="text/css">
#box1 {
  float:right;
}
</style>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <?php include("../header.php") ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <h1>
        Home
      </h1>
      </section>

      <!-- Main content -->

      <!-- php code to connect to database -->
      <?php?>

      <section class="content container-fluid">
        <div class="row">
          <div class="col-md-6">

            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
<!-- dito -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>10</h3>
                <p>New Events</p>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <div class="small-box bg-green">
            <div class="inner">
              <?php
              $servername = "localhost";
              $username = "root";
              $pwd = "";
              $dbname = "goldust";

              // connect to db
              $conn = new mysqli($servername, $username, $pwd, $dbname);

              $query1 = "SELECT COUNT(*) as 'count' FROM events WHERE eventStatus LIKE 'on%going';";
              
              $result1 = $conn->query($query1);
              
              $row1 = $result1->fetch_assoc();
              
              echo '<h3>' . $row1["count"] . '</h3>';
              ?>
              <p>Ongoing Events</p>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="home-ongoingEvents.php" class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="small-box bg-green">
            <div class="inner">
              <?php
              $query2 = "SELECT COUNT(*) as 'count' FROM services s NATURAL JOIN eventservices es NATURAL JOIN events e NATURAL JOIN clients c WHERE s.serviceName LIKE '%rental%' AND e.eventStatus LIKE 'on%going' AND e.packageType LIKE 'semi%package';";
              $result2 = $conn->query($query2);
              $row2 = $result2->fetch_assoc();
              echo '<h3>' . $row2["count"] . '</h3>';
              ?>
              <p>Ongoing Rentals</p>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="home-ongoingRentals.php" class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
       </div>
</div>
</div>
</div>
            <!-- /.box-body -->
          <!-- /.box -->
        <div class="col-md-6" id="box1">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<!-- dito -->

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li>
                  <!-- drag handle -->
                  <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Make the theme responsive</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Check your messages and notifications</span>
                  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
            </div>
            </section>
          <!-- /.box -->

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
  <?php include("../footer.php") ?>


  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
