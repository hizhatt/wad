<!DOCTYPE html>
<html>
    <title>Anime</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
       
        <link rel="stylesheet" href="css/top_nav.css">
        <link rel="stylesheet" href="css/home_page.css">
        <!--<link rel="stylesheet" href="login_form.css">-->
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	
	
<body>
	<header>
		<?php include"header.php" ?>
	</header>
	
    <div class="content">
		
	
            
            
            <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  				<input type="text" placeholder="Search Anime" name="search2">
  				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
           	
            <a href="Cart.html"><i class="fa fa-shopping-basket" style="font-size:26px; float:right; width: auto; margin-right: 10%"></i></a>
            
  	        
  	      
        </div>
		<br>
		
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right; margin-right: 10%; background-color: #b366ff">Login</button>
  	     <button onclick="document.getElementById('id02').style.display='block'" style="width:auto; float:right; margin-right: 1%; background-color: #9999ff">Sign Up</button>
  	     
  	     <br>
		<!-- The Modal (contains the Login form) -->
		<div id="id01" class="modal">
  		
  			<form class="modal-content animate" action="/action_page.php" method="post">
   			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    			<div class="imgcontainer">
      			
      				<img src="Images/Avatar.png" alt="Avatar" class="avatar">
    			</div>

    			<div class="container">
     				
      				<label for="uname"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>

      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
        
      				<button type="submit">Login</button>
      				<label >
        				<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
      				<span class="psw">Forgot <a href="#">password?</a></span>
    			</div>

    			<br>
  			</form>
		</div>
		
		<!-- The Modal (contains the Sign Up form) -->
		<div id="id02" class="modal">
  			
  			<form class="modal-content animate" action="/action_page.php">
  			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    		<div class="container">
     			
      			<h1>Sign Up</h1>
      			<p>Please fill in this form to create an account.</p>
      			<hr>
      			<label for="email"><b>Email</b></label>
      			<input type="text" placeholder="Enter Email" name="email" required>
      			
      			<label for="uname"><b>Username</b></label>
      			<input type="text" placeholder="Enter Username" name="uname" required>

      			<label for="psw"><b>Password</b></label>
      			<input type="password" placeholder="Enter Password" name="psw" required>

      			<label for="psw-repeat"><b>Confirm Password</b></label>
      			<input type="password" placeholder="Confirm Password" name="psw-repeat" required>

      			<label>
        			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      			</label>

      			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      			<div class="clearfix">
      				<button type="button" class="cancelbtn">Cancel</button>
      				<button type="submit" class="signupbtn">Sign Up</button>
    			</div>
    			</div>
  				</form>
			</div>
		
			
	
		<br>
		<br>
		<br>
			<div class ="MiddleContent">
		<!-- Slideshow container -->
		<div class="slideshow-container">

  			<!-- Full-width images with number and caption text -->
  			<div class="mySlides fade">
    			<div class="numbertext">1 / 3</div>
    				<img src="Images/Attack_on_titan.jpg" alt="attack" style="width:100%">
    				<div class="text">Attack On Titan</div>
  			</div>

  			<div class="mySlides fade">
    			<div class="numbertext">2 / 3</div>
    			<img src="Images/kakegurui.jpg" alt="kakegurui" style="width:100%">
    			<div class="text">Kakegurui</div>
  			</div>

  			<div class="mySlides fade">
    			<div class="numbertext">3 / 3</div>
    			<img src="Images/Shokugeki.png" alt="shokugeki" style="width:100%">
    			<div class="text">Shokugeki no Soma</div>
  			</div>

  			<!-- Next and previous buttons -->
  			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center">
  			<span class="dot" onclick="currentSlide(1)"></span>
  			<span class="dot" onclick="currentSlide(2)"></span>
  			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
		
		
	
		<br>
	
        <div class="row">
            <div class="column">
              <a href="Anime1.html">
                  <img src="Images/Anime1.jpg" alt="anime1" style="width: 370px; height:500px ">
              </a>
              <p class="title">Fullmetal Alchemist: Brotherhood</p>
              <p>Ranked: #1</p>
            </div>
            <div class="column">
                <a href="Anime2.html">
                    <img src="Images/Anime2.jpg" alt="anime2" style="width: 370px; height:500px">
                </a>
                <p class="title">Hunter x Hunter</p>
                <p>Ranked: #2</p>
            </div>
            <div class="column">
                <a href="Anime3.html">
                    <img src="Images/Anime3.jpg" alt="anime3" style="width: 370px; height:500px">
                </a>
                <p class="title">Steins;Gate</p>
                <p>Ranked: #3</p>
            </div>
            <div class="column">
                <a href="Anime4.html">
                    <img src="Images/Anime4.jpg" alt="anime4" style="width: 370px; height:500px">
                </a>
                <p class="title">Gintama°</p>
                <p>Ranked: #4</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <a href="Anime5.html">
                    <img src="Images/Anime5.jpg" alt="anime5" style="width: 370px; height:500px">
                </a>
                <p class="title">Death Note</p>
                <p>Ranked: #5</p>
            </div>
			
            <div class="column">
                <a href="Anime6.html">
                    <img src="Images/Anime6.jpg" alt="anime6" style="width: 370px; height:500px">
                </a>
                <p class="title">Fruit Basket</p>
                <p>Ranked: #6</p>
            </div>
			
            <div class="column">
                <a href="Anime7.html">
                    <img src="Images/Anime7.jpg" alt="anime7" style="width: 370px; height:500px">
                </a>
                <p class="title">Re:Zero</p>
                <p>Ranked: #7</p>
            </div>
			
            <div class="column">
                <a href="Anime8.html">
                    <img src="Images/Anime8.jpg" alt="anime8" style="width: 370px; height:500px">
                </a>
                <p class="title">Fairy Tail</p>
                <p>Ranked: #8</p>
            </div>
        </div>
        </div>
	</div>
	<script>
		//for banner
		var slideIndex = 0;
		showSlides();

		function showSlides() {
  			var i;
  			var slides = document.getElementsByClassName("mySlides");
  			var dots = document.getElementsByClassName("dot");
  			for (i = 0; i < slides.length; i++) {
    			slides[i].style.display = "none";  
  			}
  			slideIndex++;
  			if (slideIndex > slides.length) {slideIndex = 1}    
  			for (i = 0; i < dots.length; i++) {
    			dots[i].className = dots[i].className.replace(" active", "");
  			}
  			slides[slideIndex-1].style.display = "block";  
  			dots[slideIndex-1].className += " active";
  			setTimeout(showSlides, 5000); // Change image every 2 seconds
			}
		
			// for login
			// Get the modal
			var modal01 = document.getElementById('id01');
			var modal02 = document.getElementById('id02');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				
    			if (event.target == modal01) {
        			modal01.style.display = "none";
    			}
				else if (event.target == modal02) {
        			modal02.style.display = "none";
    			}
			};
			
		



	</script>
    	
</body>
</html>