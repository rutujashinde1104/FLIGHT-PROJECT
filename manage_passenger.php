<body>
<center><a href='admin_home.php'><img src='images/home.png' width=75 height=75/></a></center>
<style>
body{
	background-image:url("images/pro.jpg");
	background-repeat:no-repeat;	
}
</style>
<?php
	include "dbconnect.php";

	$rs = pg_query($con, "select * from passenger");

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
	<td><b>Name</b></td>
	<td><b>Address</b></td>
	<td><b>Gender</b></td>
	<td><b>DOB</b></td>
	<td><b>Phone</b></td>
	<td><b>Email</b></td>
</tr>
<?php
	while($row = pg_fetch_row($rs))
	{
?>
<tr>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo $row[3]?></td>
	<td><?php echo $row[4]?></td>
	<td><?php echo $row[5]?></td>
	<td><?php echo $row[6]?></td>
	<td><?php echo $row[7]?></td>
</tr>
<?php
	}
}
?>
</table>
</form>
</body>
