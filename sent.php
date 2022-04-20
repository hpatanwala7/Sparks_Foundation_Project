<head>
	<title> Send Money </title>
	<link rel="stylesheet" type="text/css" href="sent.css" />
	<link rel="icon" href="Robber's Bank.png"/>
	<link rel="stylesheet" type="text/css" href="header.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" type="text/css" href="menu.css"/>
	<link rel="stylesheet" type="text/css" href="footer.css"/>
</head>

<body>

	<div id="wrapper">
		
		<!-- start: header!-->
		<div>	
			<?php include 'header.php';?>
		</div>
		<!-- close: header!-->
			
		<!-- start: menu!-->
		<div>
			<?php include 'menu.php';?>
		</div>
		<!-- end: menu!-->
		
		<!-- start: content!-->
		<div id="content">
			<div id="green-tick">
				<img src="green-tick.png"
				height="300px"
				width="400px";>
			</div>
			
			<div id="booking-completed">
			Amount Transfered. Account amount will be reflected within 24hrs. 
			
			<a href="index.php">
			<button id="button"> Go to Home Page</button>
			</a>
			<button id = "button" onclick="alertbox()">Transaction Summary</button>

			<script>
			function alertbox() {
			  alert("Transaction Successfull. Transaction ID = 6578654123025455.");
			}
	</script>
			</div>
		</div>
		<!-- end: content!-->
		
		<div>
		<!-- start: footer!-->
            <?php include 'footer.php';?> 
        </div>
		<!-- end: footer!-->
	
	
	
	</div>
</body>