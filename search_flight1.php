<?php
	include "dbconnect.php";

	$fno = $_POST["fno"];

	$rs = pg_query($con, "select * from flight where flight_no=$fno");
	$row = pg_fetch_row($rs);
?>

<body>
<style>
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<center><a href='search_flight.php'><img src='images/home.png' width=75 height=75/></a></center>
<form method='post' action='update_flight2.php' name='add'>
<br><br><br><br>
<table align='center' style='background-color:#FFA0BA;border:2px solid red;border-radius:10px;box-shadow:10px 10px 10px #666666;'>
<tr>
	<td colspan=2 align='center' style='font-size:22px;'><b>Update Flight Details</b></td>
</tr>
<tr>
	<td><b>Flight ID:</b></td>
	<td><input type='text' name='fid' required value='<?php echo $row[1]?>' readOnly></td>
</tr>
<tr>
	<td><b>Flight Name:</b></td>
	<td><input type='text' name='fname' required value='<?php echo $row[2]?>' readOnly></td>
</tr>
<tr>
	<td><b>Airport Name:</b></td>
	<td><input type='text' name='aname' required value='<?php echo $row[3]?>' readOnly></td>
</tr>
<tr>
	<td><b>Source:</b></td>
	<td><input type='text' name='source' required value='<?php echo $row[4]?>' readOnly></td>
</tr>
<tr>
	<td><b>Destination:</b></td>
	<td><input type='text' name='dest' required value='<?php echo $row[5]?>' readOnly></td>
</tr>
<tr>
	<td><b>Departure Time:</b></td>
	<td><input type='text' name='dtime' required value='<?php echo $row[6]?>' readOnly>(hh:mm:ss)</td>
</tr>
<tr>
	<td><b>Arrival Time:</b></td>
	<td><input type='text' name='atime' required value='<?php echo $row[7]?>' readOnly>(hh:mm:ss)</td>
</tr>
<tr>
	<td><b>First Class Capacity:</b></td>
	<td><input type='text' name='fcap' required value=<?php echo $row[8]?> readOnly></td>
</tr>
<tr>
	<td><b>Business Class Capacity:</b></td>
	<td><input type='text' name='scap' required value=<?php echo $row[9]?> readOnly></td>
</tr>
<tr>
	<td><b>Economy Class Capacity:</b></td>
	<td><input type='text' name='ecap' required value=<?php echo $row[10]?> readOnly></td>
</tr>
<tr>
	<td><b>First Class Rate:</b></td>
	<td><input type='text' name='frate' required value=<?php echo $row[11]?> readOnly></td>
</tr>
<tr>
	<td><b>Business Class Rate:</b></td>
	<td><input type='text' name='srate' required value=<?php echo $row[12]?> readOnly></td>
</tr>
<tr>
	<td><b>Economy Class Rate:</b></td>
	<td><input type='text' name='erate' required value=<?php echo $row[13]?> readOnly></td>
</tr>
</table>
</form>
</body>
