<?php 
include('../connection.php');

$id=$_GET['id'];

$sql=mysqli_query($con,"select * from paintings where painting_id='$id' ");
$res=mysqli_fetch_assoc($sql);

$img=$res['image'];

unlink("../image/paintings/$img");

if(mysqli_query($con,"delete from paintings where painting_id='$id' "))
{
header('location:dashboard.php?option=Paintings');	
}

?>