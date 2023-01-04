<?php 
include 'adminHeader.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>admin notice</title>
 	<style type="text/css">
 		
*{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}
form{
	background: red;
	padding: 30px 20px;
	border: 2px solid black;
	border-radius: 20px;

position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
}
label{
	color: white;
	text-transform: capitalize;
	text-align: center;
}
input{
	width: 100%;
padding: 10px 0px;
border: 2px solid black;
}
input[type='submit']
{
	background: darkblue;
	color: white;
	border:2px solid white;
	margin-top: 20px;
}



 	</style>
 </head>
 <body>


 	<form method="post">
 		<label for="notice">add notice category</label>
 		<input type="text" id="notice" name="notice" autocomplete="off">
 		<input type="submit" name="submit" value="upload notice category"> 		
 	</form>
 
 </body>
 </html>

 <?php 

include 'connection.php';
if(isset($_POST['submit']))
{

$notice = mysqli_real_escape_string($conn,$_POST['notice']);

$insert  = "INSERT INTO notice (nname) VALUES('$notice')";
$query = mysqli_query($conn,$insert);
if($query)
{
	header("location:noticeShow.php");
}




}



  ?>