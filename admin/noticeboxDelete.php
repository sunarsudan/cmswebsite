<?php 

include 'connection.php';
$nbid=$_GET['nbid'];
$select = "DELETE FROM noticebox WHERE nbid='$nbid'";
$query= mysqli_query($conn,$select);
if($query)
{
	$update = "UPDATE notice SET postNumber = postNumber-1 WHERE nid='$nbid'";
	$query1 = mysqli_query($conn,$update);
	if($query1)
	{
		header("location:noticeboxShow.php");
	}
}







 ?>