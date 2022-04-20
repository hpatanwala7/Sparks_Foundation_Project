<head>
	<title> Transaction History </title>
	<link rel="stylesheet" type="text/css" href="transaction.css" />
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
		
		<!-- start: transaction table !-->
		<table id="cust-table">
			<tr id="tr">
				<th id="th"> SR.NO. </th>
				<th id="th"> From </th>
				<th id="th"> To </th>
				<th id="th"> Amount </th>
				<th id="th"> Transaction ID </th> 
			</tr>
			
			<tr id="tr">
				<td id="td"> 01 </td>
				<td id="td"> Jimmy DeSanta </td>
				<td id="td"> Lamar Pandey</td>
				<td id="td"> $1000 </td>
				<td id="td"> 7896411339842</td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 02 </td>
				<td id="td-black"> Ron Wisley </td>
				<td id="td-black"> Dave Bachlet</td>
				<td id="td-black"> $1200 </td>
				<td id="td-black"> 70126874215874 </td>
			</tr>
			
			<tr id="tr">
				<td id="td"> 03 </td>
				<td id="td"> Martin Madraso </td>
				<td id="td"> Tracey DeSanta </td>
				<td id="td"> $4500 </td>
				<td id="td"> 784126522660 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 04 </td>
				<td id="td-black"> Franklin Clinton </td>
				<td id="td-black"> Trevor Philips </td>
				<td id="td-black"> $250 </td>
				<td id="td-black"> 985614726203 </td>
			</tr>
			
			<tr id="tr">
				<td id="td"> 05 </td>
				<td id="td"> Michael DeSanta </td>
				<td id="td"> Jimmy DeSanta </td>
				<td id="td"> $760 </td>
				<td id="td"> 6321785469210 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 06 </td>
				<td id="td-black"> Ron Wisley </td>
				<td id="td-black"> Dave Bachlet</td>
				<td id="td-black"> $367 </td>
				<td id="td-black"> 856284622002 </td>
			</tr>
			
			<tr id="tr">
				<td id="td"> 07 </td>
				<td id="td"> Trevor Philips </td>
				<td id="td"> Lester Mallinga </td>
				<td id="td"> $455 </td>
				<td id="td"> 74587651026510 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 08 </td>
				<td id="td-black"> Lester Mallinga</td>
				<td id="td-black"> Michael DeSanta </td>
				<td id="td-black"> $12500 </td>
				<td id="td-black"> 98746553233330 </td>
			</tr>
			
			<tr id="tr">
				<td id="td"> 09 </td>
				<td id="td"> Tracey DeSanta </td>
				<td id="td"> Martin Madraso </td>
				<td id="td"> $1200 </td>
				<td id="td"> 1002544466004 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 10 </td>
				<td id="td-black"> Michael DeSanta </td>
				<td id="td-black"> Trevor Philips </td>
				<td id="td-black"> $500 </td>
				<td id="td-black"> 789456123078948  </td>
			</tr>
		</table>
		<!-- close: transaction table !-->
		
		<div>
		<!-- start: footer!-->
            <?php include 'footer.php';?> 
        </div>
		<!-- end: footer!-->
	
	
	
	</div>
</body>