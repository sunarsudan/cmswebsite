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

}
.cardsss{

  max-width: 80vw;
  

  text-align: center;
  
  padding: 60px 0px;
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
  background: #f8f8ff;

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


      </style>
   </head>
   <body>

<div class="all">

      <div class="cardsss">
         <h2 class="headers" style="color:black;">
       Our special teachers
         </h2>
         <div class="services">
            <div class="content content-1">
               <div>
               	
               		<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">
               </div>
               <h2>
                  santaraj bista
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
               <a href="about.php">contetns More</a>
            </div>
            <div class="content content-2">
               <div class="">
               	<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">

               </div>
               <h2>
                  obi ram
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
               <a href="about.php">contetns More</a>
            </div>
            <div class="content content-3">
               <div class="">

	<img src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311__340.png" style="height:200px; width: 200px; border-radius: 100px;">



               </div>
               <h2>
                  dil bahadur 
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
               <a href="about.php">contetns More</a>
            </div>
         </div>
      </div>

</div>







   </body>
</html>