<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Payments And Expenses</title>
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
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <?php include("../header.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Payments And Expenses
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <button type="button" class="btn btn-block btn-primary btn-lg">Print Event Details</button>
      <?php include('../eventNav.php') ?>
      <div class="content">
        <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Payments:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="jumbotron row">
                <h3>Balance: </h3> <h1>Php 50, 000</h1>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Payment ID</th>
                    <th>Amount</th>
                    <th>Balance</th>
                    <th>Date</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody> 
                  <tr>
                    <td>001</td>
                    <td>20, 000</td>
                    <td>50, 000</td>
                    <td>December 20, 2017</td>
                    <td>1:00 PM</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>

            <div class="jumbotron">
              <h3>Total Amount: Php 150, 000</h3>
              <h3>Total Amount Paid: Php 100, 000</h3>
            </div>
          </div>

        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Expenses:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="jumbotron row">
                <div class="col-md-6">                 
                  <h3>Total Expenses:</h3>
                  <h1>Php 30, 000</h1>  
                </div>
                <div class="col-md-6">
                  <h3>Remaining Budget:</h3>
                  <h1>Php 30, 000</h1>
                </div>
              </div>
              
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Expenses ID</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Proof</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>001</td>
                    <td>20, 000</td>
                    <td>Flowers</td>
                    <td>December 20, 2017</td>
                    <td><a href="#" data-toggle="modal" data-target="#modal-photo">View</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
              <div class="jumbotron row">
                <h3>Over Budget: Php 50, 000</h3>
                <h3>Total Budget: Php 100, 000</h3>
              </div>
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
<div class="modal modal-default fade" id="modal-photo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Design Name Here</h4> 
      </div>
      <div class="modal-body">
        <img src="sly2.jpg" alt="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <a href="gowns.php"><button type="button" class="btn btn-primary">Change</button></a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
<!-- /.modal-dialog -->
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