
<?php 

include 'header.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>single page of the site</title>
	<style type="text/css">
		
*{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}

img{
	height: 600px;
}





#title{
	text-align: center;
	font-size: 34px;
	text-transform: capitalize;

}
.singleTemplate{
	padding: 50px;
}

.singleTemplate h3{
color: black;
font-size: 34px;
font-weight: bold;
text-align: center;
margin-bottom: 10px;
}
.singleTemplate small{
	text-align: center;
	color: black;
}
#dates{
	font-size: 14px;

}
.singleTemplate img{
	text-align: center;
	
}
#center{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}


	</style>
</head>
<body>
<div id="center">
<?php 
include 'connection.php';
$single = $_GET['sid'];
$select = "SELECT * FROM noticeBox WHERE nbid='$single'";

$query = mysqli_query($conn,$select);
while($fetch= mysqli_fetch_array($query))
{
?>
<div class="singleTemplate">
<h3 id="title"><?php echo $fetch['nbtitle']; ?><small id="dates"><br><?php echo $fetch['dates']; ?></small></h3>

<img src="<?php echo 'admin/'.$fetch['nbimage'] ?>">
</div>
<?php
}
 ?>

</div>
</body>
</html>


<?php 

include 'footer.php';
 ?>