<?php

class Login{

	public static function get_login($username,$password){
		
		include('../libraries/db_connection.php');
		
		$sql = "SELECT * FROM login WHERE email = '$username' AND password = '$password'";
		
		$result = mysqli_query($conn,$sql);
		return $result;		
	}
	
}
?>