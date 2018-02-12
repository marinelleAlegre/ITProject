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
              <button type="button" class="btn btn-block btn-primary btn-lg" >Add Attire Designs</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="designTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Design ID</th>
                  <th>Name</th>
                  <th>Quantiry</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>0002</td>
                    <td>Emm-Reu Nuptial</td>
                    <td>Client Name</td>
                    <td><a href="#" data-toggle="modal" data-target="#modal-photo">View</a></td>
                    <td>
                      <div class="col-md-3 col-sm-4"><a data-toggle="modal" data-target="#modal-photo"><i class="fa fa-fw fa-exchange"></i></a></div>
                      <div class="col-md-3 col-sm-4"><a data-toggle="modal" data-target="#modal-danger"><i class="fa fa-fw fa-remove"></i></a></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box">
            <button type="button" class="btn btn-block btn-primary btn-lg">Add New Entourage</button>
            <div class="box-header">
              <h3 class="box-title">List of Entourage</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="entourageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Shoulder</th>
                  <th>Chest</th>
                  <th>Stomach</th>
                  <th>Waist</th>
                  <th>Arm Length</th>
                  <th>Arm Hole</th>
                  <th>Muscle</th>
                  <th>Pants Length</th>
                  <th>Baston</th>
                  <th>Design Photo</th>
                  <th>Action</th>
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
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
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

          <!-- modal body -->
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

          <div class="modal modal-danger fade" id="modal-danger">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Allert!!!!!</h4> 
                </div>
                <div class="modal-body">
                  <p>Remove this Design from the list!?????</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Remove</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
          <!-- /.modal-dialog -->
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
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#entourageTable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>