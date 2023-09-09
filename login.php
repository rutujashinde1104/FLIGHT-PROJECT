<?php 
	session_start(); 

	include "dbconnect.php";

	$uid = $_POST["uid"];
	$pass = $_POST["pass"];
	$type = $_POST["type"];

	if($type=="User"){
		$rs = pg_query($con, "select * from passenger where passenger_id='$uid' and passwd='$pass'");

		if(pg_num_rows($rs)>0){
			$_SESSION["pid"]=$uid;
			header("Location: user_home.php");
		}
		else{
			header("Location: err.php");
		}
	}
			
	if($type=="Admin"){
		$rs = pg_query($con, "select * from admin where admin_id='$uid' and passwd='$pass'");

		if(pg_num_rows($rs)>0){
			$_SESSION["aid"]=$uid;
			header("Location: admin_home.php");
		}
		else{
			header("Location: err.php");
		}
	}
?>

