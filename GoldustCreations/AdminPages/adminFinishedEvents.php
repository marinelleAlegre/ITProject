<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<style type="text/css">
}
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}
}

.col-75 {
    float: right;
    width: 75%;
    margin-top: 10px;
}
  }
</style>
<html>
<head>
  <title>Handler | Finished Events</title>
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
      <h1 class="pull-left">
        Finished Events
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box" id="box1">
      <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
                  <td>0001</td>
                  <td>Walwalan Reunion</td>
                  <td>Ruel Bigo</td>
                  <td>Reunion</td>
                  <td>Semi Package</td>
                  <td>November 28, 2017 at 10 AM</td>
                  <td>Km 4 La Trinidad</td>
                  <td>
                      <div class="col-md-3 col-sm-4"><a href="eventDetails.php" data-toggle="modal" data-target="#viewin"><i class="fa fa-fw fa-info"></i></a>
                      <!-- start of view finished event info -->

                      <div id="viewin" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Walwalan Reunion</h4>
                            </div>
                            <br>
                            <div class="modal-body">
                            <div class="col-25">
                              <span class="first">Event Name: </span> 
                            </div>
                            <div class="col-75">
                              <p> Walwalan Reunion </p>
                            </div>
                            <div class="col-25">
                              <span class="first">Client Name: </span>
                            </div>
                            <div class="col-75">
                              <p>Ruel Bigo </p>
                            </div>
                            <div class="col-25">
                              <span class="first">Event Type: </span>
                            </div>
                            <div class="col-75">
                              <p>Reunion </p>
                            </div>
                            <div class="col-25">
                              <span class="first">Package Type: </span>
                            </div>
                            <div class="col-75">
                              <p>Semi-Package </p>
                            </div>
                            <div class="col-25">
                              <span class="first">Date and Time of Event: </span>
                            </div>
                            <div class="col-75">
                              <p>November 28, 2017 at 10 AM </p>
                            </div>
                            <div class="col-25">
                              <span class="first">Location: </span>
                            </div>
                            <div class="col-75">
                              <p> Km 4 La Trinidad </p>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                        </div>
                      </div>
                      <!-- end -->
                      </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>