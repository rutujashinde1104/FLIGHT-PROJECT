<?php
	include "dbconnect.php";

	$fno = $_GET["fno"];

	pg_query($con, "delete from flight where flight_no=$fno");

	header("Location: delete_flight.php");
?>


