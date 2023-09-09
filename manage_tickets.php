<body>
<center><a href='admin_home.php'><img src='images/home.png' width=75 height=75/></a></center>
<style>
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<form method='post' action='manage_ticket.php' name='add'>
<br><br><br><br>
<table align='center' width=500 style='background-color:#FFA0BA;border:2px solid red;border-radius:10px;box-shadow:10px 10px 10px #666666;'>
<tr>
	<td colspan=2 align='center' style='font-size:22px;'><b>View Tickets</b></td>
</tr>
<tr>
	<td><b>Journey Date:</b></td>
	<td><input type='date' name='jdate' required></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='Show' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	<td align='center'><input type='reset' value='Clear' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
</tr>
</table>
</form>
</body>
