<?php
	session_start();
?>

<body>
<style>
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
ul{
	list-style-type:none;
	padding:50px 5px 50px 5px;
}
li{
	padding:25px 5px 25px 5px;
}
a{
	text-decoration:none;
	font-size:20px;
	color:black;
	font-weight:bold;
}
a:hover{
	color:white;
	background:black;
}
</style>
<table width='100%'>
<tr>
	<td align='center' width='20%' style='font-size:20px;font-weight:bold;text-shadow:2px 2px 2px white;'>Admin:<b><?php echo $_SESSION["aid"]?></b></td>
	<td align='center' width='80%' style='font-size:40px;font-weight:bold;text-shadow:2px 2px 2px white;'>Welcome Admin</td>
</tr>
<tr>
	<td style='background:#FAC0D0;'>
	<ul>
		<li><a href='manage_flights.php'>Manage Flights</a></li>
		<li><a href='manage_passenger.php'>View Passengers</a></li>
		<li><a href='manage_tickets.php'>Manage Tickets</a></li>
		<li><a href='logout.php'>Logout</a></li>
	</ul>
	</td>
	<td></td>
</tr>
</table>
</body>
