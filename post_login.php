<?php
	session_start();
?>
<html>
<body>
<?php
	include ('header.php');
	include('dbconnect.php');
	$email = trim($_POST['email']);
	echo $email;
	$password = trim($_POST['password']);
	
?>
<font face = "century gothic">
<center>

<br/>

<?php
	$query = "SELECT password FROM artists WHERE email='$email'";
	$passwordMatch = mysqli_query($db, $query);
	$row = mysqli_fetch_array($passwordMatch);

	if($row[0] == $password){
		$query = "SELECT active FROM artists WHERE email = '$email'";
		$active = mysqli_query($db, $query);
		$active = mysqli_fetch_array($active);
		$active = $active[0];
		if ( $active == 0 )
		{
		echo "Not active, please validate your account";
				header("Location: validate.php");
		}
		else
		{
		$_SESSION['user']= $email;
		unset($_SESSION['error']);
		echo "<font size = 6> Thank you for logging in!</font>";
		header("Location: artistHome.php"); //redirect to user home page and update session
		}
	}
	else{
		$_SESSION['error']= 'Invalid Password';
		header("Location: login.php");
	}

?>
</body>
</html>
	