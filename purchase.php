<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AUTOMOTIVE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/54319c4285.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="icon
    "
      href="images/index/TabLogo.svg"
    />
  </head>

<body>
<header>
<div class="topheader">
    <div class="contact_info">
    <i class="far fa-calendar-alt" style="color: white;"></i><p id='date-time'></p>
    <i class="fas fa-phone-alt" style="color: white;"></i><p id="telephone_number">1-408-555-5555</p>
    <i class="far fa-clock" style="color: white;"></i><p id="work_schedule">MON - SAT 8:30 - 19:00</p>
</div>
    <div class="social_media">
     <i class="fab fa-facebook" style="color: white;"><a href="www.facebook.com"></a></i>  
     <i class="fab fa-youtube" style="color: white;" ><a href="www.youtube.com"></a></i> 
     <i class="fab fa-instagram" style="color: white;"><a href="www.instagram.com"></a></i>
    </div>
</div>
    <script>
    var date = document.getElementById('date-time');
    var today = new Date();
    var dt = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

    date.innerHTML=dt;
    </script>
  <div class="header_content">
  <div class="nav_logo">
    <img
    src="images/index/navlogo.svg"
    alt="Doni Logo"
    />
  </div>

<div class="navbar">
   <ul class="nav-items">     
      <?php
      $page = 'index';
      include ('includes/header.php');
      ?>
   </ul>
</div>
</div>
</header> 
<main>
<BR>
<BR></BR></BR></BR></h2>
<div class="container">
<div id="purchase">

<div class="car">
    <img src="images/cars/carpictures/audia4.jpg" alt="">
</div>
<div class="cardetails">
    <h1>Audi A4 3.0 V6 TDI Sport quattro</h1>
<h3>39,000€</h3>
<button >PURCHASE NOW</button>
    <div class="carspecs">
    <div class="cardetails_left">
   <p id="hirit"><strong>Category:</strong></p> 
   <p ><strong>Doors:</strong></p> 
   <p id="hirit"><strong>Transmission:</strong></p>
   <p ><strong>Drivetrain:</strong></p>
   <p id="hirit"> <strong>Torque:</strong></p>
   <p ><strong>Power</strong></p>
    </div>
    <div class="cardetails_right">
    <p id="hirit">Sedan</p> 
    <p >4/5</p>
    <p id="hirit">Automatic</p>
    <p>AWD</p>
    <p  id="hirit">273 lb-ft @ 1600 rpm</p>
    <p >261 hp @ 6500 rpm</p>    
</div>
    </div>
  
   


</div>
</div>
<a id="back" href="cars.php">Back</a>
</div><br>
<br>
<br>
<br>

</main>

<?php
  include 'includes/footer.php';
  ?>
  </body>
</html>
