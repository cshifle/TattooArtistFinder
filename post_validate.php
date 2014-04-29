<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'TAF');
	$email = trim($_POST['email']);
	$code = trim($_POST['code']);
	

	$query = "SELECT hash from artists";
	$result = mysqli_query($db, $query);
	$found="false";
	while($row=mysqli_fetch_array($result)){
		$resultH=$row['hash'];
		if($hash == $row['hash']){
			$found="true";
		}
	}
	
	if($found=="true"){
		$query="UPDATE artists SET active=1 WHERE email= '".$email."'AND hash='".$code."'";
		$result = mysqli_query($db, $query);
		header('Location: login.php');
	}	
	else{
		header('Location: validate.php');
		echo "Incorrect validation code";
	}
	
	
?>






