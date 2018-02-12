<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Entourage</title>
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
  <?php include("../header.php") ?>
  <?php include("../navbar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Entourage
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <button type="button" class="btn btn-block btn-primary btn-lg">Print Event Details</button>
      <?php include('../eventNav.php') ?>

      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Attire Designs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="designTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>EventID</th>
                  <th>Event Name</th>
                  <th>Client Name</th>
                  <th>Event Type</th>
                  <th>Package Type</th>
                  <th>Date and Time of Event</th>
                  <th>Location</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>0002</td>
                    <td>Emm-Reu Nuptial</td>
                    <td>Client Name</td>
                    <td>Wedding</td>
                    <td>Full Package</td>
                    <td>December 18, 2017 at 1 PM</td>
                    <td>Bakakeng</td>
                    <td>
                      <div class="col-md-3 col-sm-4"><a data-toggle="modal" data-target="#modal-danger"><i class="fa fa-fw fa-check"></i></a></div>
                      <div class="col-md-3 col-sm-4"><a href="eventDetails.php"><i class="fa fa-fw fa-info"></i></a></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Entourage</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="entourageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>EventID</th>
                  <th>Event Name</th>
                  <th>Client Name</th>
                  <th>Event Type</th>
                  <th>Package Type</th>
                  <th>Date and Time of Event</th>
                  <th>Location</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>0002</td>
                    <td>Emm-Reu Nuptial</td>
                    <td>Client Name</td>
                    <td>Wedding</td>
                    <td>Full Package</td>
                    <td>December 18, 2017 at 1 PM</td>
                    <td>Bakakeng</td>
                    <td>
                      <div class="col-md-3 col-sm-4"><a data-toggle="modal" data-target="#modal-danger"><i class="fa fa-fw fa-check"></i></a></div>
                      <div class="col-md-3 col-sm-4"><a href="eventDetails.php"><i class="fa fa-fw fa-info"></i></a></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#designTable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#entourageTable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>