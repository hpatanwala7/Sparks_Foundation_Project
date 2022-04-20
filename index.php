<!DOCTYPE html>
<html>

<head>
	<title> Robber's Bank </title>
	<link rel="stylesheet" type="text/css" href="index.css" />
	<link rel="icon" href="Robber's Bank.png"/>
</head>

<body>
		<div id="wrapper">
			
			<!-- start: Header !-->
			<div>
				<?php include 'header.php';?>
			</div>
			<!-- close: Header !-->
		
			<!-- start: Menu !-->
			<div>
				<?php include 'menu.php';?>
			</div>
			<!-- stop: Menu !-->
			
			<!-- start:content !-->
			<div id="content">
				
				<!-- start:slides !-->
				<div id="slides">
					<img class="mySlides" src="Robber's Bank.png" >
					<img class="mySlides" src="img2.jpg" >
					<img class="mySlides" src="img3.jpg" >
				</div>
				<!-- stop:slides !-->
				<br>
				<hr>
				<div id="welcome">
				 WELCOME TO ROBBER'S BANK </h1>
				</div>
				<div id="para">
					<p> A BANK FOR ROBBERS. For all the Robber's out there, We are a platform where you can deposit all your ROBBERIES without worries. Whether it is Cash, Gold, Diamond, Ruby etc; all are safe with us. </p>
					<a href="about-us.php">
					<button id="read-button"> Read More </button>
					</a>
				</div>
				<hr>
				<br>
				<div id="welcome">
				 OUR SERVICES </h1>
				</div>
		
				<div id="logos">
					<img id="wifi" src="Wifi.png">
					<img id="parking" src="Parking.png">
					<img id="atm" src="atm.jpg">
					<img id="spa" src="car-loan.png">
				</div>
			
				<div id="logo-heading">
					<div id="wifi-heading">HOME LOAN</div>
					<div id="parking-heading">CREDIT CARD</div>
					<div id="atm-heading">24x7 OPEN</div>
					<div id="spa-heading">CAR LOAN</div>
				</div>
			
				<div id="wifi-div">
				Robbers who grab properties from land owners can deposit it in our bank for interest. We give this properties on Loan to new robbers who have started their journey as robbers.
				</div>
				
				
				<div id="parking-div">
				Robbers who steal credit cards can also deposit it in our banks. We give high interest on it and also protect their identity from the outside world. We are safe and secured. 
				</div>
				
				<div id="atm-div">
				24x7 open secured with CCTV cameras and guards with guns. Here we ensure you a secure transaction system associated with World Bank.  
				</div>
				
				<div id="spa-div">
				Robbers steal cars from different places can deposit it to us to keep it undercover for few days till the investigation goes on for that particular vehicle. 
				</div>
			</div>	
				<hr>
				<br>
				<div id="welcome">
				 OUR BUSINESS PLAN	
				</div>
				<div id="business-plan">
				<p>When all the robbers steal money, gold, diamonds, etc they store it in lockers in our bank. What we do is we steal their assets and sell it in different countries and earn high profits. This is how we make money by 0% Investment we make 1000% Profit.</p>
				</div>
				
			
			
		
			<!-- start: footer !-->
			<div>
				<?php include 'footer.php';?>
			</div>
			<!-- close: footer !-->
		</div>
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		  }
		  myIndex++;
		  if (myIndex > x.length) {myIndex = 1}    
		  x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 3000);
		}
	</script>
</body>

</html>