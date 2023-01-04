<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	</title>

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
	padding: 40px 20px;
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

body{
	background: #0C114E;
}



</style>


</head>
<body>


<div class="form">

	<form method="post">
		<label for="email">email </label>
		<input type="email" name="email" id="email" required autocomplete="off">
		<br><br>
		<label for="password">password</label>
		<<input type="password" name="password" id="password" required autocomplete="off">
		<br>
		<br>
		<input type="submit" name="submit">
		
	</form>
	
</div>


</body>
</html>>


<?php 	

if(isset($_POST['submit']))
{
	include 'connection.php';

$email = $_POST['email'];
$password= $_POST['password'];

$select = "SELECT * FROM user WHERE email='$email' AND password = '$password'";
$query = mysqli_query($conn,$select);
$rows = mysqli_num_rows($query);
echo $rows;

if($rows > 0 )
{

while($fetch= mysqli_fetch_array($query))
{

session_start();
$_SESSION['fname']=$fetch['fname'];
$_SESSION['lname']=$fetch['lname'];
header("location:userShow.php");



}





}
else
{

/*sorry....*/
echo "sorry";

}





}


 ?>