<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" counter-content="width=device-width, initial-scale=1.0">
    <title>Counter up Animation on Scroll | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.counter-up{
  background:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.9)), url("https://cdn.pixabay.com/photo/2020/01/22/09/39/teacher-4784916__340.jpg") no-repeat;
  min-height: 50vh;
  background-size: cover;
  background-attachment: fixed;

  position: relative;
  display: flex;
  align-items: center;
color: black;
  padding: 90px 10px;

}
.counter-up::before{
  position: absolute;
  counter-content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.8);
}
.counter-up .counter-content{
  z-index: 1;
  position: relative;
  display: flex;
  width: 100%;
  height: 100%;
  flex-wrap: wrap;
  align-items: center;
  justify-counter-content: space-around;
margin: 20px 80px;


}i{
  color: black;
}
.counter-up .counter-content .box{
  border: 1px dashed rgba(255,255,255,0.6);
  width: calc(23% - 30px);
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-counter-content: space-evenly;
  flex-direction: column;
  padding: 20px;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 1.0) , 10px 8px #ff6a00;
margin-right: 140px;
background: black;
 
}
.counter-content .box .icon{
  font-size: 48px;
  color:white;
}
.counter-content .box .counter-number{
  font-size: 50px;
  font-weight: 500;
  color:white;
  font-family: sans-serif;
}
.counter-content .box .text{
  font-weight: 400;
  color:white;
}
@media screen and (max-width: 1036px) {
  .counter-up{
    padding: 50px 50px 0 50px;
  }
  .counter-up .counter-content .box{
    width: calc(50% - 30px);
    margin-bottom: 50px;
  }
}
@media screen and (max-width: 580px) {
  .counter-up .counter-content .box{
    width: 100%;
  }
}
@media screen and (max-width: 500px) {
  .wrapper{
    padding: 20px;
  }
  .counter-up{
    padding: 30px 20px 0 20px;
  }
}



    </style>
</head>
<body>
    
  <div class="counter-up">
    <div class="counter-content">
    <!--   <div class="box">
        <div class="icon"><i class="fas fa-student"></i></div>
        <div class="counter-number">724</div>
        <div class="text">Working Hours</div>
      </div> -->
      <div class="box">
        <div class="icon"><ion-icon name="school-outline"></ion-icon></div>
        <div class="counter-number">508</div>
        <div class="text">Completed Projects</div>
      </div>
      <div class="box">
        <div class="icon"><ion-icon name="person-add-outline"></ion-icon></div>
        <div class="counter-number">436</div>
        <div class="text">students</div>
      </div>
      <div class="box">
        <div class="icon"><ion-icon name="trophy-outline"></ion-icon></div>
        <div class="counter-number">12</div>
        <div class="text">Awards Received</div>
      </div>
    </div>
  </div>
</div>
  <script>
  $(document).ready(function(){
    $('.counter-number').counterUp({
      delay: 10,
      time: 1200
    });
  });
  </script>

</body>
</html>