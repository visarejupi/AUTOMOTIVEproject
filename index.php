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

<!-- MAIN CODE HERE!! -->
<main>
<div id="banner" class="slider">
      <img src="images/index/banner/banner2.jpg" alt="banner2" width=100%>
      <img src="images/index/banner/banner1.jpg" alt="banner" width=100%>
      <img src="images/index/banner/banner3.jpg" alt="banner3" width=100%>
      </div>
<div class="container">
<div class="banner-text" style="position: absolute;
    top: 30%;
    ">
    <?php
if ($privileges==0) {
  echo "<h2>You are the Admin</h2>";
}
else if ($privileges==1) {
  echo "<h2>You are ".$name."</h2>";
}
?>
       <h1 style="color: white">
        Electrit Performance, <br />
        the facelifted Tesla Roadster
       </h1>
       <br>
       <p style="color: white;
       padding-bottom: 5%;
       ">
        -Mobile connector with 240 volt. <br />
        -17" capacitive touchscreen <br />
        -Soft LED ambient interior lighting
        </p>
        <br>
        <a href="tesla.php" id="red_button">PRE-ORDER NOW</a>
    </div>
    <div id="optform">
      <h2>Choose a car</h2>
      <p>Filter by brand, budget or by kilometers.</p>
      <a href="cars.html
      ">SHOW PRODUCTS</a>
      <br>
      <br>
      <form action="" id="selectionform">
      <select name="category" id="category">
        <option value="category"  disabled selected hidden>Category</option>
        <option value="hybrid-electric">Hybrid-Electric</option>
        <option value="sport">Sport</option>
        <option value="truck">Truck</option>
        <option value="small">Small</option>
        <option value="motorcycle">Motorcycle</option>
        <option value="sedan">Sedan</option>
        <option value="SUV">SUV</option>
      </select>
      <select name="brand" id="brand">
        <option value="brand" disabled selected hidden>Brand</option>
        <option value="landrover">Land Rover</option>
        <option value="alfaromeo">Alfaromeo</option>
        <option value="audi">Audi</option>
        <option value="bmw">BMW</option>
        <option value="mercedes">Mercedes</option>
        <option value="peugeot">Peugeot</option>
        <option value="jeep">Jeep</option>
        <option value="suzuki">Suzuki</option>
      </select>
      <select name="price" id="price">
        <option value="price" disabled selected hidden>Price</option>
        <option value="1000-5000">1,000 - 5,000	&#128</option>
        <option value="5000-10000">5,000 - 10,000	&#128</option>
        <option value="10000-15000">10,000 - 15,000	&#128</option>
        <option value="15000-20000">15,000 - 20,000	&#128</option>
        <option value="20000-25000">20,000 - 25,000	&#128</option>
        <option value="25000-3000">25,000 - 30,000	&#128</option>
        </form>
    </div>

    <div class="terms">
      <div class="terms_items"> 
      <img src="images/terms/talk.png" alt="Offer picture" title="Offer Image" width="20px">
      <h3>We make you an offer</h3>
      <p>With the best selection of cars you’re looking for. You pick the one you like best, thanks to our advice and car chooser.</p>
      </div>

      <div class="terms_items"> 
      <img src="images/terms/terms.png" alt="Offer picture" title="Offer Image" width="20px">
      <h3>You check the terms</h3>
      <p>We show you offers from based on your requirements. You pick the one you like best. It’s all on your terms.</p>
      </div>

      <div class="terms_items"> 
      <img src="images/terms/handshake.png" alt="Offer picture" title="Offer Image" width="20px">
      <h3>Choose what is right for you</h3>
      <p>The price you see is the price you pay – you just choose which is right for you and and we’re ready. We wish you a safe drive.</p>
      </div>
    </div>

</div>

</main>    
<?php
  include 'includes/footer.php';
  ?>
<script src="js/jquery-3.6.0.js" type="text/javascript"></script>
  <script src="js/slick.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({

        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2200

      });
    });
  </script>

<!-- SLIDER CODE HERE!! -->


</body>
</html>