<?php
	
	include_once("connection.php");

	
	$cat=$_GET["cat"];
	$item=$_GET["item"];
	$price=$_GET["price"];
	
	
	echo "$cat $item $price";
	$query="insert into items values('$cat','$item','$price')";
	
	mysqli_query($dbcon,$query);
	
	
	
?>