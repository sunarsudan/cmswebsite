
<?php 
include 'adminHeader.php';

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add the notice</title>
	<style type="text/css">
		
*{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}
form{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);

	background: #00493D;
	padding: 80px 50px;
	border-radius: 10px;
	border: 2px  solid black;
	text-align: center;
}
input{
		padding: 10px;
	width: 100%;
}
input[type='submit']
{
	background: red;
	color: white;
}
label{
	color: white;
	text-transform: capitalize;
	font-size: 25px;
}
input[type='file']
{
	width: 100%;
	color: red;
}
select{
	width: 100%;
	padding: 10px;
}
option{
	font-size: 24px;
}



	</style>
</head>
<body>


<div class="form">
<form method="post" enctype="multipart/form-data">
<label for="title"> notice title</label>
<input type="text" name="title" required id="title">
<br><br>
<label for="image">upload notice image</label>
<input type="file" name="image" id="image">
<br><br>
<label for="ca">select you notice category</label>
<select name="category">
<?php 
include 'connection.php';
$select = "SELECT * FROM notice";
$query =  mysqli_query($conn,$select);
while($fetch= mysqli_fetch_array($query))
{
?>
<option value="<?php echo $fetch['nid']; ?>"><?php echo $fetch['nname']; ?></option>
<?php
}
 ?></select>
<br><br>
<input type="submit" name="submit" value="upload notice">
</form>
</div>
</body>
</html>

<?php 

if(isset($_POST['submit']))
{

$image = $_FILES['image'];
$file_name=$image['name'];
$file_parth = $image['tmp_name'];
$file_error= $image['error'];
$title=mysqli_real_escape_string($conn,$_POST['title']);
$date= date("Y/M/d");
$category = $_POST['category'];


if($file_error == 0)
{

$destination = "noticebox/".$file_name;
move_uploaded_file($file_parth, $destination);


$insert = "INSERT INTO noticebox(nbtitle,nbimage,dates,nbcategory) VALUES('$title','$destination','$date','$category') ";


$query = mysqli_query($conn,$insert);
if($query)
{
	$update = "UPDATE notice SET postNumber = postNumber + 1 WHERE nid='$category'";
	$query1= mysqli_query($conn,$update);
	if($query1){
		header("location:noticeboxShow.php");
	}
}



}



}




 ?>
