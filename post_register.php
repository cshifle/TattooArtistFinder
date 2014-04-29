<?php
	include("header.php"); 
	$name = $_POST['firstName'];
	$_SESSION['name'] = $name;
?>

<html>
<body>

<br/>
<br/>


<?php
	$db = mysqli_connect('localhost', 'root', 'root', 'TAF');
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['passwordConfirm'];
	$active = '0';
	$premium = '0';
	if (validateEmail($email) == 1) {
		header('register.php');
		echo "Please register with a valid email address";
	}
	else{
		if(($password == $password2)){
			$_SESSION['registerUser'] = 'artist';
			//prepare email for validation
			$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.  
						 // Example output: f4552671f8909587cf485ea990207f3b 
	     	$to = $email; // Send email to our user  
 	     	$subject = "TattooArtistFinder.com | Account Verification"; // Give the email a subject  
 	     	$message = " 
Dear ". $name .",     
Thanks for signing up! 
Your account has been created, you may log in after a few more steps!  Just click the link below and you will be redirected to another page.  Enter the code attatched to this email and your information will be validated! 
     
------------------------ 
Email: ".  $email ." 
Registration Code: ". $hash ."
------------------------ 
     
Please click this link to activate your account: 
     
http://localhost:8888/TattooArtistFinder/validate.php "; // Our message above including the link 
			$headers = "From:noreply@TattooArtistFinder.com"; // Set from headers  
 	        mail($to, $subject, $message, $headers); // Send our email   
 	     
			$insert = "INSERT INTO artists (first_name, last_name, email, password, hash, active, premium) VALUES ( '$name', '$lastName', '$email', '$password', '$hash', '$active', '$premium')";
			$result = mysqli_query($db, $insert); 
			mysqli_close($db);
		
			header('Location: verify.php');	
		
		}
		else{
			header('Location: register.php');
			echo "Passwords do not match";
		}
	
	}

	function validateEmail($e) {
	//returns 1 if false, 0 if true
 	 return filter_var($e, FILTER_VALIDATE_EMAIL);
	}
?>

</body>
</html>