<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <title>Events | Costumes</title>
  <?php include("../head.php") ?>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">

 #img {
    width: 280px;
    height: 250px;
    padding: 10px 10px 10px 10px; !important
 }

 #text {
  text-align: left;
  size: 10px;
 }
#con {
padding: 0 0 0 0;
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include("adminHeader.php") ?>
  <?php include("adminNavbar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Costumes Selection
      </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
    <a href="addcostumes.php" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#addCostumes">Add Costumes</a>

    <!-- Modal -->
  <div class="modal fade" id="addCostumes" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Photo</h4>
        </div>
        <div class="modal-body">
          <form>
              <div class="row">
                  <div class="col-lg-7">
                      <div class="form-group">
                          <label>Name</label>
                          <input type="text" id="staff-name" class="form-control">
                      </div>
                  </div>
              <div class="col-lg-5">
                      <div class="form-group">
                          <label>Color</label>
          <!-- combobox intended here.... -->
                          <input type="text" id="staff-role" class="form-control">
                      </div>
              </div>
              <div class="col-lg-5">      
                  <button onclick="myFunction()"> Upload Photo </button>
              </div>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- end of modal -->

      <?php include("adminItemNavigation.php"); ?>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="container" id="con">
      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6" id="img">
          <a href="#" class="d-block mb-4 h-100" id="con1">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
