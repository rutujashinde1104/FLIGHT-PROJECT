<?php
	session_start();

	include "dbconnect.php";

	$pid = $_SESSION["pid"];

	$rs = pg_query($con, "select * from passenger where passenger_id='$pid'");
	$row = pg_fetch_row($rs);
?>
<body>
<center><a href='user_home.php'><img src='images/home.png' width=75 height=75/></a></center>
<style>
body{
	background-image:url("back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<br><br><br><br>
<table align='center' width=500 height=400 style='background-color:#FFA0BA;border:2px solid red;border-radius:10px;box-shadow:10px 10px 10px #666666;font-size:18px;'>
<tr>
	<td colspan=2 align='center' style='font-size:22px;'><b>User Details</b></td>
</tr>
<tr>
	<td><b>User ID:</b></td>
	<td><?php echo $row[0]?></td>
</tr>
<tr>
	<td><b>Password:</b></td>
	<td><?php echo $row[1]?></td>
</tr>
<tr>
	<td><b>Full Name:</b></td>
	<td><?php echo $row[2]?></td>
</tr>
<tr>
	<td><b>Address</b></td>
	<td><?php echo $row[3]?></td>
</tr>
<tr>
	<td><b>Gender:</b></td>
	<td><?php echo $row[4]?></td>
</tr>
<tr>
	<td><b>Birth Date:</b></td>
	<td><?php echo $row[5]?></td>
</tr>
<tr>
	<td><b>Phone:</b></td>
	<td><?php echo $row[6]?></td>
</tr>
<tr>
	<td><b>Email:</b></td>
	<td><?php echo $row[7]?></td>
</tr>
</table>
</form>
</body>
