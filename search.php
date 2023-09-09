<?php
	include "dbconnect.php";

	$rs1 = pg_query($con, "select distinct source from flight");
	$rs2 = pg_query($con, "select distinct destination from flight");
?>
<body style='background-image:url(images/16.jpg)'>
<center><a href='index.php'><img src='images/home.png' width=70 height=70/></a></center>
<center><h1><b>Welcome</b></h1></center>
<form method='post' action='search1.php' name='search'>
<table align='center' width=500 height=150 style='border:1px solid black;background-color:#FFABAB;border-radius:8px;box-shadow:8px 8px 8px #666666;'>
<tr>
	<td colspan=2 align='center'><b>Search Flight</b></td>
</tr>
<tr>
	<td align='center'><b>From:</b></td>
	<td align='center'><b>To:</b></td>
	
</tr>
<tr>
	<td align='center'>
	<select name='f1' required="">
	<option value=''>----</option>
<?php
	while($row = pg_fetch_row($rs1)){
?>
	<option value='<?php echo $row[0]?>'><?php echo $row[0]?></option>
<?php
	}
?>
	</select>
	</td>
	<td align='center'>
	<select name='f2' required>
	<option value=''>----</option>
<?php
	while($row = pg_fetch_row($rs2)){
?>
	<option value='<?php echo $row[0]?>'><?php echo $row[0]?></option>
<?php
	}
?>
	</select>
	</td>
</tr>

<tr>
	<td align='center' colspan=2><input type='submit' value='Search' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	
</tr>
</table>
</form>
