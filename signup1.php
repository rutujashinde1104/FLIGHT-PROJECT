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

	pg_query($con, "insert into passenger values('$uname','$password','$fname','$add','$gender','$bdate','$phone','$Email')");

?>
<body>
<style>
body{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;	
}
</style>
<h4>You are registered successfully.</h4>
Click <a href='index.php'>here</a> to continue login.
</body>
