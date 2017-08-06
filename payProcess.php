<?php

	include_once("connection.php");

	$mobile=$_GET["mobile"];
	$date=$_GET["date"];
	$amount=$_GET["amount"];
	$acc=$_GET["acc"];
	$tid=$_GET["tid"];
	
	$query="insert into tpay values('$mobile', '$date', '$amount' , '$acc' , '$tid')";
	
	mysqli_query($dbcon,$query);

	if(mysqli_error($dbcon)=="")
		echo "Payment Successful";
	else
	   echo mysqli_error($dbcon);
?>
