<html>
<head>
<style>

.container{
margin-top: 20px;
margin-bottom: auto;
width: 1200px;
margin-left: auto;
margin-right: auto;
}
.leftText{
  float: left;
  margin-left: 100px;

  width: 300px;
  text-align:center;
  padding: 30px;
}
.rightText{
  padding: 30px;
  margin-left: 30px;
  padding-left: 40px;
  background: red;
  text-align: right;
  }
  
.rightText2{
  float: right;
  width: 250px;
  margin-right: 15px;
  padding: 40px;
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
  	  <select>
  	 	<option value="Japanese">Japanese</option>
  	 	<option value="American Traditional">Traditional</option>
	  </select>
  		
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