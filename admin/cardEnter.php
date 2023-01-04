<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>carEnter</title>
	<style type="text/css">
		
*{
padding: 0px;
margin: 0px;
box-sizing: border-box;
}

form{
	background: darkblue;
	color: white;
	padding: 50px 10px;
	border: 1px solid black;
	border-radius: 10px;

position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);

}

label{
	color: white;
	text-transform: capitalize;
	font-weight: bolder;
	text-align: center;
font-size: 24px;

}
input{
	width: 100%;
	padding: 10px;
	border: 2px solid black;
}

input[type='file']
{
	color:white;
	background: red;

}



	</style>
</head>
<body>



<div class="card">
	<form method="post" enctype="multipart/form-data">

		<label>image</label>
		<input type="file" name="image" required autocomplete="off">
		<br><br>
		<label>teacher name</label>
		<input type="text" name="teacherName" required autocomplete="off">
		<br><br>
		<label>qualification</label>
		<input type="text" name="qualification" required autocomplete="off">
		<br><br>
		<label>experience</label>
		<input type="text" name="experience" required autocomplete="off">
		<br><br>
			<label>contact number</label>
		<input type="text" name="number" required autocomplete="off">
		<br>
		<br>

<input type="submit" name="submit" value="uploads teacher details">

		
	</form>
	

</div>


</body>
<?php 
include 'connection.php';

if(isset($_POST['submit']))
{

$image = $_FILES['image'];
$file_name=$image['name'];
$phoneNumber = $_POST['number'];
$file_parth = $image['tmp_name'];
$file_error= $image['error'];
$teacherName=mysqli_real_escape_string($conn,$_POST['teacherName']);
$qualification =mysqli_real_escape_string($conn,$_POST['qualification']);
$experience = mysqli_real_escape_string($conn,$_POST['experience']);
if($file_error == 0)
{

$destination = "uploads/".$file_name;
move_uploaded_file($file_parth, $destination);
$insert = "INSERT INTO card (image,name,qualification,experience,phonenumber) VALUES('$destination','$teacherName','$qualification','$experience','$phoneNumber')";
$query = mysqli_query($conn,$insert);
if($query)
{
	header("location:cardEnterShow.php");
}



}



}




 ?>






</html>