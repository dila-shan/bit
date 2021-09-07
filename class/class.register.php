<?php

class User {

public static function insert_user($title,$fname,$lname,$dob,$email,$contact,$password1){
	
	include('../libraries/db_connection.php');
		
		$sql_login = "INSERT INTO login(login_id, email, password) VALUES ('', '$email', '$password1')";
		
		$result_login = mysqli_query($conn,$sql_login);
		
		
		if($result_login==1){
		
		$sql = "INSERT INTO user(user_id, title, fname, lname, dob, email, contact) VALUES('','$title','$fname','$lname','$dob','$email','$contact')";
	
		$result = mysqli_query($conn,$sql);
		return $result;
		}


}
}

?>