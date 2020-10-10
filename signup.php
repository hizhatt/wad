<!-- The Modal (contains the Sign Up form) -->
<?php include('server.php') ?>
		<div id="id02" class="modal">
  			
  			<form method="post" class="modal-content animate" action="signup.php">
			<?php include('errors.php'); ?>
  			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    		<div class="container">
     			
      			<h1>Sign Up</h1>
      			<p>Please fill in this form to create an account.</p>
      			<hr>
      			<label for="email"><b>Email</b></label>
      			<input type="text" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required>
      			
      			<label for="username"><b>Username</b></label>
      			<input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>" required>

      			<label for="password"><b>Password</b></label>
      			<input type="password" placeholder="Enter Password" name="password_1" required>

      			<label for="password_2"><b>Confirm Password</b></label>
      			<input type="password" placeholder="Confirm Password" name="password_2" required>

      			<label>
        			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      			</label>

      			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      			<div class="clearfix">
      				<button type="button" class="cancelbtn">Cancel</button>
      				<button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
    			</div>
    			</div>
  				</form>
			</div>