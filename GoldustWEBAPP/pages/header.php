<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Goldust Creations</a>
    </div>
    <?php
        echo "The time is " . date("h:i:sa");
    ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i>Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-thumbs-o-up"></i>Events<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#"><i class= "fa fa-users"></i>On-going Events</a>
                            </li>
                            <li>
                                <a href="#"><i class= "fa fa-handshake-o"></i>Finished Events</a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-users">Canceled Events</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#um"><i class="fa fa-thumbs-o-up"></i> User Management<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="um" class="collapse">
                            <li>
                                <a href="customerUM.php"><i class= "fa fa-users"></i> Customer</a>
                            </li>
                            <li>
                                <a href="spUM.php"><i class= "fa fa-handshake-o"></i> Service Provider</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="transactionMonitoring.php"><i class="fa fa-fw fa-edit"></i> Transaction Monitoring</a>
                    </li>
                </ul>
            </div>
</nav>