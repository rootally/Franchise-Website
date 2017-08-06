<?php
	include_once("connection.php");
	$uid=$_GET["uid"];
	$email=$_GET["email"];
	$city=$_GET["city"];
	$adr=$_GET["adr"];
	$loc=$_GET["loc"];
	$size=$_GET["size"];
	$income=$_GET["income"];
	$mobile=$_GET["mobile"];

	$query="insert into users values('$mobile', '$uid', '$city' , '$adr' , '$loc', '$size', '$income', curdate(),1,'$email')";

	mysqli_query($dbcon,$query);

	if(mysqli_error($dbcon)=="")
		echo "Signed up";
	else if(mysqli_error($dbcon)== " Duplicate entry '$mobile' for key 'PRIMARY' ")
			echo "duplicate";
	else
	   echo mysqli_error($dbcon);
?>	
