<?php
	session_start();

	include "dbconnect.php";

	$pid = $_SESSION['pid'];

	$rs = pg_query($con, "select ticket_id from ticket where passenger_id='$pid'");
?>
<body style='background-image:url(images/16.jpg)'>
<center><a href='user_home.php'><img src='images/home.png' width=70 height=70/></a></center>
<form method='post' action='tickets_list1.php'>
<table align='center' width=500 height=150 style='border:1px solid black;background-color:#FFABAB;border-radius:8px;box-shadow:8px 8px 8px #666666;'>
<tr>
	<td colspan=2 align='center'><b>View Ticket</b></td>
</tr>
<tr>
	<td align='center'><b>Ticket ID:</b></td>
	<td align='center'>
	<select name='tid'>
	<option value=''>----</option>
<?php
	while($row = pg_fetch_row($rs)){
?>
	<option value='<?php echo $row[0]?>'><?php echo $row[0]?></option>
<?php
	}
?>
	</select>
	</td>
</tr>
<tr>
	<td align='center' colspan=2><input type='submit' value='Show' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
</tr>
</table>
</form>
</body>
