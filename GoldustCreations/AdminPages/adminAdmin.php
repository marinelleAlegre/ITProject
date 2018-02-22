<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Admin | Emplooyes</title>
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
        Employees
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <a href="addAdmin.php" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#addAdmin">Add Employee</a>
<!-- Modal -->
  <div class="modal fade" id="addAdmin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Employee</h4>
        </div>
        <div class="modal-body">
          <form>
              <div class="row" id="row1">
                  <div class="col-lg-7" id="row1">
                      <div class="form-group" id="row1">
                          <label>Employee ID</label>
                          <input type="text" id="staff-name" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="row" id="row1">
                  <div class="col-lg-7" id="row1">
                          <div class="form-group" id="row1">
                              <label>Employee Name</label>
              <!-- combobox intended here.... -->
                              <input type="text" id="staff-role" class="form-control">
                          </div>
                  </div>
              </div>
              <div class="row" id="row1">
                  <div class="col-lg-5" id="row1">
                          <div class="form-group" id="row1">
                              <label>Contact Number</label>
              <!-- combobox intended here.... -->
                              <input type="text" id="staff-role" class="form-control">
                          </div>
                  </div>
              </div>
              <div class="row" id="row1">
                  <div class="col-lg-5" id="row1">
                          <div class="form-group" id="row1">
                              <label>Address</label>
              <!-- combobox intended here.... -->
                              <input type="text" id="staff-role" class="form-control">
                          </div>
                  </div>
              </div>
              <div class="row" id="row1">
                  <div class="col-lg-5" id="row1">
                          <div class="form-group" id="row1">
                              <label>Email</label>
              <!-- combobox intended here.... -->
                              <input type="text" id="staff-role" class="form-control">
                          </div>
                  </div>
              </div>
              <br>
               <div class="row" id="row1">
                  <div class="col-lg-5" class="form-group" id="row1">
                      <label>Role</label>
                      <select name="services" class="form-control" id="sel-servc" value="Choose">
                        <option value="make-up">Make-up Artist</option>
                        <option value="attire-rental">Florist</option>
                        <option value="photography">Photographer</option>
                        <option value="video-coverage">Videographer</option>
                        <option value="video-coverage">Gown Handler</option>
                      </select>
                    </div>
              </div>
              <div class="row" id="row1">
                  <div class="col-lg-5" class="form-group" id="row1">
                      <label>Standing</label>
                      <select name="services" class="form-control" id="sel-servc" value="Choose">
                        <option value="make-up">On-Call</option>
                        <option value="attire-rental">Stay-In</option>
                      </select>
                    </div>
              </div>
              <br>
              <div class="row" id="row1">
                  <div class="col-lg-5" id="row1">      
                      <button onclick="myFunction()"> Upload Photo </button>
                  </div>
              </div>
              <br>

          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#save">Save</button>
          <!-- Modal -->
  <div class="modal fade" id="save" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ALERT</h4>
        </div>
        <div class="modal-body">
          <form>
              <div class="row">
                  <p>Are you sure you want to save this?</p>
              <div class="col-lg-5">
              </div>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- end of modal -->
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- end of modal -->
    <?php include("../EmployeeNav.php") ?>
      <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Contact Number</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>5000</td>
                    <td>MArz Tindaan</td>
                    <td>Km4 La Trinidad</td>
                    <td>marz@yahoo.com</td>
                    <td>09912349956</td>
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
          <!-- /.box -->

        <!-- /.col -->
        <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Alert!!!</h4> 
              </div>
              <div class="modal-body">
                <p>Finish This Event?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-outline" data-toggle="modal" data-target="#modal-success" data-dismiss="modal">Yes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Success</h4>
              </div>
              <div class="modal-body">
                <p>Event Successfully Finished&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

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