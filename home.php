<html>
<head>
<style>

.container{
margin-top: 30px;
margin-bottom: auto;
width: 1200px;
margin-left: auto;
margin-right: auto;
}


.searchBack{
  margin-left: auto;
  margin-right: auto;
  border: 1px solid;
  border-radius:20px;
  width:900px;
  height:410px;
  background-image:url('images/backgrounds/back_small.png');

}
.criteria{
  background-color:#680000;
  border: 2px solid;
  border-radius: 20px;
  width: 400px;
  height: 350px;
  margin-top: 35px;
  margin-left: 35px;
  margin-bottom: auto;
}
.genreSelect{
  margin-top: 10px;
  margin-left: 7%;
  width: 120px;
  margin-bottom:10px;
}
select{
 font-size: 14;
}

.button{
 border: 1px solid;
 width: 200px;
}
</style>
</head>
<body>

<?php include 'header.php'; ?>


<div class="container">
<center><a href="#"><img src="images/ads/wide-ad.png"></a></center>
</div>
<div class="container">
  <div class="searchBack">
  	<div class="criteria">
  		<center><h1><font color="#D8D8D8">Are you searching for your next tattoo?</font></h1></center>
  		<hr>
  	 <div class="genreSelect">
  	 <h5><font color="#D8D8D8">Genre Preference?</font></h5>
  	  <select>
  	  <?php $query = "SELECT id, genre FROM genres"; 
  	  		$result = mysqli_query($db, $query);
  
  	  		while($row = mysqli_fetch_array($result)){
  	  			$id=$row[0];
  	  			$genre = $row[1];
  	  			echo "<OPTION VALUE=\"".$id."\">".$genre."</option>";
  	  		}
  	  ?>
	  </select>
	  </br></br>
	  <h5><font color="#D8D8D8"> Miles: </FONT></h5>
	  	<select>
	  	<option value="10">10 miles</option>
	  	<option value="20">20 miles</option>
	  	<option value="30">30 miles</option>
	  	<option value="40">40 miles</option>
	  	<option value="50">50 miles</option>
	  	<option vlue="100">100 miles</option>
	  	</select>
	  	
	  </BR></br>
	  <input type="text" name="zip" value="Zip Code">
	  </br></br><br><br>
	  
	  <form name="input" action="artistSearch.php" method="get">
	  <input type="submit" Value="Search!">
	
  	  </div>
  	</div>
  </div>
</div>

<div class="container">
  <div class="leftText">
   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </div>
</div>


</body>
</html>