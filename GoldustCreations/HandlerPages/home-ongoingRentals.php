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
        Ongoing Rentals
      </h1>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">
        <?php
          require('../db.php');

          $query1 = "SELECT s.serviceName 'Service Name', e.celebrantName 'Celebrant Name', c.clientName 'Client Name', c.contactNumber 'Contact Number' FROM services s NATURAL JOIN eventservices es NATURAL JOIN events e NATURAL JOIN clients c WHERE s.serviceName LIKE '%rental%' AND e.eventStatus LIKE 'on%going' AND e.packageType LIKE 'semi%package';";

          $result1 = $con->query($query1);
        ?>
        <div class="box">
            <div class="box-body">
                <div  class="table table-responsive">
                  <table id ="example1" class="table table-bordered table-condensed table-hover text-center">
                    <thead>
                      <tr>
                        <th>Service Name</th>
                        <th>Celebrant Name</th>
                        <th>Client Name</th>
                        <th>Contact Number</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    if($result1->num_rows > 0){ 
                      while ($row = $result1->fetch_assoc()) { ?> 
                        <tr>
                          <td><?php echo $row["Service Name"]; ?></td>
                          <td><?php echo $row["Celebrant Name"]; ?></td>
                          <td><?php echo $row["Client Name"]; ?></td>
                          <td><?php echo $row["Contact Number"]; ?></td>
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
