<?php 	

include 'connection.php';
$usd = $_GET['usd'];
$delete = "DELETE FROM user WHERE uid ='$usd'";
$query = mysqli_query($conn,$delete);
if($query)
{
	header("location:userShow.php");
}


 ?>