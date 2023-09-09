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
	<td align='center' width='20%' style='font-size:20px;font-weight:bold;text-shadow:2px 2px 2px white;'>User:<b><?php echo $_SESSION["pid"]?></b></td>
	<td align='center' width='80%' style='font-size:40px;font-weight:bold;text-shadow:2px 2px 2px white;'>WELCOME TO AIRLINE RESERVATION SYSTEM</td>
</tr>
<tr>
	<td style='background:#FAC0D0;'>
	<ul>
		<li><a href='view_profile.php'>View Profile</a></li>
		<li><a href='edit_profile.php'>Edit Profile</a></li>
		<li><a href='book_ticket2.php'>Book Ticket</a></li>
		<li><a href='tickets_list.php'>View Tickets</a></li>
		<li><a href='cancel_list.php'>Cancel Ticket</a></li>
		<li><a href='logout.php'>Logout</a></li>
	</ul>
	</td>
	<td></td>
</tr>
</table>
</body>
