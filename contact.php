<?php 	

include 'header.php';
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}

.contact{
	display: flex;
	justify-content: space-around;
	padding: 50px;
}
label{
	color: black;
	font-size:23px;
	font-weight: bold;
	text-transform: capitalize;
}
input{
	width: 100%;
	padding: 10px;
	border-radius: 5px;
	outline: none;
	color: black;
}
.form-group{
	margin: 20px 0px;
}
input[type='submit']
{
	color: white;
	background: red;
	border: 2px solid black;

}
.contact-heading h2{
	color: black;
	font-size: 34px;
	font-weight: bold;
	text-transform: capitalize;
	padding: 10px 5px;
}

.choose{
	display: flex;
	margin: 0px 20px;
	padding: 60px;
	/*background: darkblue;*/

}

.choose-content{
	margin: 0px 10px;
}

.choose .choose-image img{
	height: 500px;
	width: 500px;
}

.choose-content-heading,.choose-content-paragraph{
	color: black;

}
#colorFul{
	animation: changes 2s linear infinite;
	text-transform: capitalize;
}

@keyframes changes{

from{
color: red;
transform: scale(1.0);
}

to{
	color: white;
	transform: scale(1.2);
}

}
.contact{


}

.map{

}
.form{


}

@media screen and (max-width: 920px)
{
.contact-heading h2{
	font-size: 17px;
}

.contact{
	display: block;
	flex-direction: column-reverse;
}
.map{
	margin-bottom: 20px;
}
iframe{
	width:300px;
}
.choose{
	display: block;
}
.choose-content{
	margin: 0px 1px;
	padding: 0px 0px;

}p{t
text-align: justify;}
.choose .choose-image img{
	height: 150px;
width: 250px;

}
.choose-content-heading{
	font-size: 17px;
}
.choose-content-paragraph{
	font-size: 15px;
	text-align: justify;
}




}


	</style>
</head>
<body>

<div id="top"></div>

<div class="contact-heading">
<h2>if you have any query about us then fill up the form we will reply you as soon as possible</h2>
	
</div>



<div class="contact">

<div class="map">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.175562079267!2d82.68691881499909!3d28.20197818258962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3997c58f7e71afdf%3A0x4bb0da1e5e1f7dd5!2sGYAN%20MANDIR%20VIDHYA%20GRIHA%20KHUNGRI%20Pvt.Ltd.!5e0!3m2!1sen!2snp!4v1655654875598!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	
</div>

<div class="form">

<form class="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="username">Name</label>
<input type="text" name="username" id="name">
</div>



<div class="form-group">
<label for="email">Email</label>
<input type="text" name="email" id="email">
</div>




<div class="form-group">
<label for="number">Number</label>
<input type="number" name="number" id="number">
</div>



<div class="form-group">
<label for="username">description</label>
<br>
<textarea name="description"></textarea>
</div>


<input type="submit" name="submit" value="send your message">



	

</form>


	
</div>
	

</div>




<!-- this is for the second... -->

<div class="choose">

<div class="choose-image">
	<img src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061__340.jpg">
</div>


<div class="choose-content">
	<h1 class="choose-content-heading">Why to choose <span id="colorFul">gyan mandir vidhya griha</span></h1>
	<p class="choose-content-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	

</div>



	
</div>

















</body>
</html>





 <?php 	

include 'footer.php';
  ?>
  <?php 

include 'circleIndicator.php';
   ?>