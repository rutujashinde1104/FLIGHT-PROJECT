<?php
	include "dbconnect.php";
?>

<body>
<style>
body{
	background-image:url("images/pro.jpg");
	background-repeat:no-repeat;	
}
</style>
<center><a href='manage_flights.php'><img src='images/home.png' width=75 height=75/></a></center>
<?php
	$rs = pg_query($con, "select * from flight");

	if(pg_num_rows($rs)==0){
?>
<h1>Record not found.</h1>
<?php
	}
	else
	{
?>
<table align='center' width='100%' style='background-color:#FFA0BA;border:2px solid red;border-radius:10px;box-shadow:10px 10px 10px #666666;font-size:12px;'>
<tr style='background:red;'>
	<td><b>ID</b></td>
	<td><b>Flight Name</b></td>
	<td><b>Airport</b></td>
	<td><b>Source</b></td>
	<td><b>Destination</b></td>
	<td><b>Departure</b></td>
	<td><b>Arrival</b></td>
	<td><b>First Class</b></td>
	<td><b>Business Class</b></td>
	<td><b>Economy Class</b></td>
	<td><b>FC Rate:</b></td>
	<td><b>BC Rate:</b></td>
	<td><b>EC Rate:</b></td>
</tr>
<?php
	while($row = pg_fetch_row($rs))
	{
?>
<tr>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo $row[3]?></td>
	<td><?php echo $row[4]?></td>
	<td><?php echo $row[5]?></td>
	<td><?php echo $row[6]?></td>
	<td><?php echo $row[7]?></td>
	<td><?php echo $row[8]?></td>
	<td><?php echo $row[9]?></td>
	<td><?php echo $row[10]?></td>
	<td><?php echo $row[11]?></td>
	<td><?php echo $row[12]?></td>
	<td><?php echo $row[13]?></td>
</tr>
<?php
	}
}
?>
</table>
</form>
</body>
