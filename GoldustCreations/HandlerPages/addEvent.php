<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Handler | Add Event</title>
  <?php include("../head.php") ?>.
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
  <?php require('../db.php'); ?>
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
          <form method="post">
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Event Name</label>
                  <input type="text" name="event-name" class="form-control">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Client Name</label>
                  <input type="text" name="client-name" class="form-control">
                </div>
              </div>
              <div class="col-lg-4">
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
                  <label>Event Location</label>
                  <input type="text" name="event-loc" class="form-control">
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
            
            <!-- Services -->
            <div class="row">
              <div class="table-responsive col-lg-6">
                <table id="" class="table table-striped table-bordered">
                  <h4>Services</h4>
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
                      <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                      <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                    </tr>
                    <td>
                      <form>
                        <div class="form-group checkbox">
                          <label><input type="checkbox" name="" value="makeup">Makeup</label>
                        </div>
                      </form>
                    </td> 
                    <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                    <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td> 
                  </tbody>
                </table>
              </div>
              <div class="table-responsive col-lg-6">
                <table id="staff" class="table table-striped table-bordered">
                  <h4>Staff</h4>
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Role</th>
                      <th>Contact Number</th>
                      <th>Availability</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="staff-body" onclick="clicked_id(this.id)">
                    <tr>
                      <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                      <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                      <td><input class="form-control" type="text" name="" style="border: none;" placeholder="Insert text here"></td>
                      <td>Available</td>
                      <td><a><span class="glyphicon glyphicon-remove" style="margin: 2px;" onclick="rmvrow(this)"></span></a><a data-toggle="modal" data-target="#edit-staff"><span class="glyphicon glyphicon-pencil" style="margin: 2px;"></span></a></td>

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
                                      <input type="text" id="staff-role" class="form-control">
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
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="ent-designs-body" onclick="clicked_id(this.id)">
                  <tr>
                    <td>
                      <input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">
                    </td>
                    <td>
                      <input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">
                    </td>
                    <td><input type="file" id="design-pic" accept="image/*"></td>
                    <td><a><span class="glyphicon glyphicon-remove" style="margin: 2px;" onclick="rmvrow(this)"></span></a></td>
                  </tr>
                  
                  <script type="text/javascript">
                    // add new row on button click... 
                    function add_entdesign(){
                      var table = document.getElementById("ent-designs-body");
                      var row = table.insertRow(-1);

                      var td1 = row.insertCell(0);
                      var td2 = row.insertCell(1);
                      var td3 = row.insertCell(2);
                      var td4 = row.insertCell(3);

                      td1.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">');
                      td2.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">');
                      td3.innerHTML = ('<input type="file" id="design-pic" accept="image/*">');
                      td4.innerHTML = ('<a><span class="glyphicon glyphicon-remove"></span></a>');
                    }
                  </script>
                </tbody>
                <tfoot>
                  <tr>
                    <td><button type="button" class="btn btn-primary" id="add-entdesign-btn" onclick="add_entdesign()">Add Design</button></td>
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
                <tbody id="ent-body" onclick="clicked_id(this.id)">
                  <tr>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;"></td>
                    <td><input type="file" id="design-pic" accept="image/*"></td>
                    <!--<td><a><span class="glyphicon glyphicon-remove" style="margin: 2px;"></span></a><a><span class="glyphicon glyphicon-pencil" style="margin: 2px;"></span></a></td>-->
                    <td><a><span class="glyphicon glyphicon-remove" style="margin: 2px;" onclick="rmvrow(this)"></span></a></td>
                    <!-- add new row on button click... -->
                    <script type="text/javascript">
                      function add_ent(){
                        var table = document.getElementById("ent-body");
                        var row = table.insertRow(-1);

                        var td1 = row.insertCell(0);
                        var td2 = row.insertCell(1);
                        var td3 = row.insertCell(2);
                        var td4 = row.insertCell(3);
                        var td5 = row.insertCell(4);
                        var td6 = row.insertCell(5);
                        var td7 = row.insertCell(6);
                        var td8 = row.insertCell(7);
                        var td9 = row.insertCell(8);
                        var td10 = row.insertCell(9);
                        var td11 = row.insertCell(10);
                        var td12 = row.insertCell(11);
                        var td13 = row.insertCell(12);

                        td1.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td2.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td3.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td4.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td5.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td6.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td7.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td8.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td9.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td10.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td11.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;">');
                        td12.innerHTML = ('<input type="file" id="design-pic" accept="image/*">');
                        td13.innerHTML = ('<a><span class="glyphicon glyphicon-remove" style="margin: 2px;"></span></a>');
                      }
                    </script>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td><button type="button" class="btn btn-primary" onclick="add_ent()">Add Entourage</button></td>
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
              <table id="decor" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Event Name</th>
                    <th>Equipment Name</th>
                    <th>Quantity</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="decor-body" onclick="clicked_id(this.id)">
                  <tr>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                    <td><input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here"></td>
                    <td><input type="file" id="design-pic" accept="image/*"></td>
                    <td><a><span class="glyphicon glyphicon-remove" style="margin: 2px;" onclick="rmvrow(this)"></span></a></td>
                  </tr>
                  <script type="text/javascript">
                    function add_decor(){
                      
                      var table = document.getElementById("decor-body");
                      var row = table.insertRow(-1);

                      var td1 = row.insertCell(0);
                      var td2 = row.insertCell(1);
                      var td3 = row.insertCell(2);
                      var td4 = row.insertCell(3);
                      var td5 = row.insertCell(4);

                      td1.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">');
                      td2.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">');
                      td3.innerHTML = ('<input class="form-control" type="text" id="" style="border: none;" placeholder="Insert text here">');
                      td4.innerHTML = ('<input type="file" id="design-pic" accept="image/*">');
                      td5.innerHTML = ('<a><span class="glyphicon glyphicon-remove" style="margin: 2px;"></span></a>');
                      
                      /*
                      var rowcount = document.getElementById("decor-body").rows.length;
                      var tr_element = document.createElement("tr"); // create tr element

                      // td1
                      var td1 = document.createElement("td"); // create td element
                      td1 = document.createElement("input"); // create input element
                      var attrib1 = document.createAttribute("class"); // create class attribute
                      attrib1.value = "form-control"; // assign value to attribute
                      td1.setAttributeNode(attrib1); // set attribute to element
                      var attrib2 = document.createAttribute("type");
                      attrib2.value = "text";
                      td1.setAttributeNode(attrib2);
                      var attrib3 = document.createAttribute("style");
                      attrib3.value = "border: none;";
                      td1.setAttributeNode(attrib3);
                      var attrib4 = document.createAttribute("placeholder");
                      attrib4.value = "Insert text here";
                      td1.setAttributeNode(attrib4);
                      tr_element.appendChild(td1); // append new element to existing element

                      // td2
                      var td2 = document.createElement("td"); // create td element
                      td2 = document.createElement("input"); // create input element
                      td2.setAttributeNode(attrib1); // set attribute to element
                      td2.setAttributeNode(attrib2);
                      td2.setAttributeNode(attrib3);
                      td2.setAttributeNode(attrib4);
                      tr_element.appendChild(td2); // append new element to existing element

                      // td3
                      var td3 = document.createElement("td"); // create td element
                      td3 = document.createElement("input"); // create input element
                      td3.setAttributeNode(attrib1); // set attribute to element
                      td3.setAttributeNode(attrib2);
                      td3.setAttributeNode(attrib3);
                      td3.setAttributeNode(attrib4);
                      tr_element.appendChild(td3); // append new element to existing element

                      // td4
                      var td4 = document.createElement("td");
                      td4 = document.createElement("input");
                      var attrib5 = document.createAttribute("type");
                      attrib5.value = "file";
                      td4.setAttributeNode(attrib5);
                      var attrib6 = document.createAttribute("accept");
                      attrib6.value = "image/*";
                      td4.setAttributeNode(attrib6);
                      var td4_sub1 = document.createElement("a");
                      var td4_sub2 = document.createElement("span");
                      var attrib7 = document.createAttribute("class");
                      attrib7.value = "glyphicon glyphicon-remove";
                      td4_sub2.setAttributeNode(attrib7);
                      var attrib8 = document.createAttribute("style");
                      attrib8.value = "margin: 2px;";
                      td4_sub2.setAttributeNode(attrib8);
                      td4_sub1.appendChild(td4_sub2);
                      td4.appendChild(td4_sub1);
                      tr_element.appendChild(td4);

                      document.getElementById("decor-body").appendChild(tr_element);
                      */
                    }
                  </script>
                </tbody>
                <tfoot>
                  <tr>
                    <td><button type="button" class="btn btn-primary" onclick="add_decor()">Add Decoration</button></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1 col-lg-offset-10">
              <button type="submit" class="btn btn-success" action="submitForm.php">Save</button>
            </div>
            <div class="col-lg-1">
              <button type="reset" class="btn btn-danger">Reset</button>
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

<!-- remove row from table -->
<script type="text/javascript">
  
  var click_tbl_id = "";
  function clicked_id(tbl_id){
    click_tbl_id = tbl_id;
  }
  /*
    function rmvrow(i){
    document.getElementById(click_tbl_id).deleteRow(click_tbl_id[i].rowIndex);
  }
  */
  function rmvrow(row){
    var i = row.parentNode.parentNode.parentNode.rowIndex;
    document.getElementById(click_tbl_id).deleteRow(i);
  }
  
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
