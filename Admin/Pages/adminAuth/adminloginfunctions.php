<?php 
session_start(); 
include "conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname ='@'. validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: adminlogin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: adminlogin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admins WHERE user_name='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../membershipRequests.php");
		        exit();
            }else{
				header("Location: adminlogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: adminlogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: adminlogin.php");
	exit();
}