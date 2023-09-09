<?php
	$tid = $_GET["tid"];
	$no = $_GET["no"];
	echo $tid;
?>
<body style='background-image:url(images/16.jpg)'>
<center><a href='user_home.php'><img src='images/home.png' width=70 height=70/></a></center>
<form method='post' action='add_member_info.php' name='reg'>
<table align='center' width=500 style='border:1px solid black;background-color:#FFABAB;border-radius:8px;box-shadow:8px 8px 8px #666666;'>
<tr>
	<td align='center' colspan=2><b>Member Details</b></td>
</tr>
<tr>
	<td><b>Member Name:</b></td>
	<td><b>Birth Date:</b></td>
</tr>
<?php
	for($i=1;$i<=$no;$i++){
?>
<tr>
	<td><input type='text' name='mname[]'></td>
	<td><input type='date' name='bdate[]'></td>
</tr>
<?php
	}
?>
<tr>
	<td><b>Card No:</b></td>
	<td><input type='text' name='cno' required></td>
</tr>
<tr>
	<td><b>Bank Name:</b></td>
	<td><input type='text' name='bname' required></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='Submit' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
	<td align='center'><input type='reset' value='Clear' style='font-size:16px;font-weight:bold;color:white;background-color:red;text-shadow:2px 2px 2px black;'></td>
</tr>
</table>
<input type='hidden' name='tid' value='<?php echo $tid?>'>
</form>
</body>


