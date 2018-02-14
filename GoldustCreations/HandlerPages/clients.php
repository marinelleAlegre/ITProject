<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Clients</title>
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
        Clients
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="all-clients" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Client ID</th>
                  <th>Client Name</th>
                  <th>Registered Date</th>
                </tr>
                </thead>
                <tbody>
                  <tr class="clickable-row" data-toggle="modal" data-target="#client-modal">
                    <td>Client ID</td>
                    <td>Client Name</td>
                    <td>Client Name</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- modal -->
          <div id="client-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Client Name</h4>
                </div>
                <div class="modal-body">
                  <span><p>Client ID</p></span>
                  <span><p>Contact Number</p></span>
                  <span><p>Address</p></span>
                  <span><p>Email</p></span>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body">
                          <table id="client-desc" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Event/Rental Name</th>
                                <th>Date</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>ID</td>
                                <td>Event/Rental Name</td>
                                <td>Date</td>
                                <td>Status</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="row">
                    <div class="col-lg-4 col-xs-2">
                      <button class="btn btn-primary">Edit</button>
                    </div>
                    <div class="col-lg-4 col-xs-5">
                      <button class="btn btn-primary">Add Service</button>
                    </div>
                    <div class="col-lg-4 col-xs-3">
                      <button class="btn btn-primary">Add Event</button>
                    </div>
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
    $('#all-clients').DataTable()
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