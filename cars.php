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
  <ul class="aside" id="price_slider">
  <h3 class="title">PRICE</h3>

  <div class="slidecontainer">
  <input type="range" min="10000" max="150000" value="75000" step="10000" class="slider_price" id="myRange">
  </div>
  <label for="myRange" id="demo"></label>
  <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = 'From <strong>10000€</strong> to <strong>' +slider.value + '€</strong>'; 

    slider.oninput = function() {
    output.innerHTML = 'From <strong>10000€</strong> to <strong>'+this.value+'€</strong>';
}
  </script>
  </ul>
<ul class="aside" id="categories">
  <h3 class="title">CATEGORIES</h3>
  <li><a><img src="images/cars/cartypes/MICRO.svg" alt="" width="45" style="height: 18px;">Small</a></li>
  <li><a><img src="images/cars/cartypes/HATCHBACK1.svg" alt="" width="45">Hatchback</a></li>
  <li><a><img src="images/cars/cartypes/MINIVAN1.svg" alt="" width="45">Minivan</aimg></li>
  <li><a><img src="images/cars/cartypes/CUV.svg" alt="" width="45">Estate</a></li>
  <li><a><img src="images/cars/cartypes/SEDAN.svg" alt="" width="45">Sedan</a></li>
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
<?php
try {
  $stmt = $conn->prepare("SELECT cars.name, cars.price, car_types.name as 'car_type', cars.picture_location, cars.date_posted, users.name as 'posted_by' FROM `cars` left join `car_types` on cars.car_type = car_types.id left join `users` on users.id=cars.posted_by");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt as $car_list=>$car_listing) {
    ?>
    <div class="box"  id="box">
      <img src="<?php echo $car_listing["picture_location"]; ?>" alt="">
      <h2><?php echo $car_listing["price"]; ?>	&#128;</h2>
      <h1><?php echo $car_listing["name"]; ?></h1>
      <p><?php echo $car_listing["car_type"]; ?></p>
    </div> 
    <?php
  } 
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
  </div>
</section>
</div>

</div>

<?php
  include 'includes/footer.php';
  ?>
     </body>
   </html>
   
