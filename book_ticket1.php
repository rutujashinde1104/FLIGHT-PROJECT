<?php
	include "dbconnect.php";
	$rs = pg_query($con, "select current_date");
	$row = pg_fetch_row($rs);
	$bdate = $row[0];
	$fno = $_GET['fno'];
?>
<body style='background-image:url(images/16.jpg)'>
<center><a href='user_home.php'><img src='images/home.png' width=70 height=70/></a></center>
<center><h1><b>Check Availablity</b></h1></center>
<form method='post' action='book_ticket3.php'>
<table align='center' width=500 height=150 style='border:1px solid black;background-color:#FFABAB;border-radius:8px;box-shadow:8px 8px 8px #666666;'>
<tr>
	<td><b>Flight No:</b></td>
	<td><input type='text' name='fno' value='<?php echo $fno?>' readOnly></td>
</tr>
<tr>
	<td><b>Booking Date:</b></td>
	<td><input type='text' name='bdate' value='<?php echo $bdate?>' readOnly></td>
</tr>
<tr>
	<td><b>Journey Date:</b></td>
	<td><input type='date' name='jdate' required></td>
</tr>
<tr>
	<td><b>Class:</b></td>
	<td>
	<select name='class' required>
	<option value=''>---</option>
	<option value='First Class'>First Class</option>
	<option value='Business Class'>Business Class</option>
	<option value='Economy Class'>Economy Class</option>
	</select>
</tr>
<tr>
	<td><b>No.of Seats:</b></td>
	<td><input type='number' name='seats' min=1 max=6 required></td>
</tr>
<tr>
	<td align='center' colspan=2><input type='submit' value='Search' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	
</tr>
</table>
</form>
</body>
	
