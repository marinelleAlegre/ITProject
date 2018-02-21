<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Services</title>
  <?php include("../head.php") ?>
  <link rel="stylesheet" type="text/css" href="style.css">
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
        Services
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#add-rental">Add Rentals</button>  
          </div>

          <!-- add rental modal -->
          <div id="add-rental" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add New Rental</h4>
                </div>
                <div class="modal-body">
                  <form>
                    <span class="form-group">
                      <label>Client Name</label>
                      <input type="text" id="c-name" class="form-control">
                    </span>

                    <span class="form-group">
                      <label>Contact Number</label>
                      <input type="text" id="contact-number" class="form-control">
                    </span>

                    <span class="form-group">
                      <label>Date Rented</label>
                      <input type="date" id="date-rented" class="form-control">
                    </span>

                    <span class="form-group">
                      <label>Date Due</label>
                      <input type="date" id="date-due" class="form-control">
                    </span>

                    <div class="modal-footer">
                       <div class="col-md-2 col-md-offset-8">
                          <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                        <div class="col-md-2">
                          <button type="submit" class="btn btn-success">Confirm</button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <button class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#add-svc-tn">Add New Service Transaction</button> 
          </div>

          <!-- add service transaction modal -->
          <div id="add-svc-tn" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add New Service Transaction</h4>
                </div>
                <div class="modal-body">
                  <form>
                    <span class="form-group">
                      <label>Client Name</label>
                      <input type="text" id="c-name" class="form-control">
                    </span>

                    <span class="form-group">
                      <label>Contact Number</label>
                      <input type="text" id="contact-number" class="form-control">
                    </span>

                    <span class="form-group">
                      <label>Date</label>
                      <input type="date" id="date-rented" class="form-control">
                    </span>

                    <div class="form-group">
                      <label>Service</label>
                      <select name="services" class="form-control" id="sel-servc">
                        <option value="make-up">Make-up</option>
                        <option value="attire-rental">Attire Rental</option>
                        <option value="photography">Photography</option>
                        <option value="video-coverage">Video Coverage</option>
                      </select>

                    </div>

                    <div class="modal-footer">
                       <div class="col-md-2 col-md-offset-8">
                          <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                        <div class="col-md-2">
                          <button type="submit" class="btn btn-success">Confirm</button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-md-6"> 
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                  <table id="rentalTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Service ID</th>
                      <th>Name</th>
                      <th>Service</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                  <table id="serviceTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Service ID</th>
                      <th>Name</th>
                      <th>Service</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              <!-- /.box-body -->
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
    $('#rentalTable').DataTable()
    $('#serviceTable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>