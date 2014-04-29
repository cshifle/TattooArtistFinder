<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'TAF');
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	

	$query = "SELECT password FROM artists WHERE email='$email'";
	$passwordMatch = mysqli_query($db, $query);
	$row = mysqli_fetch_array($passwordMatch);
	if($row[0] == $password){
		$query = "SELECT active FROM artists WHERE email = '$email'";
		$active = mysqli_query($db, $query);
		$active = mysqli_fetch_array($active);
		$active = $active[0];
		if ( $active == 0 ){
		header('Location: validate.php');
		}
		else{
		$_SESSION['user']= $email;
		unset($_SESSION['error']);		
		header('Location: artistHome.php'); //redirect to user home page and update session

		}
	}
	else{
		$_SESSION['error']= 'Invalid Password';	
	   header("Location: login.php");

	}

?>

	