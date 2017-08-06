<?php
	include_once("SMS_OK_sms.php");
	include_once("connection.php");
	
	$email=$_GET["email"];
	
	$queryy="select pwd,mobile from franchise where email='$email' ";
    $result=mysqli_query($dbcon,$queryy);
		
	if(mysqli_num_rows($result) > 0)
	{ 
		 while ($row = mysqli_fetch_row($result))
		{ 
			 $msg=$row[0];
			 $mobile=$row[1];
		}
		
		$resp= SendSMS($mobile,$msg);
			echo $resp; 
	}
	else
		echo "This email-id does not exists in our database!"
	

?>