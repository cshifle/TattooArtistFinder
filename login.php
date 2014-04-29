<?php include 'header.php';
	  session_start(); ?>
	  
<html>
<head>
</head>
<body>

<font face = "century gothic">
<center>
<?php
	$error = $_SESSION['error'];
	if ( $error == 'Invalid Password' )
	{
		echo"<font color = red>Invalid Password!</font>";		
	}
?>
<form action = "post_login.php" method = "post">
	<font size = "6">Login</font></br>
	Email: <input type = "text" name = "email" /><br>
	
	Password:
	<input type = "password" name = "password" /><br>

	<input type = "submit" name = "Login" value = "Login" /><br>
	

</form>

<a href="retrievePassword.php" style = "text-decoration:none">forgot password?</a> | <a href = "validate.php" style = "text-decoration:none">validate</a></center>
</body>
</html>

