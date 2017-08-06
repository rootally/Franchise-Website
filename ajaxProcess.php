<?php
	include_once("connection.php");
	
	$mobile=$_GET["mobile"];
		
	$query="select * from users where mobile='$mobile'";
	
	$result=mysqli_query($dbcon,$query);
	
	$err=mysqli_error($dbcon);
	if($err=="")
			{
				if(mysqli_num_rows($result)==1)
					{
						while ($row = mysqli_fetch_row($result))
							echo $row[8];
					}
						  
				else
					echo "Available" ;
			}
		else
		echo $err;
		 
?>