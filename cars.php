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
    <link rel="stylesheet" href="style.css" />
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
      $page = 'cars';
      include ('includes/header.php');
      ?>
   </ul>
</div>
</div>
</header>


<!-- MAIN CODE HERE -->
<div class="container" >
  <br>
  <br>
  <br>
<h2 class="carstitle">Find the dream car</h2>
<p class="carsp">Select the category, brand, color and set the specifics by yourself to get the car of your dreams.</p>
  <div id="products">
<aside>
<ul class="aside" id="categories">
  <h3 class="title">CATEGORIES</h3>
  <li><a><img src="images/cars/cartypes/MICRO.svg" alt="" width="45" style="height: 18px;">Small</a></li>
  <li><a><img src="images/cars/cartypes/HATCHBACK1.svg" alt="" width="45">Hatchback</a></li>
  <li><a><img src="images/cars/cartypes/MINIVAN1.svg" alt="" width="45">Minivan</aimg></li>
  <li><a><img src="images/cars/cartypes/CUV.svg" alt="" width="45">Estate</a></li>
  <li><a><img src="images/cars/cartypes/SUPERCAR.svg" alt="" width="45">Sport</a></li>
  <li><a><img src="images/cars/cartypes/SUV1.svg" alt="" width="45">SUV</a></li>
</ul>
<ul class="aside" id="fuel">
  <h3 class="title">FUEL</h3>
  <li>
  <input type="checkbox" id="diesel">
  <label for="diesel" id="f">Diesel</label>
  <input type="checkbox" id="petrol">
  <label for="petrol">Petrol</label>
</li>
<li>
  <input type="checkbox" id="hybrid">
  <label for="hybrid">Hybrid</label>
  <input type="checkbox" id="electric">
  <label for="electric">Electric</label>
</li>
</ul>
<ul class="aside" id="doors">
  <h3 class="title">DOORS</h3>
  <li>
    <input type="checkbox"  id="2/3">
    <label for="2/3">2/3</label>
    <input type="checkbox" id="4/5">
    <label for="4/5">4/5</label>
    <input type="checkbox" id="6/7">
    <label for="6/7">6/7</label>
  </li>
</ul>
<ul class="aside" id="transmission">
  <h3 class="title">TRANSMISSION</h3>
  <li>
    <input type="checkbox" id="automatic">
    <label for="automatic">Automatic</label>
    <input type="checkbox" id="manual">
    <label for="manual">Manual</label>
  </li>
</ul>
<ul class="aside" id="drivetrain">
  <h3 class="title">DRIVETRAIN</h3>
  <li>
    <input type="checkbox" id="awd">
    <label for="awd">AWD (All Wheel Drive)</label>
  </li>
  <li>
    <input type="checkbox" id="fwd">
    <label for="fwd">FWD (Fear Wheel Drive)</label>
  </li>  
  <li>
    <input type="checkbox" id="rwd">
    <label for="rwd">RWD (Rear Wheel Drive)</label>
  </li>
</ul>
</aside>
<section>
  <div class="cardeals_container" id="cars">
    <div class="box"  id="box">
      <img src="images/cars/carpictures/alfaromeo.jpg" alt="">
      <h2>31,000	&#128;</h2>
      <h1>Alfa Romeo Giulia</h1>
      <p>Sedan</p>
    </div>
    <div class="box" id="box">
      <img src="images/cars/carpictures/audia1.jpg" alt="">
      <h2>23,000	&#128;</h2>
      <h1>Audi A1</h1>
      <p>Small</p>
    </div>    
    <div class="box" id="box">
      <img src="images/cars/carpictures/audia4.jpg" alt="">
        <h2>39,000	&#128;</h2>
        <h1>Audi A4</h1>
        <p>Sedan</p>
      </div> 
      <div class="box" id="box">
        <img src="images/cars/carpictures/audia4allroad.jpg" alt="">
        <h2>42,000	&#128;</h2>
      <h1>Audi A4 Allroad</h1>
      <p>Estate</p>
    </div>   
    <div class="box" id="box">
      <img src="images/cars/carpictures/bmw4.jpg" alt="">
      <h2>37,000	&#128;</h2>
      <h1>BMW 4</h1>
      <p>Hatchback</p>
    </div>
    <div class="box" id="box">
      <img src="images/cars/carpictures/bmw7.jpg" alt="">
      <h2>69,000	&#128;</h2>
      <h1>BMW 7</h1>
      <p>Sedan</p>
    </div>
    <div class="box"  id="box">
      <img src="images/cars/carpictures/fordfiesta.jpg" alt="">
      <h2>9,000	&#128;</h2>
      <h1>Ford Fiesta</h1>
      <p>Small, Hatchback</p>
    </div>
    <div class="box" id="box">
      <img src="images/cars/carpictures/insigna.jpg" alt="">
      <h2>19,115	&#128;</h2>
      <h1>Vauxhall Insignia</h1>
      <p>Sedan</p>
    </div>    
    <div class="box" id="box">
      <img src="images/cars/carpictures/jaguar.jpg" alt="">
        <h2>54,900	&#128;</h2>
        <h1>Jaguar XJ R</h1>
        <p>Sport, Sedan</p>
      </div> 
      <div class="box" id="box">
        <img src="images/cars/carpictures/peugeot508.jpg" alt="">
        <h2>25,340	&#128;</h2>
      <h1>Peugeot 508 SW</h1>
      <p>Sedan</p>
    </div>   
    <div class="box" id="box">
      <img src="images/cars/carpictures/polo.jpg" alt="">
      <h2>12,000	&#128;</h2>
      <h1>VW Polo</h1>
      <p>Small</p>
    </div>
    <div class="box" id="box">
      <img src="images/cars/carpictures/suzuki.jpg" alt="">
      <h2>14,000	&#128;</h2>
      <h1>Suzuki Ignis</h1>
      <p>Small</p>
    </div>
    
    </div>
</section>
</div>


<?php
  include 'includes/footer.php';
  ?>
     </body>
   </html>
   
