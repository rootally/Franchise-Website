<?php

	session_start();//session array created

	include_once("connection.php");
		
	$uid=$_GET["luid"];
	$pwd=$_GET["lpwd"];

	$query="select * from franchise where uname='$uid' and pwd='$pwd'";

	$result =	mysqli_query($dbcon,$query);

   if(mysqli_num_rows($result) > 0)
   {
		echo "Signed up Successfully";
		 while ($row = mysqli_fetch_row($result))
    {    
        $name=$row[3];
	}
	
	$_SESSION["name"]=$name;
	$_SESSION["user"]=$uid;
   
   }
	else
	   echo mysqli_error($dbcon);
?>