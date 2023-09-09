<?php
	include "dbconnect.php";

	$fno = $_POST["fno"];
	$fid = $_POST["fid"];
	$fname = $_POST["fname"];
	$aname = $_POST["aname"];
	$source = $_POST["source"];
	$dest = $_POST["dest"];
	$dtime = $_POST["dtime"];
	$atime = $_POST["atime"];
	$fcap = $_POST["fcap"];
	$scap = $_POST["scap"];
	$ecap = $_POST["ecap"];
	$frate = $_POST["frate"];
	$srate = $_POST["srate"];
	$erate = $_POST["erate"];

	pg_query($con, "update flight set flight_id='$fid', flight_name='$fname', airport_name='$aname', source='$source', destination='$dest', departure_time='$dtime', arrival_time='$atime', first_cap=$fcap, business_cap=$scap, economy_cap=$ecap, first_rate=$frate, business_rate=$srate, economy_rate=$erate where flight_no=$fno");

	header("Location: update_flight.php");
?>

	
