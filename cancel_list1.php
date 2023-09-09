<body style='background-image:url(images/16.jpg)'>
<center><a href='user_home.php'><img src='images/home.png' width=70 height=70/></a></center>
<?php
	include "dbconnect.php";

	$tid = $_POST['tid'];

	$rs = pg_query($con, "select * from ticket where journey_date > current_date and ticket_id=$tid");

	if(pg_num_rows($rs)>0){
		pg_query($con, "update ticket set cancelled_flag=1 where ticket_id=$tid");
?>
<h1>Ticket cancelled sucessfully.</h1>
<?php
	}
	else
	{
?>
<h1>Ticket cannot be cancelled now.</h1>
<?php
	}
?>
</body>

