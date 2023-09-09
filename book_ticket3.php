<?php
	session_start();

	include "dbconnect.php";
	
	$pid = $_SESSION["pid"];
	$fno = $_POST["fno"];
	$bdate = $_POST["bdate"];
	$jdate = $_POST["jdate"];
	$cls = $_POST["class"];
	$no = $_POST["seats"];

	$rs = pg_query($con, "select first_cap, business_cap, economy_cap, first_rate, business_rate, economy_rate from flight where flight_no=$fno");

	$row = pg_fetch_row($rs);

	$fcap = $row[0];
	$bcap = $row[1];
	$ecap = $row[2];

	$frate = $row[3];
	$brate = $row[4];
	$erate = $row[5];

	$rs = pg_query($con, "select sum(no_of_seats) from ticket where journey_date='$jdate' and ticket_type='$cls' and cancelled_flag=0");

	$row = pg_fetch_row($rs);
	$bsno = $row[0];

	$amt1 = $frate * $no;
	$amt2 = $brate * $no;
	$amt3 = $erate * $no;

	if(($cls=="First Class" && ($fcap - $bsno) >= $no) ||
	   ($cls=="Business Class" && ($bcap - $bsno) >= $no) ||
	   ($cls=="Economy Class" && ($ecap - $bsno) >= $no)){
		
		if($cls=="First Class") $t=$amt1;
		if($cls=="Business Class") $t=$amt2;
		if($cls=="Economy Class") $t=$amt3;

		pg_query($con, "insert into ticket(ticket_date, journey_date, ticket_type, no_of_seats, total, passenger_id, flight_no, cancelled_flag) values('$bdate','$jdate','$cls',$no,$t,'$pid',$fno,0)");
	
		$rs = pg_query($con, "select count(*) from ticket");
		$row = pg_fetch_row($rs);

		$tid = $row[0];
		
		header("Location: member_info.php?tid=$tid&no=$no");
	}
	else
	{
?>
<body style='background-image:url(images/16.jpg)'>
<h1>Seats not available.</h1>
<center><a href='user_home.php'><img src='images/home.png' width=70 height=70/></a></center>
</body>
<?php
	}
?>