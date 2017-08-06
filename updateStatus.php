
<?php
include_once("connection.php");

$mobile=$_GET["mobile"];
$what=$_GET["what"];

$query="update users set status=$what where mobile='$mobile'";

mysqli_query($dbcon,$query);
$res=mysqli_affected_rows($dbcon);
if($res!=0)
	echo "Updated";
	else
	echo "invalid id";
	?>


