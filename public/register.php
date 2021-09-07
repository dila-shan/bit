<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>

<h1 align="center">INTERVIEW APP</h1>
<style>
#fname{
	padding-right: 55px;
	}
#lname{
	padding-right: 55px;
	}
#dob{
	padding-right: 33px;
	}
#email{
	padding-right: 29px;
	}
#contact{
	padding-right: 20px;
	}
#password1{
	padding-right: 30px;
	}
#password2{
	padding-right: 20px;
	}

</style>
</head>

<body>

<?php
if(isset($_GET['msg'])){
echo $_GET['msg'];
}
?>

<h2>REGISTRATION FORM</h2>

<div>

<h3>Personal Details</h3>

<form method="post" action="../function/function.register.php?user=true">

<div>
<input type="radio" name="title" id="title" value="Mr">
<label for="title"> Mr </label>

<input type="radio" name="title" id="title" value="Mrs">
<label for="title"> Mrs </label>

<input type="radio" name="title" id="title" value="Miss">
<label for="title"> Miss </label>

<input type="radio" name="title" id="title" value="Ms">
<label for="title"> Ms </label>
</div>
<br>

<div>
<label for="fname" id="fname">First name</label>
<input required="required" type="text" name="fname" id="fname">
<br><br>
<label for="lname" id="lname">Last name</label>
<input required="required" type="text" name="lname" id="lname">
<br><br>
<label for="dob" id="dob">Date Of Birth</label>
<input required="required" type="date" name="dob" id="dob">
<br><br>
<label for="email" id="email">Email Address</label>
<input required="required" type="text" name="email" id="email">
<br><br>
<label for="contact" id="contact">Contact Number</label>
<input required="required" type="text" name="contact" id="contact">
</div>

<h3>Password</h3>

<div>
<label for="password1" id="password1">Create Password</label>
<input required="required" type="password" name="password1" id="password1">
<br><br>
<label for="password2" id="password2">Re-Type Password</label>
<input required="required" type="password" name="password2" id="password2">
</div>
<br><br>

<input type="submit" value="REGISTER">

</form>
</div>

</body>
</html>
