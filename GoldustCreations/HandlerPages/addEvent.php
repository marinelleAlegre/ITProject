<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Add Event</title>
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
        Add Event
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <ul class="nav nav-tabs">
        <li><a href="#details" data-toggle="tab">Details</a></li>
        <li><a href="#" data-toggle="tab">Entourage</a></li>
        <li><a href="#" data-toggle="tab">Decors</a></li>
        <li><a href="#" data-toggle="tab">Payment</a></li>
        <li><a href="#" data-toggle="tab">Expenses</a></li>
      </ul>

      <div class="tab-content">
        <div id="details" class="tab-pane">
          <form>
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Event Name</label>
                  <input type="text" id="event-name" class="form-control">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Client Name</label>
                  <input type="text" id="client-name" class="form-control">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Contact Number</label>
                  <input type="text" id="contact-number" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Celebrant</label>
                  <input type="text" id="celebrant" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div>
                  <label>Motiff</label>
                  <input type="color" id="motiff" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Event Date</label>
                  <input type="date" id="event-date" class="form-control">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Event Time</label>
                  <input type="time" id="event-time" class="form-control">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Event Location</label>
                  <input type="text" id="event-time" class="form-control">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Package Availed</label>
                  <span class="radio"><label><input type="radio" id="event-time" value="full-Package">Full Package</label></span>
                  <soan class="radio"><label><input type="radio" id="event-time" value="semi-Package">Semi Package</label></soan>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="table-responsive col-lg-6">
                <table id="" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Services</th>
                      <th>Quantity</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <form>
                          <div class="form-group checkbox">
                            <label><input type="checkbox" id="" value="gowns">Gowns</label>
                          </div>
                        </form>
                      </td>
                      <td>12</td>
                      <td>35000</td>
                    </tr>
                    <td>
                      <form>
                        <div class="form-group checkbox">
                          <label><input type="checkbox" id="" value="makeup">Makeup</label>
                        </div>
                      </form>
                    </td> 
                    <td>7</td>
                    <td>10000</td> 
                  </tbody>
                </table>
              </div>
              <div class="table-responsive col-lg-6">
                <table id="" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Role</th>
                      <th>Contact Number</th>
                      <th>Availability</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nemo Kamo</td>
                      <td>Makeup Artist</td>
                      <td>09876541234</td>
                      <td>Available</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td><button type="button" class="btn btn-primary">Add</button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </form>
        </div>
        <div id="entourage" class="tab-pane">
          <p>yo</p>
        </div>
        <div id="" class="">
          
        </div>
        <div id="" class="">
          
        </div>
        <div id="" class="">
          
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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
