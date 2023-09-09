<?php
	include "dbconnect.php";

	$fno = $_GET["fno"];

	$rs = pg_query($con, "select * from flight where flight_no=$fno");
	$row = pg_fetch_row($rs);
?>

<script>
function validate()
{
	x = document.forms["add"]["dtime"];
	if(!x.value.match(/\d{2}:\d{2}:\d{2}/))
	{
		alert("Invalid departure time");
		x.focus();
		return false;
	}

	x = document.forms["add"]["atime"];
	if(!x.value.match(/\d{2}:\d{2}:\d{2}/))
	{
		alert("Invalid arrival time");
		x.focus();
		return false;
	}

	x = document.forms["add"]["fcap"];
	if(x.value<=0 || x.value>3)
	{
		alert("Invalid first class seats");
		x.focus();
		return false;
	}

	x = document.forms["add"]["scap"];
	if(x.value<=0 || x.value>3)
	{
		alert("Invalid business class seats");
		x.focus();
		return false;
	}

	x = document.forms["add"]["ecap"];
	if(x.value<=0 || x.value>3)
	{
		alert("Invalid economy class seats");
		x.focus();
		return false;
	}

	x = document.forms["add"]["frate"];
	if(x.value<=0)
	{
		alert("Invalid first class rate");
		x.focus();
		return false;
	}

	x = document.forms["add"]["srate"];
	if(x.value<=0)
	{
		alert("Invalid business class rate");
		x.focus();
		return false;
	}

	x = document.forms["add"]["erate"];
	if(x.value<=0)
	{
		alert("Invalid economy class rate");
		x.focus();
		return false;
	}

	return true;
}
</script>
<body>
<center><a href='manage_flights.php'><img src='images/home.png' width=75 height=75/></a></center>
<style>
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<form method='post' action='update_flight2.php' name='add' onsubmit='return validate()'>
<br><br><br><br>
<table align='center' style='background-color:#FFA0BA;border:2px solid red;border-radius:10px;box-shadow:10px 10px 10px #666666;'>
<tr>
	<td colspan=2 align='center' style='font-size:22px;'><b>Update Flight Details</b></td>
</tr>
<tr>
	<td><b>Flight ID:</b></td>
	<td><input type='text' name='fid' required value='<?php echo $row[1]?>'></td>
</tr>
<tr>
	<td><b>Flight Name:</b></td>
	<td><input type='text' name='fname' required value='<?php echo $row[2]?>'></td>
</tr>
<tr>
	<td><b>Airport Name:</b></td>
	<td><input type='text' name='aname' required value='<?php echo $row[3]?>'></td>
</tr>
<tr>
	<td><b>Source:</b></td>
	<td><input type='text' name='source' required value='<?php echo $row[4]?>'></td>
</tr>
<tr>
	<td><b>Destination:</b></td>
	<td><input type='text' name='dest' required value='<?php echo $row[5]?>'></td>
</tr>
<tr>
	<td><b>Departure Time:</b></td>
	<td><input type='text' name='dtime' required value='<?php echo $row[6]?>'>(hh:mm:ss)</td>
</tr>
<tr>
	<td><b>Arrival Time:</b></td>
	<td><input type='text' name='atime' required value='<?php echo $row[7]?>'>(hh:mm:ss)</td>
</tr>
<tr>
	<td><b>First Class Capacity:</b></td>
	<td><input type='text' name='fcap' required value=<?php echo $row[8]?>></td>
</tr>
<tr>
	<td><b>Business Class Capacity:</b></td>
	<td><input type='text' name='scap' required value=<?php echo $row[9]?>></td>
</tr>
<tr>
	<td><b>Economy Class Capacity:</b></td>
	<td><input type='text' name='ecap' required value=<?php echo $row[10]?>></td>
</tr>
<tr>
	<td><b>First Class Rate:</b></td>
	<td><input type='text' name='frate' required value=<?php echo $row[11]?>></td>
</tr>
<tr>
	<td><b>Business Class Rate:</b></td>
	<td><input type='text' name='srate' required value=<?php echo $row[12]?>></td>
</tr>
<tr>
	<td><b>Economy Class Rate:</b></td>
	<td><input type='text' name='erate' required value=<?php echo $row[13]?>></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='Update' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	<td align='center'><input type='reset' value='Clear' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
</tr>
</table>
<input type='hidden' name='fno' value=<?php echo $row[0]?>>
</form>
</body>
