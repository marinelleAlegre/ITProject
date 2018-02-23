
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<style type="text/css">
  #box1 {
    margin-top: 15px;
  }
</style>
<html>
<head>
  <title>Handler | Canceled Events</title>
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
        Canceled Events
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
                  <th>Date and Time of event</th>
                  <th>Location</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>0003</td>
                  <td>Jan-Toleds Nuptial</td>
                  <td>Jann Toledo</td>
                  <td>Wedding</td>
                  <td>Full Package</td>
                  <td>November 2, 2017 at 10 AM</td>
                  <td>Bagui City</td>
                  <td>
                      <div class="col-md-3 col-sm-4">
                          <a href="eventDetails.php" data-toggle="modal" data-target="#edeve">
                          <i class="fa fa-fw fa-info"></i>
                          </a>
                      <!--Start of editing canceled events -->
                      <!-- Modal -->
                      <div id="edeve" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Edit Event</h4>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                              <form>
                                <label for="fname">Event Name</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Jan-Toleds Nuptial">
                              </form>
                            </div>
                            <div class="row">
                              <form>
                                <label for="fname">Client Name</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Jann Toledo">
                              </form>
                            </div>
                            <div class="row">
                              <form>
                                <label for="fname">Event Type</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Wedding">
                              </form>
                            </div>
                            <div class="row">
                              <form>
                                <label for="fname">Package Type</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Full Package">
                              </form>
                            </div>
                            <div class="row">
                              <form>
                                <label for="fname">Date and time of event</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="November 2, 2017 at 10 AM">
                              </form>
                            </div>
                            <div class="row">
                              <form>
                                <label for="fname">Location</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Baguio City">
                              </form>
                            </div>
                            <div class="row">
                              <form>
                                <label for="fname">Add Referral</label>
                                <input type="text" id="fname" name="fname" class="form-control">
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#save">Save</button>
                              <!-- modal for save -->
                              <div id="save" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Alert!!!</h4>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to save? </p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    </div>
                                  </div>

                                </div>
                              </div>
                              <!-- end of save modal -->
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>

                        </div>
                      </div>
                      <!-- End of editing canceled events -->
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