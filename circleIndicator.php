<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<title></title>
	<style type="text/css">
		.fab{
	text-align: center;
	position: absolute;
	bottom: 20px;
	right: 50px;
	position: fixed;
}
.fab button{
	height: 70px;
	width: 70px;
	border-radius: 50px;
	background: black;
	text-align: center;
	transition: all 0.5s linear;
}

.fab button:hover{
	background:green;
}



.icons{
	color: white;
	font-size: 54px;
	font-weight: bold;
}
html{
	scroll-behavior: smooth;
}

	</style>
</head>
<body>
<div class="fab">
	<a href="#top"><button><ion-icon name="arrow-up-outline" class="icons"></ion-icon></button></a>
</div>

</body>
</html>