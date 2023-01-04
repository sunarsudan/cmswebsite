

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
th{
	padding: 10px;
	text-transform: capitalize;
	font-size: 25px;

}
td{
	padding: 10px;
}

	</style>
</head>
<body>

<button id="add"><a href="addNotice.php">add Notice</a></button>



	<table border="1">
		<thead>
		<tr>

<th>notice-id</th>
<th>notice-name</th>
<th>post number</td>h	
<th>update</th>
<th>delete</th>

		</tr>
		</thead>
		



<tbody>
	
<?php 

include 'connection.php';
$select = "SELECT * FROM notice";
$query = mysqli_query($conn,$select);
while($fetch = mysqli_fetch_array($query))
{
?>

<tr>
	<td><?php 	echo $fetch['nid']; ?></td>
	<td><?php 	echo $fetch['nname']; ?></td>
	<td><?php  echo $fetch['postNumber']; ?></td>
<td><a href="#">update</a></td>
<td><a href="#">delete</a></td>

</tr>




<?php 



}


 ?>


</tbody>



	</table>



</body>
</html>