 <html>
 <head>
 <style type="text/css">
    * {margin: 0; padding: 0;}

    body {
    background: #f5f5f5;
    font-family: arial;
    }

    section {
    background: #fff;
    box-shadow: 0px 2px 2px #ebebeb;
    }

    header {
    width: 960px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    }

    nav li{
    display: inline-block;
    padding: 40px 30px 40px 0;


        }

    nav li:nth-child(3) {
    padding-right: 80px;
    }

    nav li:nth-child(4) {
    padding-left: 80px;
    }
    
    a:link{
    color:black;
    font-family: Impact, Charcoal, sans-serif;
    font-size: 24;
    text-decoration: none;
    
  
    }
    a:visited{
    color:black;
    }
    a:hover{
      color:red;
    }

    .logo {
    background: url(images/logo/logo_thumb.png);
    content: url(home.php);
    background-size: 110px 120px;
    width: 110px;
    height: 120px;
    position: absolute;
    top: 5px;
    left: 400px; 
    }
    </style>
</head>
<body>    
<?php include('dbconnect.php'); ?>
    <section>
		<header>
 		 <nav>
  		   <ul>
 		     <li><a href="clientInfo.php">Clients</a></li>
  		     <li><a href="artistInfo.php">Artists</a></li>
 		     <li><a href="shopInfo.php">Shops</a></li>
 		     <li><a href="genres.php">Genres</a></li>
 		     <li><a href="advice.php">Advice</a></li>
 		     <li><a href="aftercare.php">Aftercare</a></li>
 		  </ul>
         </nav>
  <a href="home.php"><div class="logo"></div></a>
</header>
</section>

</body>
</html>