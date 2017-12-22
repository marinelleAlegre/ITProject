<!-- /. NAV SIDE  -->

<?php
    require_once 'connection.php'; 
    
    $query = $pdo->prepare("SELECT * FROM user WHERE username='".$_SESSION['username']."';");
    $query->execute();
    $print = $query->fetch();
?>

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

        <li>
            <a href="index.php"><i class="fa fa-wrench fa-fw"></i> Dashboard<span class="fa arrow"></span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-wrench fa-fw"></i> Requests<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="pending.php"><i class="fa fa-book fa-3x"></i> Pending</a>
                </li>
                <li>
                    <a href="onGoing.php"><i class="fa fa-book fa-3x"></i> On-Going </a>
                </li>
                <li>
                    <a  href="finished.php"><i class="fa fa-medkit fa-3x"></i> Finished</a>
                </li>
                <li>
                    <a href="denied_cancel.php"><i class="fa fa-book fa-3x"></i> Denied/Cancelled </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#"><i class="fa fa-wrench fa-fw"></i> Feedback<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="unchecked-feedback.php"><i class="fa fa-book fa-3x"></i> Unchecked</a>
                    
                </li>
                <li>
                    <a href="checked-feedback.php"><i class="fa fa-book fa-3x"></i> Checked</a>
                </li>
                <li>
                    <a  href="old-feedback.php"><i class="fa fa-medkit fa-3x"></i> Old Feedback</a>
                </li>
            </ul>
        </li>
            <a href="#"><i class="fa fa-wrench fa-fw"></i> Profile<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="edit-profile.php"><i class="fa fa-book fa-3x"></i> Edit Profile</a>
                </li>
                <li>
                    <a  href="view-profile.php"><i class="fa fa-medkit fa-3x"></i> View Profile</a>
                </li>
            </ul>
        <li>
            
        </li>			
        </ul>
    </div>
</nav> 