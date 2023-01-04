
<?php 	

include 'adminHeader.php';


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	this is the card enter show place</title>
	<style type="text/css">
		

*{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}
table{
	text-align: center;
	padding: 20px;
	width: 100%;
}
th,td{
	padding: 10px;
	border: 2px solid black;
}
thead tr th{
	text-transform: capitalize;
	font-size: 26px;
	font-weight: bold;

}

.card-images img{
	height: 100px;
}
#add{
	margin: 20px;
	background: red;
	border: 2px solid black;
	border-radius: 10px;
	box-shadow: 3px 3px black;
	padding: 9px 20px;
	transition: all 0.3s linear;

}

#add a {
	text-decoration: none;
	color: white;
	text-transform: capitalize;
}

#add:hover{
	background: #370303;
}




	</style>
</head>
<body>


<button id="add"><a href="adduser.php">add user</a></button>


	<table border="1">
		<thead>
		<tr>

<th>user id</th>
<th>first name</th>
<th>last name</td>h	
<th>email</th>
<th>update</th>
<th>delete</th>
		</tr>
		</thead>
		



<tbody>
	
<?php 

include 'connection.php';
$select = "SELECT * FROM user";
$query = mysqli_query($conn,$select);
while($fetch = mysqli_fetch_array($query))
{
?>

<tr>
	<td><?php 	echo $fetch['uid']; ?></td>
	<td><?php 	echo $fetch['fname']; ?></td>
	<td><?php 	echo $fetch['lname']; ?></td>
	<td><?php 	echo $fetch['email']; ?></td>
	<td><a href="#">update</a></td>
	<td><a href="usershowDelete.php?usd=<?php echo $fetch['uid']; ?> ?>">delete</a></td>


</tr>




<?php 



}


 ?>


</tbody>



	</table>



</body>
</html>