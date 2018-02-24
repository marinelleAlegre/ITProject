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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include("adminHeader.php") ?>
  <?php include("adminNavbar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-lg-3">

          <!--LOL dito start-->
          <div class="box">
              <!-- /.box-header -->
              <div class="box-body">

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
                require('../db.php');
                $query = ""
               ?>

              <h3>10</h3>
              <p>Ongoing Events</p>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="#" class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>10</h3>
              <p>Ongoing Rentals</p>
              <div class="icon">
                <i class="ion ion-bowtie"></i>
              </div>
              <a href="#" class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>


      </div>
            
              
            
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
