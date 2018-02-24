<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Home</title>
  <?php include("../head.php") ?>
</head>
<style type="text/css">
#box1 {
  float:right;
}
</style>
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
      <section class="content container-fluid">
        <?php
          require('../db.php');

          $query1 = "SELECT celebrantName, eventDate, eventTime, eventLocation, eventType, motif FROM events WHERE eventStatus LIKE 'on%going';";

          $result1 = $con->query($query1);
          /*
          if($result1->num_rows > 0){
            echo '<div class="box">
            <div class="box-body">
                <div class="table table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>' . 'Celebrant Name' . '</th>
                        <th>' . 'Event Date' . '</th>
                        <th>' . 'Event Time' . '</th>
                        <th>' . 'Event Location' . '</th>
                        <th>' . 'Event Type' . '</th>
                        <th>' . 'Motiff' . '</th>
                      </tr>
                    </thead>
                    <tbody>';
            while ($row = $result1->fetch_assoc()) {
              echo 
              '<tr>
                <td>' . $row["celebrantName"] . '</td>
                <td>' . $row["eventDate"] . '</td>
                <td>' . $row["eventTime"] . '</td>
                <td>' . $row["eventLocation"] . '</td>
                <td>' . $row["eventType"] . '</td>
                <td>' . $row["motif"] . '</td>
              </tr>';
            }
            echo '</tbody>
                  </table>
                </div>
              </div>
            </div>';
          }else{
            echo '0 results';
          }
          */
        ?>
          <div class="box">
            <div class="box-body">
                <div  class="table table-responsive">
                  <table id ="example1" class="table table-bordered table-hover table-condensed text-center">
                    <thead>
                      <tr>
                        <th>Celebrant Name</th>
                        <th>Event Date</th>
                        <th>Event Time</th>
                        <th>Event Location</th>
                        <th>Event Type</th>
                        <th>Motiff</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if($result1->num_rows > 0){ 
                      while ($row = $result1->fetch_assoc()) { ?> 
                        <tr>
                          <td><?php echo $row["celebrantName"]; ?></td>
                          <td><?php echo $row["eventDate"]; ?></td>
                          <td><?php echo $row["eventTime"]; ?></td>
                          <td><?php echo $row["eventLocation"]; ?></td>
                          <td><?php echo $row["eventType"]; ?></td>
                          <td><?php echo $row["motif"]; ?></td>
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
      </section>

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
