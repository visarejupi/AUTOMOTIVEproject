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
      $page = 'contact';
      include ('includes/header.php');
      ?>
   </ul>
</div>
</div>
</header>


<iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5165539.318362727!2d5.862074988857897!3d50.789734843687654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799dc39d5bc6109%3A0x27bfcdae48c5d5a0!2sVolkswagen%20Automobile%20Stuttgart%20GmbH!5e0!3m2!1sen!2s!4v1633884564449!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<div class="container">
    <div class="form">
    <div class="contactform">
    <form action="insert.php" method="post">
        <H1>Contact Us</H1>
        <p>Sign a partnership with us, drop us a letter.</p>
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="text" name="subject" id="subject" placeholder="Subject">
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
        <input type="submit" name="submit" id="submit" value="SEND MESSAGE">
    </form>
    </div>

    <div class="informtaion">
        <h1>Offices</h1>
        <ul>
            <li>
            Visit our offices, or call us.
        </li>
        </ul>
        <h3>Address</h3>
        <ul>
            <li>Kalium Automotive</li>
            <li>44-45 Hythe Rd,</li>
            <li>White City</li>
            <li>United Kingdom</li>
        </ul>
        <hr>
        <h3>Phone:</h3>
        <ul>
        <li>+44 20 10524 5001</li>
        <li>+44 15 12699 4003</li>
    </ul>
    <hr>
    <h3>E-mail:</h3>
    <ul>
    <li>info@cardealership.co.uk</li>
</ul>
    </div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
 </body>
</html>
