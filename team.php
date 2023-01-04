<?php 
include 'header.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>card</title>
	<style type="text/css">
		img{
			height: 200px;
		}
.team-card{
	text-align: center;
	/*border: 2px solid black;*/
	box-shadow: 3px 4px #ff6a00;
	width: 80%;
	padding: 20px 50px;
	box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5);
	border-radius: 10px;

}
.team-card-body p{
	color: black;
}
.team-card-body h3{
	color: black;
}
.team-card img{
	height: 150px;
	width: 150px;
	border-radius: 100px;
}
.card-collection{
	display: grid;
	padding: 20px 20px;
	grid-template-columns: repeat(4, 1fr);
	grid-row-gap: 20px;
}




	</style>
</head>
<body>
<div class="card-collection">

	<?php 
include 'connection.php';
$select = "SELECT * FROM card";
$query = mysqli_query($conn,$select);
while($fetch= mysqli_fetch_array($query))
{

	?>

<div class="team-card">
	<img src="<?php echo 'admin/'.$fetch['image'];  ?>">
	<div class="team-card-body">
		<h3><?php echo $fetch['name']; ?></h3>
		<p>contact number:<?php echo $fetch['phonenumber']; ?></p>
		<p>experience:<?php echo $fetch['qualification']; ?></p>
		<p>qualification:<?php echo $fetch['experience']; ?></p>
	</div>
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