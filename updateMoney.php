<?php

include_once("SMS_OK_sms.php");
include_once("connection.php");

$mobile=$_GET["mobile"];
$what=$_GET["what"];

$query="update users set status=$what where mobile='$mobile'";

    mysqli_query($dbcon,$query);
    $res=mysqli_affected_rows($dbcon);

    $queryy="select mobile, uid, city,  loc, income, status, email from users where status=4 and mobile='$mobile' ";
    $result=mysqli_query($dbcon,$queryy);

   if(mysqli_num_rows($result) > 0)
 {
    while ($row = mysqli_fetch_row($result))
    {

        $mobile=$row[0];
        $uid=$row[1];
        $city=$row[2];
        $loc=$row[3];
        $income=$row[4];
        $status=$row[5];
        $email=$row[6];
        $uname=$row[6];
        $pwd=$row[6];

        $queryyy="insert into franchise values('$uname', '$pwd', '$mobile' , '$uid' , '$city', '$loc', '$income' , '$status', '$email')";
    }

   }

	mysqli_query($dbcon,$queryyy);

	if(mysqli_error($dbcon)=="")
  {
			echo $mobile;
      $msg="Your Username= '$email' Password='$email' ";
      //$resp= SendSMS($mobile,$msg);
        //echo $resp;    
  }

	else
	   echo mysqli_error($dbcon);
?>
