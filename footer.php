<div class="topnav">

	<a href="index.php">MyAnimeBuy&#174; &nbsp &nbsp All rights reserved</a>
	
	<?php  if (isset($_SESSION['username'])) : ?>
	<div class="dropdown">
		<button class="dropbtn">Admin
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="AccountDetails.php">Admin Details</a>
		</div>	
	</div>
	<?php endif ?>
	
	<?php  if (!isset($_SESSION['username'])) : ?>
		<button onclick="location.href='admin.php'" style="width:auto; float:right; margin-right: 1%; background-color: #b366ff">Admin</button>
	<?php endif ?>

	<?php  if (isset($_SESSION['username'])) : ?>
		<a><i class="fa fa-id-badge" style="font-size:24px; float:right; width: auto;">Welcome Admin <strong><?php echo $_SESSION['username']; ?></strong></i></a>
		<button onclick="location.href='index.php?logout=1'" style=" font-size:22px; width:auto; float:right; margin-right: 1%; background-color: #990000">Logout</button>
	<?php endif ?>

</div>