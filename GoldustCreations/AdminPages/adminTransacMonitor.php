<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Admin | Monitoring of Transactions</title>
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
          Monitoring of Transaction
        </h1>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">
        <div class="row">
          <div class="col-md-6">
            <a href="addEvent.php" class="btn btn-block btn-primary btn-lg">Add Rental</a>
          </div>
          <div class="col-md-6">
            <a href="addEvent.php" class="btn btn-block btn-primary btn-lg">Add Service Transaction</a>
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
                <table id="rentalService" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Service ID</th>
                      <th>Name</th>
                      <th>Service</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2131546</td>
                      <td>Lolo Mola</td>
                      <td>Caretaker</td>
                      <td>02/18/17</td>
                    </tr>
                    <tr>
                      <td>2131546</td>
                      <td>Lolo Mola</td>
                      <td>Caretaker</td>
                      <td>02/18/17</td>
                    </tr>
                    <tr>
                      <td>2131546</td>
                      <td>Lolo Mola</td>
                      <td>Caretaker</td>
                      <td>02/18/17</td>
                    </tr>
                    <tr>
                      <td>2131546</td>
                      <td>Lolo Mola</td>
                      <td>Caretaker</td>
                      <td>02/18/17</td>
                    </tr>
                    <tr>
                      <td>2131546</td>
                      <td>Lolo Mola</td>
                      <td>Caretaker</td>
                      <td>02/18/17</td>
                    </tr>

                    <!--
                    <tr>
                        <div class="col-md-3 col-sm-4"><a data-toggle="modal" data-target="#modal-danger"><i class="fa fa-fw fa-check"></i></a></div>
                        <div class="col-md-3 col-sm-4"><a href="eventDetails.php"><i class="fa fa-fw fa-info"></i></a></div>
                      </td>
                    </tr>
                  -->
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

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
                    <th>ServiceID</th>
                    <th>Name</th>
                    <th>Service</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2131546</td>
                    <td>Lola Mola</td>
                    <td>Caretaker</td>
                    <td>02/18/17</td>
                  </tr>
                  <tr>
                    <td>2131546</td>
                    <td>Lolo Mola</td>
                    <td>Caretaker</td>
                    <td>02/18/17</td>
                  </tr>
                  <tr>
                    <td>2131546</td>
                    <td>Lolo Mola</td>
                    <td>Caretaker</td>
                    <td>02/18/17</td>
                  </tr>
                  <tr>
                    <td>2131546</td>
                    <td>Lolo Mola</td>
                    <td>Caretaker</td>
                    <td>02/18/17</td>
                  </tr>
                  <tr>
                    <td>2131546</td>
                    <td>Lolo Mola</td>
                    <td>Caretaker</td>
                    <td>02/18/17</td>
                  </tr>

                    <!--
                    <tr>
                        <div class="col-md-3 col-sm-4"><a data-toggle="modal" data-target="#modal-danger"><i class="fa fa-fw fa-check"></i></a></div>
                        <div class="col-md-3 col-sm-4"><a href="eventDetails.php"><i class="fa fa-fw fa-info"></i></a></div>
                      </td>
                    </tr>
                  -->
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      </div>

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
      $('#rentalService').DataTable()
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