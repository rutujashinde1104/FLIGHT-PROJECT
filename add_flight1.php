<?php
	include "dbconnect.php";

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


	$rs = pg_query($con, "insert into flight(flight_id, flight_name, airport_name, source, destination, departure_time, arrival_time, first_cap, business_cap, economy_cap, first_rate, business_rate, economy_rate) values('$fid','$fname','$aname','$source','$dest','$dtime','$atime',$fcap,$scap,$ecap,$frate,$srate,$erate)");

?>
<h3>Flight added succesfully.</h3>
Click <a href='manage_flights.php'>here</a> to continue.


	
