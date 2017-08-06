<?php
	include_once("connection.php");
	
	$name=$_GET["sname"];
	$email=$_GET["semail"];
	
	$query="insert into subscribers values('$name', '$email')";

	mysqli_query($dbcon,$query);

	if(mysqli_error($dbcon)=="")
		echo "U are now Subscibed to our Newsletter!";
	
	else
	   echo mysqli_error($dbcon);
?>
