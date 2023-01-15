
<?php

?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="css/template.css" rel="stylesheet" type="text/css">
<style type="text/css">
.auto-style1 {
	margin-left: 0px;
}
</style>
</head>

<body>
<div id="wrapper" style="width: 1512px">

	<div id="logo">
		<div id="image">
			<img src="images/Wil Logo.png" alt="" height="105" width="132" > <img src="images/sace.png" alt=""/> </div>	
			
			</div>
	
				
	<nav>
		<a href="index.php">Home |</a>
		<a href="parties.html">Parties |</a>
		<a href="login.php">Login And Cast Your Vote |</a>
		<a href="station.html">Station |</a>
		<a href="contact-us.html">Contact Us |</a>
		<a href="about-us.html">About Us |</a>
		<a href="register.php">Rgister To Vote</a>			
	</nav>
		<div id="content">
		<br>
			<!-- slideshow -->
	<div id="slideshow" class="newStyle2" >
		<div align="center">
			<img class="mySlides" height="201" align="middle" src="images/Decomcracy.jpg" width="1064"></div>
		<div align="center">
			<img class="mySlides" height="201" align="middle" src="images/Vote.jpg" width="1068"></div>
		<div align="center">
			<img class="mySlides" height="201" align="middle" src="images/VotingQueue.jpg" width="1069"></div>
		<div align="center">
			<img class="mySlides" height="201" align="middle" src="images/VotingStation.png" width="1070"></div>
		<div align="center">
			<img class="mySlides" height="201" align="middle" src="images/Voters.jpg" width="1066"></div>
		
	<script>
		
		var slideIndex = 0;
		carousel();

		function carousel() {
	    var i;
	    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
			      x[i].style.display = "none"; 
			    }
		    slideIndex++;
		    if (slideIndex > x.length) {slideIndex = 1} 
		    x[slideIndex-1].style.display = "block"; 
		    setTimeout(carousel, 5000); // Change image every 5 seconds
		}

	</script>
</div>						
	<!-- The main content goes here -->	
  	
	<h1 style="width: 795px">Welcome to the South Africa Electoral Consignment</h1>
		<p>We are the eVoting system for south africa election we are going to be the new way that 
		south african can voice out.</p>
	
	<div id="vote"><p>
		If you want to be a voter you have to register is then when you can cast your vote in the
					system.All the voting station will be shown on the site</p>
		
				<h2>The Technical Way To Vote</h2> 
		<p>Register and vote for you party .</p>
		
		 <div id="party1">
			<p><img src="images/vote1.jpg" alt="" height="60" width="60">Voting will also take place at the voting Stations that will be around the country.</p>
			<p>The location for the stations will be show on the map under the station page, Please check it to seen the station near you.</p>
		</div>
<br>
		 			<div id="bottom">
		 			<div >
		 				<h4>Like and Follow Us</h4>
		 				<p>Facebook<img src="icons/1476208982_facebook.png" alt="" width="25" height="25"></p>
		 				<p>Twitter<img src="icons/1476208871_twitter.png" width="25" height="25" alt=""></p>
		 			</div>
		 			<div id="links">
		 			<h4>Links To Check</h4>
		 				<a href="http://www.departmentofhomeaffiar.gov">Home Affairs</a>
		 			</div>
		 			 <div id="footer">
				      <p>&copy;2016 The South Africa Electoral Consignment - Developed by Tech 6 </p>
	               </div>
		 			</div>
		
	
		</div> 		
	
	</div>
</body>

</html>
