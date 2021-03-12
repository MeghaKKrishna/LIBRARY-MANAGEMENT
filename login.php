<html>
<head>
<titile>
Login
</title>
</head>
<body>
<?php
$error=$error_login=$error_username=$error_pasword="";
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
if(empty($username))
{
$error_username="Username field is mandatory";
}
if(empty($password))
{
$error_password="Password field is mandatory";
}
}
?>
<center>
<table>
<tr><center><h2><?php echo $error_login; ?></h2></center></tr>
<form action="" method="POST">
<tr>
<td><label>Username</label></td>
<td><input type="text" name="username"><span><?php echo $error_username; ?></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password"><span><?php echo $error_password; ?></td>
</tr>
<tr>
<td><label></label></td>
<td><input type="submit" name="login" value="Login"></td>
</tr>
</form>
</table>
</center>
</body>
</html>