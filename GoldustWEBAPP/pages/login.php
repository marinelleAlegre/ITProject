<?php session_start();
$error='';
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	} else {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$username = stripslashes($username);
		$password = stripslashes($password);
		include('dbconfig.php');
		$username = mysqli_real_escape_string($con, $username);
		$password = mysqli_real_escape_string($con, $password);		
		$query = mysqli_query($con, "SELECT password, id_number from lowwm.student where password=sha2('$password',512) AND id_number='$username'
									union
									select password, id_number from lowwm.network_leader where password=sha2('$password',512) AND id_number='$username'
									union
									select password, id_number from lowwm.staff where password=sha2('$password',512) AND id_number='$username'
									union
									select password, id_number from lowwm.coordinator where password=sha2('$password',512) AND id_number='$username'
									union
									select password, id_number from lowwm.administrator where password=sha2('$password',512) AND id_number='$username'
									union
									select password, id_number from lowwm.pastor where password=sha2('$password',512) AND id_number='$username'");
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			$_SESSION['login_user']=$username;

			if(substr($_SESSION['login_user'],0,1) === "2"){
				$_SESSION['allowed_idle_time'] = 60 * 15; // 15 MINUTES allowed IDLE time for STUDENT
			}elseif(substr($_SESSION['login_user'],0,1) === "1"){
				$_SESSION['allowed_idle_time'] = 60 * 30; // 30 MINUTES allowed IDLE time for NETWORK LEADER
			}elseif(substr($_SESSION['login_user'],0,1) === "5"){
				$_SESSION['allowed_idle_time'] = 60 * 45; // 45 MINUTES allowed IDLE time for DIRECTRESS
			}elseif(substr($_SESSION['login_user'],0,1) === "3"){
				$_SESSION['allowed_idle_time'] = 60 * 60; // 60 MINUTES allowed IDLE time for STAFF
			}elseif(substr($_SESSION['login_user'],0,1) === "4"){
				$_SESSION['allowed_idle_time'] = 60 * 75; // 75 MINUTES allowed IDLE time for COORDINATOR
			}elseif(substr($_SESSION['login_user'],0,1) === "6"){
				$_SESSION['allowed_idle_time'] = 60 * 90; // 90 MINUTES allowed IDLE time for ADMINISTRATOR
			}

			$ssl=mysqli_query($con, "SELECT school_level FROM lowwm.staff where id_number = '".$_SESSION['login_user']."'");
			$sslrow=mysqli_fetch_row($ssl);
			$_SESSION['s_level']=$sslrow[0];

			$csl=mysqli_query($con, "SELECT school_level FROM lowwm.coordinator where id_number = '".$_SESSION['login_user']."'");
			$cslrow=mysqli_fetch_row($csl);
			$_SESSION['c_level']=$cslrow[0];

			$_SESSION['last_acted_on'] = time();			

			if(substr($_SESSION['login_user'],0,1) === "2"){
				header("location: main/home/index.php");
				exit;

			}elseif(substr($_SESSION['login_user'],0,1) === "3" && $_SESSION['s_level'] == "post_e"){
				if (!$data = mysqli_query($con,"SELECT attrib FROM lowwm.attrib_post_e ORDER BY attrib ASC LIMIT 1;")){
					die("Error: " . mysqli_error($con));
				}				
				$datna=mysqli_fetch_row($data);
				header("location: main/home/index.php");
				exit;
			}elseif(substr($_SESSION['login_user'],0,1) === "3" && $_SESSION['s_level'] == "sol_1"){
				if (!$datb = mysqli_query($con,"SELECT attrib FROM lowwm.attrib_sol_1 ORDER BY attrib ASC LIMIT 1;")){
					die("Error: " . mysqli_error($con));
				}				
				$datnb=mysqli_fetch_row($datb);
				header("location: main/home/index.php");
				exit;
			}elseif(substr($_SESSION['login_user'],0,1) === "3" && $_SESSION['s_level'] == "sol_2"){
				if (!$datc = mysqli_query($con,"SELECT attrib FROM lowwm.attrib_sol_2 ORDER BY attrib ASC LIMIT 1;")){
					die("Error: " . mysqli_error($con));
				}				
				$datnc=mysqli_fetch_row($datc);
				header("location: main/home/index.php");
				exit;
			}elseif(substr($_SESSION['login_user'],0,1) === "3" && $_SESSION['s_level'] == "sol_3"){
				if (!$datd = mysqli_query($con,"SELECT attrib FROM lowwm.attrib_sol_3 ORDER BY attrib ASC LIMIT 1;")){
					die("Error: " . mysqli_error($con));
				}				
				$datnd=mysqli_fetch_row($datd);
				header("location: main/home/index.php");
				exit;

			}elseif(substr($_SESSION['login_user'],0,1) === "1"){				
				header("location: main/home/index.php");
				exit;

			}elseif(substr($_SESSION['login_user'],0,1) === "4" && $_SESSION['c_level'] == "post_e"){
				header("location: main/home/index.php");
				exit;
			}elseif(substr($_SESSION['login_user'],0,1) === "4" && $_SESSION['c_level'] == "sol_1"){
				header("location: main/home/index.php");
				exit;
			}elseif(substr($_SESSION['login_user'],0,1) === "4" && $_SESSION['c_level'] == "sol_2"){
				header("location: main/home/index.php");
				exit;
			}elseif(substr($_SESSION['login_user'],0,1) === "4" && $_SESSION['c_level'] == "sol_3"){
				header("location: main/home/index.php");
				exit;
			}elseif(substr($_SESSION['login_user'],0,1) === "5"){
				header("location: main/home/index.php");
				exit;
			}elseif(substr($_SESSION['login_user'],0,1) === "6"){
				header("location: main/home/index.php");
				exit;
			}else{
				header("Location: logout.php");
				exit;
			}
		}else{
			echo "<script type='text/javascript'>document.getElementById('fail').style.display = 'block';</script>";
		}
		mysqli_close($con);
	}
}
?>