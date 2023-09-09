<?php
	include "dbconnect.php";

	$uname = $_POST["pid"];
	$password = $_POST["pass"];
	
	
	$fname = $_POST["name"];
	$add = $_POST["addr"];
	$gender = $_POST["gender"];
	$bdate = $_POST["dob"];
	$phone = $_POST["phone"];
	$Email = $_POST["email"];

	pg_query($con, "update passenger set passwd='$password', full_name='$fname', address='$add', gender='$gender', dob='$bdate', phone='$phone', email='$Email' where passenger_id='$uname'");
?>
<body>
<style>
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<h4>You are updated successfully.</h4>
Click <a href='user_home.php'>here</a> to continue login.
</body>
