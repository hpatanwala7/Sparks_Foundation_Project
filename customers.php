<head>
	<title> Customers </title>
	<link rel="stylesheet" type="text/css" href="customers.css" />
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
		
		<!-- start: send money button and see all transactions button !-->
		<div id="send-money">
			<a href="send-money.php"><button id="SD-button"> Send Money </button></a>
			<a href="transaction.php"><button id="sat-button"> See All Transactions </button></a>
		</div>
		<!-- close: send money button and see all transactions button !-->
		
		<!-- start: Content box !-->
		<table id="cust-table">
			<tr id="tr">
				<th id="th"> SR.NO. </th>
				<th id="th"> Name </th>
				<th id="th"> Account Number </th>
				<th id="th"> Balance </th>
			</tr>
			
			<tr id="tr">
				<td id="td"> 01 </td>
				<td id="td"> Michael DeSanta </td>
				<td id="td"> 987456321003214 </td>
				<td id="td"> $9999500 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 02 </td>
				<td id="td-black"> Trevor Philips </td>
				<td id="td-black"> 789456123078948 </td>
				<td id="td-black"> $1900 </td>
			</tr>
			
			<tr id="tr">
				<td id="td"> 03 </td>
				<td id="td"> Franklin Clinton </td>
				<td id="td"> 963085207410684</td>
				<td id="td"> $15000 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 04 </td>
				<td id="td-black"> Tracey DeSanta </td>
				<td id="td-black"> 741085209630159 </td>
				<td id="td-black"> $7820 </td>
			</tr>
			
			<tr id="tr">
				<td id="td"> 05 </td>
				<td id="td"> Jimmy DeSanta </td>
				<td id="td"> 735741239510658</td>
				<td id="td"> $656951 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 06 </td>
				<td id="td-black"> Martin Madraso </td>
				<td id="td-black"> 978623014587004 </td>
				<td id="td-black"> $2587 </td>
			</tr>
			
			<tr id="tr">
				<td id="td"> 07 </td>
				<td id="td"> Lester Mallinga  </td>
				<td id="td"> 853201479856321</td>
				<td id="td"> $92801 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 08 </td>
				<td id="td-black"> Lamar Pandey </td>
				<td id="td-black"> 664478562203345 </td>
				<td id="td-black"> $94200 </td>
			</tr>
			
			<tr id="tr">
				<td id="td"> 09 </td>
				<td id="td"> Dave Bachlet </td>
				<td id="td"> 897453213360078</td>
				<td id="td"> $7563140 </td>
			</tr>
			
			<tr id="tr">
				<td id="td-black"> 10 </td>
				<td id="td-black"> Ron Wisley </td>
				<td id="td-black"> 920078006500420 </td>
				<td id="td-black"> $1500 </td>
			</tr>
		</table>
		<!-- close: Content box !-->
		
		
		<div>
		<!-- start: footer!-->
            <?php include 'footer.php';?> 
        </div>
		<!-- end: footer!-->
	
	
	
	</div>
</body>