
<?php 	


/*if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
*/

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	admin header</title>
	<style type="text/css">
		
*{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}
.navbar{
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 20px;
	background: darkblue;

}
.navbar h3{
	color: white;
	text-transform: capitalize;
	font-size: 24px;
}
.navbar .uc{
	display: inline-block;
	margin-right: 40px;
	transition: all 0.4s linear;
	padding: 4px 8px;
}

.navbar .uc:hover{
	background: red;

}




.navbar li  a{
	color: white;
	text-transform: uppercase;
	text-decoration: none;
}

.logout{
	background: black;
	padding: 10px 20px;
	border: 2px solid white;
	border-radius: 10px;
}



	</style>

</head>
<body>


<div class="navbar">
	<h3>hello <span><?php 	session_start(); echo  $_SESSION['fname']; ?></span></h3>
	<ul class="navbar">
		<li class="uc"><a href="userShow.php">users</a></li>
		<li class="uc"><a href="noticeboxShow.php">notice box</a></li>
		<li class="uc"><a href="noticeShow.php">notice</a></li>
		<li class="uc"><a href="cardEnterShow.php">card</a></li>
		<li><a href="logout.php" class="logout">Logout</a></li>
		
	</ul>
	
</div>



</body>
</html>