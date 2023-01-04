
<?php 	
include 'header.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<title>	this is the serives of the php......</title>
	<style type="text/css">
		
*{
padding: 0px;
margin: 0px;
box-sizing: border-box;
}
.services-hero-image{
	background: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.5)),url("https://cdn.pixabay.com/photo/2020/07/26/20/02/terminal-5440620__340.jpg") no-repeat;
min-height: 60vh;
background-size:cover;
position: relative;



}

.services-content{
position: absolute;
	top: 40%;
	left: 30%;
	transform: translate(-50%,-50%);

}
.services-heading{
	color: white;
	font-size: 56px;
	font-weight: bold;
	text-transform: uppercase;
}


	</style>
</head>
<body>
<div id="top"></div>

<div class="services-hero-image">
	<div class="services-content">
		<h1 class="services-heading">Our services</h1>	
	</div>
</div>






</body>
</html>


 <!-- this is for the second. -->


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <!-- <title>Responsive cardsss</title> -->
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style type="text/css">
      	
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800|Poppins&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat',sans-serif;
}
.all{
	display: flex;
	justify-content: center;
	align-items: center;
	background: white;
}
.cardsss{

  max-width: 80vw;
  

  text-align: center;
  
  padding: 20px 0px;
}
.cardsss h2.headers{
  font-size: 40px;
  margin: 0 0 30px 0;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.services{
  display: flex;
  align-items: center;
}
.content{
  display: flex;

  flex-wrap: wrap;
  flex: 1;
  margin: 20px;
  padding: 20px;
border-radius: 4px;
  transition: all .3s ease;
 /* background: rgba(36,45,82,0.2);*/
/*  background: #f8f8ff;*/
box-shadow: 0px 5px 15px rgba(0, 0,0, 0.5);

}
.content .fab{
  font-size: 70px;

}
.content > *{
  flex: 1 1 100%;
}

/*.content:hover{
  color: white;
}*/
/*.content:hover a{
  border-color: white;
background: rgba(116,115,124,0.17);
}
*/




/*
.content-1:hover{
  border-color: #1DA1F2;
  background: #1DA1F2;
  box-shadow: 0px 3px 5px 0px black;
}*/
/*.content-1:hover a{
  color: #000000;
 background: rgb(61, 57, 57);
}*/
/*.content-2:hover{
  border-color: #E1306C;
  background: #E1306C;
}*/
/*.content-2:hover a{
  color: #E1306C;
}*/
/*.content-3:hover{
  border-color: #ff0000;
  background: #ff0000;
}*/
/*.content-3:hover a{
  color: #ff0000;
}*/
.content h2{
  font-size: 30px;
  margin: 16px 0;
  color: black;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.content p{
  font-size: 17px;
  color: black;
  font-family: 'Poppins',sans-serif;
}
.content a{
  margin: 22px 0;
  background: black;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  border: 1px solid black;
  padding: 15px 0;
/*  border-radius: 25px;*/
  transition: .3s ease;
}
.content a:hover{
  border-radius: 4px;
}
@media (max-width: 900px) {
  .services{
    display: flex;
    flex-direction: column;
  }
}
html{
	scroll-behavior: smooth;
}

.hostels{
	padding: 70px 0px;
	
	
}

.hostels-menu{
	padding: 30px 10px;
}

.hostels .hostels-menu h3{
	text-align: center;
	text-transform: uppercase;
	font-size: 34px;
	font-weight: bold;
	margin-bottom: 10px;
}




.firstImage{
	display: flex;
	justify-content: space-around;

	overflow: hidden;
	padding:30px 0px;
}
figure{
	height: 300px;
	transition: all 0.3s linear;
}

.firstImage figure:hover{
	transform: scale(1.2);
}


 img{
	height: 300px;
	border-radius: 20px;
	box-shadow: 5px 9px #ff6a00;
}




      </style>
   </head>
   <body>

<div class="all">
      <div class="cardsss">
         <div class="services">
            <div class="content content-1">
               <div>
               	
               		<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">
               </div>
               <h2>
               hostels
               </h2>
               <p>
                 <!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error? -->
               </p>
               <a href="#hostels">view </a>
            </div>
            <div class="content content-2">
               <div class="">
               	<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">

               </div>
               <h2>
                 library
               </h2>
               <p>
                 <!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error? -->
               </p>
               <a href="#library">view </a>
            </div>
            <div class="content content-3">
               <div class="">

	<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">



               </div>
               <h2>
                 computer
               </h2>
               <p>
                  <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error? -->
               </p>
               <a href="#computer">view </a>
            </div>
         </div>
      </div>

</div>
</div>


<!-- this is for the second content -->



<div class="all">
      <div class="cardsss">
         
         <div class="services">
            <div class="content content-1">
               <div>
               	
               		<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">
               </div>
               <h2>
                canteen
               </h2>
               <p>
                 <!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error? -->
               </p>
               <a href="#canteen">contetns More</a>
            </div>
            <div class="content content-2">
               <div class="">
               	<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">

               </div>
               <h2>
                 sports
               </h2>
               <p>
                 <!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error? -->
               </p>
               <a href="#sports">contetns More</a>
            </div>
            <div class="content content-3">
               <div class="">

	<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">



               </div>
               <h2>
                  science labs
               </h2>
               <p>
                 <!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error? -->
               </p>
               <a href="#science">contetns More</a>
            </div>
         </div>
      </div>

</div>
</div>


 
<div class="hostels" id="hostels">
<div class="hostels-menu">
   <h3>our facilities on hostels</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="firstImage">
<figure>
	<img src="https://cdn.pixabay.com/photo/2018/06/07/20/54/rose-3460971__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2018/06/07/20/54/rose-3460971__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2018/06/07/20/54/rose-3460971__340.jpg">
</figure>
</div>
</div>


<!-- this is for the library -->




 
<div class="hostels" id="library">
<div class="hostels-menu">
   <h3>Library</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="firstImage">
<figure>
	<img src="https://cdn.pixabay.com/photo/2016/11/29/07/22/bible-1868070__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2015/11/19/21/11/book-1052014__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2016/02/16/21/07/books-1204029__340.jpg">
</figure>
</div>
</div>



<!-- this is for the computer... -->



 
<div class="hostels" id="computer">
<div class="hostels-menu">
   <h3>computer labs</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="firstImage">
<figure>
	<img src="https://cdn.pixabay.com/photo/2016/11/08/05/10/students-1807505__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2014/09/24/14/29/macbook-459196__340.jpg">
</figure>
</div>
</div>

<!-- this is for the  canteen  -->

 
<div class="hostels" id="canteen">
<div class="hostels-menu">
   <h3>canteen</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="firstImage">
<figure>
	<img src="https://cdn.pixabay.com/photo/2016/11/08/05/10/students-1807505__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2014/09/24/14/29/macbook-459196__340.jpg">
</figure>
</div>
</div>

<!--  this is for the sports -->

 
<div class="hostels" id="sports">
<div class="hostels-menu">
   <h3>sports</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="firstImage">
<figure>
	<img src="https://cdn.pixabay.com/photo/2016/11/08/05/10/students-1807505__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2014/09/24/14/29/macbook-459196__340.jpg">
</figure>
</div>
</div>

<!-- this is for the science -->


 
<div class="hostels" id="science">
<div class="hostels-menu">
   <h3>science labs</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in volup	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="firstImage">
<figure>
	<img src="https://cdn.pixabay.com/photo/2016/11/08/05/10/students-1807505__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585__340.jpg">
</figure>
<figure>
	<img src="https://cdn.pixabay.com/photo/2014/09/24/14/29/macbook-459196__340.jpg">
</figure>
</div>
</div>


<div class="fab">
	<a href="#top"><button><ion-icon name="arrow-up-outline" class="icons"></ion-icon></button></a>
</div>



</body>
</html>


<?php 	
include 'footer.php';
include 'circleIndicator.php';

 ?>