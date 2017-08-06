<?php

	include_once("connection.php");
	
	$fid=$_GET["fid"];
	$items=$_GET["item"];
	$bill=$_GET["bill"];
	$query="insert into orders values('$fid','$items','$bill',CURDATE())";
	
	mysqli_query($dbcon,$query);

	if(mysqli_error($dbcon)=="")
		echo "Saved";
	else
		echo mysqli_error($dbcon);


?>
