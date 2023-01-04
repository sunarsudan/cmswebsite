<?php 
include 'header.php';
 ?>

 <<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>about us</title>
 	<style type="text/css">
 		
*{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}

.about-container{
	padding: 30px;
	color: black;
	display: flex;
	margin-bottom: 20px;


}

.about-leftSide{
	padding: 0px 20px;
}


.about-leftSide-heading{
	text-align: center;
	text-transform: capitalize;
	font-size: 34px;
	font-weight: bold;
	position: relative;
	margin-bottom: 30px;
	color: black;

}
.about-leftSide-heading::before{
content: "";
	position: absolute;
	top: 60px;
	height: 5px;
	width: 280px;
	left: 370px;
	background: #ff6a00;
}

.about-container-paragraph{
	text-align: justify;

}
.about-image{
	height: 400px;
}
.section-heading{
	display: flex;
	flex-direction: row-reverse;
	
}
.second{
	flex-direction: row-reverse;
}


@media screen and (max-width: 1020px)
{

.about-leftSide-paragraph{
	font-size: 14px;
}
}

@media screen and (max-width: 920px)
{


.about-container{
	display: block;
}



.about-leftSide-paragraph{
	font-size: 13px;
	color: black;
}
.about-image{
	margin-top: 50px;
	height: 300px;
display: flex;
justify-content: center;
align-items: center;
}
.about-image img{
	height: 300px;
}
.about-leftSide-heading{
	font-size: 19px;
}


}











 	</style>
 </head>
 <body>
 
<div id="top">
	
</div>

<div class="about-container first">
<div class="about-leftSide">
	<h2 class="about-leftSide-heading">what is the real life</h2>
	<p class="about-leftSide-paragraph" style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>	
<div class="about-image">
	<img src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584__340.png">	
</div>	
</div>

<!-- this is the second.-->


<div class="about-container second">
<div class="about-leftSide">
	<h2 class="about-leftSide-heading">what is the real life</h2>
	<p class="about-leftSide-paragraph" style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>	
<div class="about-image">
	<img src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584__340.png">	
</div>	
</div>



<!-- this is the third -->

<div class="about-container third">
<div class="about-leftSide">
	<h2 class="about-leftSide-heading">what is the real life</h2>
	<p class="about-leftSide-paragraph" style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>	
<div  class="about-image">
	<img src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584__340.png">	
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