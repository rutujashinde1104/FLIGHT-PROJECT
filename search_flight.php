<?php
	include "dbconnect.php";

	$rs = pg_query($con, "select * from flight");
?>

<body>
<style>
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<center><a href='manage_flights.php'><img src='images/home.png' width=75 height=75/></a></center>
<form method='post' action='search_flight1.php' name='add'>
<br><br><br><br>
<table align='center' width=400 style='background-color:#FFA0BA;border:2px solid red;border-radius:10px;box-shadow:10px 10px 10px #666666;'>
<tr>
	<td colspan=2 align='center' style='font-size:22px;'><b>Search Flight</b></td>
</tr>
<tr>
	<td><b>Flight ID:</b></td>
	<td>
	<select name='fno' required>
	<option value=''>Select Flight</option>
<?php
	while($row = pg_fetch_row($rs)){
?>
	<option value='<?php echo $row[0]?>'><?php echo $row[1]?></option>
<?php
	}
?>
</tr>
<tr>
	<td align='center'><input type='submit' value='Show' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	<td align='center'><input type='reset' value='Clear' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
</tr>
</table>
</form>
</body>
