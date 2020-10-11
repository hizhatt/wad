<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<p>Admin login</p>
  </div>
	 
  <form method="post" action="signin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
	  	<button class="btn-cancel" onclick="location.href='javascript:history.back()'" type="button">
         Cancel</button>
		<button type="submit" class="btn" name="login_user">Login</button>
		<a href="admin.php">To Admin Page</a>  
  	</div>
  </form>
</body>
</html>