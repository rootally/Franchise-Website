
<?php
include_once("connection.php");

    $item=$_GET["item"];
    
     $query="delete from items where item='$item' ";
    
    mysqli_query($dbcon,$query);
    $res=mysqli_affected_rows($dbcon);
    
    if($res!=0)
        echo "Updated";
        else
        echo "invalid id";
        ?>


