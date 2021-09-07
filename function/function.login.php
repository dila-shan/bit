<?php

if(isset($_REQUEST['login'])){

	include('../class/class.login.php');
	
	$username = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	
	$get_login = Login::get_login($username,$password);
	$row = mysqli_fetch_array($get_login);
	
	$username1 = $row['email'];
	$password1 = $row['password'];
	
	if($username=$username1){
		if($password=$password1){
			$get_login=Login::get_login($username,$password);
			if($get_login==1){
				
				
				header("Location:../public/dashboard.php");
				}
				}
				}
				else{
				$msg=("Invalid Username or Password");
				header("Location:../public/login.php?msg=$msg");
			 	}
			
	
}
?>