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
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <?php include("../header.php") ?>

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
          <!-- .... Event Details .... -->
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
                    <td><input type="text" id=""></td>
                    <td><input type="text" name=""></td> 
                  </tbody>
                </table>
              </div>
              <div class="table-responsive col-lg-6">
                <table id="staff" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Role</th>
                      <th>Contact Number</th>
                      <th>Availability</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                      <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                      <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                      <td>Available</td>
                      <td><a data-toggle="modal" data-target="#edit-staff"><span class="glyphicon glyphicon-pencil"></span></a></td>

                      <!-- edit staff modal -->
                      <div id="edit-staff" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Edit Staff</h4>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="row">
                                  <div class="col-lg-7">
                                    <div class="form-group">
                                      <label>Staff Name</label>
                                      <input type="text" id="staff-name" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-5">
                                    <div class="form-group">
                                      <label>Role</label>
                                      <!-- combobox intended here.... -->
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Confirm</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-staff">Add Staff</button></td>
                      
                      <!-- add staff modal -->
                      <div id="add-staff" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Add Staff</h4>
                            </div>
                            <div class="modal-body">
                              
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Confirm</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1 col-lg-offset-10">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
              <div class="col-lg-1">
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
            </div>
          </form>       

          <!-- Entourage Design -->
          <div class="box table-responsive">
            <div class="box-header">
              <h3 class="box-title">Entourage Designs</h3>
            </div>
            <div class="box-body">
              <table id="ent-designs" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Design Name</th>
                    <th>Quantity</th>
                    <th>Photo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">
                    </td>
                    <td>
                      <input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">
                    </td>
                    <td><input type="file" id="design-pic" accept="image/*"></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td><button type="button" class="btn btn-primary">Add Design</button></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>

          <!-- Entourage -->
          <div class="box table-responsive">
            <div class="box-header">
              <h3 class="box-title">Entourage</h3>
            </div>
            <div class="box-body">
              <table id="ent" class="table table-bordered table-striped table-condensed">
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
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Name"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Role"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Shoulder"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Chest"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Stomach"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Waist"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Arm Length"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Arm Hole"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Muscle"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Pants Length"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Baston"></td>
                    <td><input type="file" id="design-pic" accept="image/*"></td>
                    <td><a><span class="glyphicon glyphicon-remove" style="margin: 2px;"></span></a><a><span class="glyphicon glyphicon-pencil" style="margin: 2px;"></span></a></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td><button type="button" class="btn btn-primary">Add Entourage</button></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>

          <!-- Decors -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Decors</h3>
            </div>
            <div class="box-body table-responsive">
              <table id="ent" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Event Name</th>
                    <th>Equipment Name</th>
                    <th>Quantity</th>
                    <th>Photo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                    <td><input type="file" id="design-pic" accept="image/*"></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td><button type="button" class="btn btn-primary">Add Decoration</button></td>
                  </tr>
                </tfoot>
              </table>
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
