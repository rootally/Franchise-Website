<?php

	include_once("connection.php");
	$fid=$_GET["fid"];
	$query="select items,bill,DoB from orders where fid='$fid'";

	$records=mysqli_query($dbcon,$query);

	$err=mysqli_error($dbcon);

	$ary=array();
	if($err=="")
	{
		if(mysqli_num_rows($records)>0)
		{
			while($row=mysqli_fetch_array($records))
			{
				$ary[]=$row;
			}
			echo json_encode($ary);
		}

	}
	else
		echo $err;
?>
