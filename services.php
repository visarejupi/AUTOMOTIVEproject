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
      $page = 'services';
      include ('includes/header.php');
      ?>
   </ul>
</div>
</div>
</header>
        <div id="servicesbanner">
        <img src="images/services/banner/servicebanner.jpg" alt="banner"  width="100% " >
        <h1>
            Service
        </h1>
        <p>
            We also offer other services for your car. Small its shy way had woody downs power. <br>

            To denoting admitted speaking learning my exercise so in. Procured shutters mr it feelings. To or three offer house begin taken am at.
        </p>
      </div>
      <div class="container">
          <div class="services_content">
              <div class="service">
              <div class="service_text">
                  <h1>Brake repair</h1>
                  <p>
                    From the brake pedal to hydraulic <BR> brake fluid, brake master cylinder to <BR> power brake booster, drum brakes to <BR> disc brakes and electronic.
                  </p>
                  <ul>
                  <li>Brake repair</li>
                  <li>Changing rotor kits</li>
                  <li>Sensor repair</li> 
                  </ul>
                  </div>
                  <div class="serviceimg">   
                 <img src="images/services/parts/brakes.png" alt="" width="180px">
              </div>
              </div>

              <div class="service">
            <div class="serviceimg">   
                <img src="images/services/parts/tires.png" alt="" width="200px">
             </div>
             <div class="service_text">
                <h1>Tyres</h1>
                <p>
                    Selecting the right set of tyres for <br> your car can have a significant <br> impact on your car’s characteristics, <br> having an influence on braking <br> distances.                </p>
                <ul>
                <li>Summer tyres</li>
                <li>Winter tyres</li>
                <li>Runflat tyres</li>
                </ul>
                </div>
             </div>
          </div>
        </div>
    </div>
  <?php
  include 'includes/footer.php';
  ?>
     </body>
   </html>
    </header>
