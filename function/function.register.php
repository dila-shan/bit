<?php
if(isset($_REQUEST['user']))
{	
	include('../class/class.register.php');

	$title = $_REQUEST['title'];
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $password1 = $_REQUEST['password1'];
    
    $insert_user = User::insert_user($title,$fname,$lname,$dob,$email,$contact,$password1);
	
	if($insert_user==1){
		
		$msg=("New Data Inserted Succesfully");
		header("Location:../public/dashboard.php?msg=$msg");

		
	} else {
		$msg=("New Data Not Inserted Succesfully");
		header("Location:../public/register.php?msg=$msg");
		}
}

?>