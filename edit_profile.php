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
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<form method='post' action='edit_profile1.php'>
<br><br><br><br>
<table align='center' style='background-color:#FFA0BA;border:2px solid red;border-radius:10px;box-shadow:10px 10px 10px #666666;'>
<tr>
	<td colspan=2 align='center' style='font-size:22px;'><b>User Details</b></td>
</tr>
<tr>
	<td><b>User ID:</b></td>
	<td><input type='text' name='pid' value='<?php echo $row[0]?>' readOnly></td>
</tr>
<tr>
	<td><b>Password:</b></td>
	<td><input type='password' name='pass' value='<?php echo $row[1]?>'></td>
</tr>
<tr>
	<td><b>Full Name:</b></td>
	<td><input type='text' name='name' value='<?php echo $row[2]?>'></td>
</tr>
<tr>
	<td><b>Address</b></td>
	<td><textarea rows=5 cols=40 name='addr'><?php echo $row[3]?></textarea></td>
</tr>
<tr>
	<td><b>Gender:</b></td>
	<td>
	<select name='gender'>
	<option>Select One</option>
	<option value='Male' <?php if($row[4]=="Male") echo " selected";?>>Male</option>
	<option value='Female' <?php if($row[4]=="Female") echo " selected";?>>Female</option>
	</select>
	</td>
</tr>
<tr>
	<td><b>Birth Date:</b></td>
	<td><input type='date' name='dob' value='<?php echo $row[5]?>'></td>
</tr>
<tr>
	<td><b>Phone:</b></td>
	<td><input type='tel' name='phone' value='<?php echo $row[6]?>'></td>
</tr>
<tr>
	<td><b>Email:</b></td>
	<td><input type='email' name='email' value='<?php echo $row[7]?>'></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='Update' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	<td align='center'><input type='reset' value='Clear' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
</tr>
</table>
</form>
</body>
