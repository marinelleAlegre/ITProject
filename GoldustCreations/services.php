<html>
<style type="text/css">
	#active {
		color: green;
		padding: 10px;
	}

	#tietch {
		text-align: center;
	}
</style>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
	<body>
	 <section class="content container-fluid">
      <a href="addEvent.php" class="btn btn-block btn-primary btn-lg">Add Event</a>
		<h2>   Active Services</h2>
		<div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="rentalService" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Type</th>
                      <th>Descriptions</th>
                      <th id="tietch">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Gown</td>
                      <td>Rental of Gowns</td>
                      <td id="tietch">
                      	<a href="#">
          					<span class="glyphicon glyphicon-ban-circle" id="active"></span>
        				</a>
        				<a href="#">
          					<span class="glyphicon glyphicon-edit"></span>
        				</a>
        			  </td>
                    </tr>
                    <tr>
                      <td>Accessories</td>
                      <td>Rental of Accessories</td>
                      <td id="tietch">
                      	<a href="#">
          					<span class="glyphicon glyphicon-ban-circle" id="active"></span>
        				</a>
        				<a href="#">
          					<span class="glyphicon glyphicon-edit"></span>
        				</a>
        			  </td>
                    </tr>
                    <tr>
                      <td>Make-Up</td>
                      <td>Make-Up Services</td>
                      <td id="tietch">
                      	<a href="#">
          					<span class="glyphicon glyphicon-ban-circle" id="active"></span>
        				</a>
        				<a href="#">
          					<span class="glyphicon glyphicon-edit"></span>
        				</a>
        			  </td>
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
          <h2>   Deactivated Services</h2>
		<div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="rentalService" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Type</th>
                      <th>Descriptions</th>
                      <th id="tietch">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Gown</td>
                      <td>Rental of Gowns</td>
                      <td id="tietch">
                      	<a href="#">
          					<span class="glyphicon glyphicon-ok-sign" id="active"></span>
        				</a>
        			  </td>
                    </tr>
                    <tr>
                      <td>Accessories</td>
                      <td>Rental of Accessories</td>
                      <td id="tietch">
                      	<a href="#">
          					<span class="glyphicon glyphicon-ok-sign" id="active"></span>
        				</a>
        			  </td>
                    </tr>
                    <tr>
                      <td>Make-Up</td>
                      <td>Make-Up Services</td>
                      <td id="tietch">
                      	<a href="#">
          					<span class="glyphicon glyphicon-ok-sign" id="active"></span>
        				</a>
        			  </td>
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
         </section>
	</body>
</html>