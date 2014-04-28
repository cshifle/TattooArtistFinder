 <?php
	session_start();
	$user = $_SESSION['user'];
?>
 <html>
 <head>
 <style type="text/css">
    * {margin: 0; padding: 0;}

    body {
    background: #f5f5f5;
    font-family: arial;
    }
    .contain{
    width: 1200px;
    }

    section {
    background: #fff;
    box-shadow: 0px 2px 2px #ebebeb;
    }

    header {
    width: 1200px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    }

    nav li{
    display: inline-block;
    padding: 40px 30px 40px 0;
    }

    
    a:link{
    color:black;
    font-family: Impact, Charcoal, sans-serif;
    font-size: 20;
    text-decoration: none;
    }
    
    a:visited{
    color:black;
    }
    
    a:hover{
      color:red;
    }

    .logo {
    background: url(images/logo/logo_small.png);
    content: url(home.php);
    background-size: 300px 136px;
    width: 300px;
    height: 136px;
    float: left;

    }
    </style>
</head>
<body>    
<?php include('dbconnect.php'); ?>
    <section>
		<header>
		<a href="home.php"><div class="logo"></div></a>
 		 <nav>
  		   <ul>
 		     <li><a href="clientInfo.php">Clients</a></li>
  		     <li><a href="artistInfo.php">Artists</a></li>
 		     <li><a href="genres.php">Genres</a></li>
 		     <li><a href="advice.php">Advice</a></li>
 		     <li><a href="aftercare.php">Aftercare</a></li>
<?php
			if ( isset($_SESSION['user']) ){?>	
			 <li><a href="logout.php">Logout></a></li>
<?php			}else{     ?>
 		     <li><a href="login.php">Login</a></li>
 		     <li><a href="register.php">Register</a></li>
<?php			} ?> 		     
 		 	</ul>
         </nav>
  
	</header>
</section>

</body>
</html>

 