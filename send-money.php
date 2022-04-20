<head>
	<title> Send Money </title>
	<link rel="stylesheet" type="text/css" href="send-money.css" />
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
		
		<!-- start:content box !-->
		<div id="form">
		<div id="form-heading"> Fill the required details</div>
		
		<form method="post">
			From Name : <input type="text" name="Name"><br><br>
			To Name : <input type="text" name="Name"><br><br>
			Account No : <input type="number" name="Mobile-Number"><br><br>
			Amount : <input type="number" name="Total-Members"><br><br>
		</form>
			<a href="sent.php">
				<input type="submit" value="SEND">
			</a>
		</div>
		<!-- close: content box !-->
		
		<div>
		<!-- start: footer!-->
            <?php include 'footer.php';?> 
        </div>
		<!-- end: footer!-->
	
	
	
	</div>
</body>