<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Ongoing Events</title>
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
        Ongoing Events
      </h1>
    </section>

    <!-- Main content -->
    <?php
        require("../db.php");
        $query1 = "SELECT 
          e.celebrantName 'celebrant',
          c.clientName 'client name',
          e.eventType 'event type',
          e.packageType 'package type',
          e.eventDate 'event date',
          e.eventTime 'event time',
          e.eventLocation 'event location'
          FROM events e NATURAL JOIN clients c
          WHERE e.eventStatus LIKE 'on%going'";

          $result1 = $con->query($query1);
    ?>

    <section class="content container-fluid">
      <button class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#add-event">Add Event</button>

        <!-- add event modal -->
        <div id="add-event" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Event</h4>
              </div>
              <div class="modal-body">
                <form method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" name="event-name" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Client Name</label>
                        <input type="text" name="client-name" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" name="contact-number" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Celebrant</label>
                        <input type="text" name="celebrant" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div>
                        <label>Motiff</label>
                        <input type="color" name="motiff" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Event Date</label>
                        <input type="date" name="event-date" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Event Time</label>
                        <input type="time" name="event-time" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Package Availed</label>
                        <span class="radio"><label><input type="radio" name="event-time" value="full-Package">Full Package</label></span>
                        <soan class="radio"><label><input type="radio" name="event-time" value="semi-Package">Semi Package</label></soan>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Event Location</label>
                        <input type="text" name="event-loc" class="form-control">
                      </div>
                    </div>
                  </div>
                  
                  <!-- Services -->
                  <?php 
                    $query2 = "SELECT serviceName FROM services WHERE status LIKE 'active'";

                    $result2 = $con->query($query2);
                  ?>
                  <div class="box">
                    <div class="box-body">
                      <div class="table table-responsive">
                        <table id="svc-tbl" class="table table-hover table-bordered table-condensed table-hover text-center">
                          <h4>Services</h4>
                          <thead>
                            <tr>
                              <th>Services</th>
                              <th>Quantity</th>
                              <th>Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!--
                            <tr>
                              <td>
                                <form>
                                  <div class="form-group checkbox">
                                    <label><input type="checkbox" id="" value="gowns">Gowns</label>
                                  </div>
                                </form>
                              </td>
                              <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                              <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                            </tr>
                            -->
                            <?php if($result2->num_rows > 0){ 
                              while ($row = $result2->fetch_assoc()) { ?> 
                                <tr>
                                  <td><form><span class="form-group checkbox"><label><input type="checkbox" value="<?php $row["serviceName"]; ?>"><?php echo $row["serviceName"]; ?></label></span></form></td>
                                  <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                                  <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                                </tr>
                            <?php }
                                  }else{
                                    echo '0 results';
                                  } ?>
                            <!--
                            <td>
                              <form>
                                <div class="form-group checkbox">
                                  <label><input type="checkbox" name="" value="makeup">Makeup</label>
                                </div>
                              </form>
                            </td> 
                            --> 
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div> 
                </form>
                <div class="modal-footer">
                  <div class="row">
                    <div class="col-lg-2">
                      <button type="submit" class="btn btn-success" action="submitForm.php">Save</button>
                    </div>
                    <div class="col-lg-2">
                      <button type="reset" class="btn btn-danger" onclick="reset_chkbx()">Reset</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="box">
            <div class="box-body">
                <div  class="table table-responsive">
                  <table id ="example1" class="table table-bordered table-condensed table-hover text-center">
                    <thead>
                      <tr>
                        <th>Event Name</th>
                        <th>Client Name</th>
                        <th>Event Type</th>
                        <th>Package Type</th>
                        <th>Event Date</th>
                        <th>Event Time</th>
                        <th>Event Location</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if($result1->num_rows > 0){ 
                      while ($row = $result1->fetch_assoc()) { ?> 
                        <tr>
                          <td><?php echo $row["celebrant"]; ?></td>
                          <td><?php echo $row["client name"]; ?></td>
                          <td><?php echo $row["event type"]; ?></td>
                          <td><?php echo $row["package type"]; ?></td>
                          <td><?php echo $row["event date"]; ?></td>
                          <td><?php echo $row["event time"]; ?></td>
                          <td><?php echo $row["event location"]; ?></td>
                          <td>
                            <div class="col-md-3 col-sm-4"><a data-toggle="modal" data-target="#modal-danger"><i class="fa fa-fw fa-check"></i></a></div>
                            <div class="col-md-3 col-sm-4"><a href="eventDetails.php"><i class="fa fa-fw fa-info"></i></a></div>
                          </td>
                        </tr>
                    <?php }
                          }else{
                            echo '0 results';
                          } ?>    
                    </tbody>
                </table>
              </div>
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
    $('#example1').DataTable()
    $('#svc-tbl').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

  function reset_chkbx(){
    $('input:checkbox').prop('checked', false);
  }
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>