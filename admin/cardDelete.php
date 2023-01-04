<?php 	

include 'connection.php';

$card_delete = $_GET['cdel'];
$delete = "DELETE FROM card WHERE cid='$card_delete'";

$query = mysqli_query($conn,$delete);
if($query)

{
	$update = "UPDATE notice SET postNumber = postNumber - 1 WHERE nid='$card_delete'";
	$query1 = mysqli_query($conn,$update);
	if($query1)
	{
		header("location:cardEnterShow.php");
	}
}


 ?>