<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Order</title>
        <link rel="stylesheet" href="css/top_nav.css">
        <link rel="stylesheet" href="css/home_page.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	
	<header>
		<?php include"header.php" ?>
	</header>
	
	<div class="MiddleContent">
		<form action="/orderDetails.php">
		
		<div class="w3-container">
			
			<h1>Orders</h1>
			
			<hr>
				
		</div>
		
		<table class="w3-table-all w3-hoverable">
    		<thead>
      			<tr class="w3-indigo">
        			<th>Orders</th>
        			<th>Date</th>
        			<th>Status</th>
      			</tr>
    		</thead>
    		<tr class="w3-hover-pink">
      			<td>Order ID</td>
      			<td>dd-mm-yy</td>
      			<td>Status</td>
    		</tr>
    
  		</table>
		
	</form>
	
	</div>
	
	
</body>
</html>
