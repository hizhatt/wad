<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Account Detail</title>
		<link rel="stylesheet" href="css/top_nav.css">
        <link rel="stylesheet" href="css/home_page.css">
        <link rel="stylesheet" href="css/AccountSetting.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
	
	<header>
		<?php include"headeradmin.php" ?>
	</header>
	
	<div class="content">
	
	
	<br>  
	<div class="MiddleContent">
	
	<form action="/AccountSetting.html">
  		<div class="container">
    	<h1>Admin Control: Add Anime</h1>
    	
    	
    	<hr>
			<label for="productID">Product ID</label><br>
  			<input type="text" id="productID" name="productID" value="Product ID"><br>
			
			<label for="title">Product Title</label><br>
  			<input type="text" id="title" name="title" value="Product Title"><br>
			
			<label for="synopsis">Synopsis</label><br>
  			<input type="text" id="synopsis" name="synopsis" value="Synopsis"><br>
			
			<label for="date">Date</label><br>
  			<input type="text" id="date" name="date" value="Date"><br>
			
			<label for="studios">Studios</label><br>
  			<input type="text" id="studios" name="studios" value="Studios"><br>
			
			<label for="genre">Genre</label><br>
  			<input type="text" id="genre" name="genre" value="Genre"><br>
			
			<label for="episodes">Episodes</label><br>
  			<input type="text" id="episodes" name="episodes" value="Episodes"><br>
			
			<label for="duration">Duration</label><br>
  			<input type="text" id="duration" name="duration" value="Duration"><br>
			
			<label for="firstDate">First Airing Date</label><br>
  			<input type="text" id="firstDate" name="firstDate" value="First airing date"><br>
			
			<label for="finalDate">Final Airing Date</label><br>
  			<input type="text" id="finalDate" name="finalDate" value="Final airing date"><br>
			
			<label for="status">Status</label><br>
  			<input type="text" id="status" name="status" value="Status"><br>
			
			<label for="seasons">Seasons</label><br>
  			<input type="text" id="seasons" name="seasons" value="Seasons"><br>
			
			<label for="rating">Rating</label><br>
  			<input type="text" id="rating" name="rating" value="Rating"><br>
			
			<label for="price">Price</label><br>
  			<input type="text" id="price" name="price" value="Price"><br>
			
			<label for="availability">Availability</label><br>
  			<input type="text" id="availability" name="availability" value="Availability"><br>
			
    	<hr>
  		
	</form>
	
	<button onclick="window.location.href='admin.php';">Save</button>
	
	</div>
	</div>
	</body>
</html>
