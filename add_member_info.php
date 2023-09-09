<?php
	include "dbconnect.php";

	$cno = $_POST["cno"];
	$bname = $_POST["bname"];

	$tid = $_POST["tid"];
	
	$mname = $_POST["mname"];
	$bdate = $_POST["bdate"];

	for($i=0;$i<count($mname);$i++){
		pg_query($con, "insert into ticket_members values(".$tid.",'".$mname[$i]."','".$bdate[$i]."')");
	}

	pg_query($con, "update ticket set card_no='$cno', bank_nam='$bname' where ticket_id=$tid");

	$rs = pg_query($con, "select ticket_id, ticket_date, journey_date, ticket_type, no_of_seats, total, full_name, flight_id, flight_name, airport_name, source, destination, departure_time, arrival_time from ticket, flight, passenger where ticket.flight_no = flight.flight_no and passenger.passenger_id=ticket.passenger_id and ticket_id=$tid");

	$row = pg_fetch_row($rs);
?>
<body style='background-image:url(images/16.jpg)'>
<center><a href='user_home.php'><img src='images/home.png' width=70 height=70/></a></center>
<table align='center' width='50%' border=1 bgcolor='white'>
<tr>
	<td><b>Ticket ID:</b></td><td><?php echo $row[0]?></td>
</tr>
<tr>
	<td><b>Booking Date:</b></td><td><?php echo $row[1]?></td>
</tr>
<tr>
	<td><b>Journey Date:</b></td><td><?php echo $row[2]?></td>
</tr>
<tr>
	<td><b>Class:</b></td><td><?php echo $row[3]?></td>
</tr>
<tr>
	<td><b>No.of Seats:</b></td><td><?php echo $row[4]?></td>
</tr>
<tr>
	<td><b>Amount:</b></td><td>Rs.<?php echo $row[5]?>/-</td>
</tr>
<tr>
	<td><b>Full Name:</b></td><td><?php echo $row[6]?></td>
</tr>
<tr>
	<td><b>Flight ID:</b></td><td><?php echo $row[7]?></td>
</tr>
<tr>
	<td><b>Flight Name:</b></td><td><?php echo $row[8]?></td>
</tr>
<tr>
	<td><b>Airport Name:</b></td><td><?php echo $row[9]?></td>
</tr>
<tr>
	<td><b>Source:</b></td><td><?php echo $row[10]?></td>
</tr>
<tr>
	<td><b>Destination:</b></td><td><?php echo $row[11]?></td>
</tr>
<tr>
	<td><b>Departure Time:</b></td><td><?php echo $row[12]?></td>
</tr>
<tr>
	<td><b>Arrival Time:</b></td><td><?php echo $row[13]?></td>
</tr>
</table>
<table border=1 width='50%' align='center' bgcolor='white'>
<tr bgcolor='red'>
	<th>Memeber Name</th>
	<th>Birth Date</th>
</tr>
<?php
	$rs = pg_query($con, "select * from ticket_members where ticket_id=$tid");
	while($row=pg_fetch_row($rs)){
?>
<tr>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
</tr>
<?php
	}
?>
</table>
</body>%/



	
