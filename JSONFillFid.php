<?php

	include_once("connection.php");
	$query="select distinct uname from franchise";
	$result=mysqli_query($dbcon,$query);
	$err=mysqli_error($dbcon);

	$ary=array();
	if($err=="")
	{
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				$ary[]=$row;
			}
			echo json_encode($ary);
		}
		else
		{
			$ary[]=array("msg"=>"norecord");
			echo json_encode($ary);
		}

	}
	else
		echo $err;

?>
