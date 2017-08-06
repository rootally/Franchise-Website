<?php

session_start();
include_once("connection.php");


	$old = $_GET["opwd"];
	$new = $_GET["npass"];
	$uid = $_SESSION["user"];
                            
    $query="update franchise set pwd='$new' where pwd='$old' and uname='$uid'";

	mysqli_query($dbcon,$query);
	$res=mysqli_affected_rows($dbcon);
		if($res!=0)
			echo "Password Successfully Updated";
		else
			echo "Invalid Password";
?>


