<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

<h1 align="center">INTERVIEW APP</h1>

</head>

<body>
<?php
if(isset($_GET['msg'])){
echo $_GET['msg'];
}
?>
<div align="center">
<form method="post" action="../function/function.login.php?login=true">
<label for="email">User Name<br>(Email Address)</label><br>
<input type="email" name="email" id="email">
<br><br>
<label for="password">Password</label><br>
<input type="password" name="password" id="password">
<br><br>
<input type="submit" value="LOGIN">
</form>
</div>
</body>
</html>
