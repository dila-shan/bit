<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Interview</title>

<style>
#img {
	display:block;
	margin-left:auto;
	margin-right:auto;
	}
</style>

<h1 align="center">INTERVIEW APP</h1>

</head>

<body>

<?php
if(isset($_GET['msg'])){
echo $_GET['msg'];
}
?>

<div>
<img src="../images/user.png" height="100px" width="100px" id="img">
</div>
<br>
<div align="center" id="reg">
<form action="register.php" method="post">
<input type="submit" value="REGISTER" />
</form>
</div>
<br>
<div align="center" id="log">
<form action="login.php" method="post">
<input type="submit" value="LOG IN" />
</form>
</div>

</body>

</html>