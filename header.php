<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: index.php");
}
?>
<div class="topnav">
	<a href="index.php">Home</a>
	<a href="Recent.php">Recent</a>
	<a href="Popular.php">Popular</a>
	<a href="Genre.php">Genre</a>
	<a href="About.php">About Us</a>
	<?php  if (isset($_SESSION['username'])) : ?>
	<div class="dropdown">
		<button class="dropbtn">Account
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="AccountDetails.php">Account Details</a>
			<a href="Order.php">Order</a>
		</div>	
	</div>
	<?php endif ?>
	<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  			<input type="text" placeholder="Search Anime" name="search2">
  			<button type="submit"><i class="fa fa-search"></i></button>
	</form>
           	
     <a href="Cart.php"><i class="fa fa-shopping-basket" style="font-size:26px; float:right; width: auto; margin-right: 10%">Cart</i></a>

	
	<?php  if (!isset($_SESSION['username'])) : ?>
		<button onclick="location.href='signup.php'" style="width:auto; float:right; margin-right: 2%; background-color: #9999ff">Sign Up</button>
		<button onclick="location.href='signin.php'" style="width:auto; float:right; margin-right: 1%; background-color: #b366ff">Login</button>
	<?php endif ?>

	<?php  if (isset($_SESSION['username'])) : ?>
		<a><i class="fa fa-id-badge" style="font-size:24px; float:right; width: auto;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></i></a>
    	<a href="index.php?logout='1'" style="color: white;">Logout</a> 
	<?php endif ?>

</div>