<?php session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
	<?php 
	include ('head.php');
	//include ('navbar.php');
	?>

	<body>
		<div class="alert-char container">	
			<div id="fail" class="alert alert-danger alert-dismissable" style="display:none;">
				<button class="close" data-dismiss="alert">&times;</button>
				<h5><strong>Username and Password does not match.</strong></h5>
			</div>
		</div>
		<div class="cont">
		  	<div class="demo">
				<div class="login">
					<br>
					<h2 class="boldcenter option animated bounceInDown">Goldust Creations</h2>
					<h4 class="boldcenter option animated bounceInDown">Event and Service Management System</h4>
		      		<div class="login-logo">
		      			<img src="../bootstrap/images/PSOL.png" class="img-responsive">
		      		</div>		      			
		     			<div class="login__form">
		      				<form method="post" enctype="multipart/form-data" class="form-horizontal">
		        				<div class="login__row field">
		          					<svg class="login__icon name svg-icon" viewBox="0 0 20 20">
		            					<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
		          					</svg>
		          					<input class="login-input" type="number" pattern="[0-9]{6,6}" min="0" step="1" max="699999" title="Please enter a 6-digit ID number" id="name" name="username" placeholder="ID Number" required>
		        				</div>
		        				<div class="login__row field login-row-custom">
		          					<svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
		            					<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
		          					</svg>		          				
		          					<input class="login-input" type="password" id="password" name="password" placeholder="**********" required>
									<span class="glyphicon glyphicon-eye-open hoverpass"></span>							
		        				</div>
		        				<div class="actions">
		        					<input type="submit" value="Log in"  name="submit" class="btn btn-danger loginbutton" disabled="disabled"/>
		        				</div>
		        				<br>
		        				
								<h6 class="login__signup"><a>User Guidelines</a></h6>
								<p style="display: none;" class="guidelines-content">If you have forgotten your password, please contact your administrator.</p>	        			
		        			</form>
		      			</div>
		    		</div>
		    </div>
		</div>
	</body>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/index.js"></script>
	<script type="text/javascript" src="../bootstrap/js/login.js"></script> 		
    <script type="text/javascript">
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
    </script>
    <script>
		$(document).ready(function(){
		    $("h6").click(function(){
		        $("p").toggle();
		    });
		});
	</script>
	<script>
		$(".alert-dismissable").click(function (e) {
		    $(this).fadeIn('slow');
		});

	</script>
<script>
	$("#password").on("keyup",function(){
    if($(this).val())
        $(".glyphicon-eye-open").show();
    else
        $(".glyphicon-eye-open").hide();
    });
$(".glyphicon-eye-open").mousedown(function(){
                $("#password").attr('type','text');
            }).mouseup(function(){
            	$("#password").attr('type','password');
            }).mouseout(function(){
            	$("#password").attr('type','password');
            });
</script>
	<?php
		//include('login.php');
	?>
</html>

