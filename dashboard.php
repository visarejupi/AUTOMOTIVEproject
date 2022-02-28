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
      $page = 'index';
      include ('includes/header.php');
      ?>
   </ul>
</div>
</div>
</header>

<main>
<div class="container">
<br><br><br><br><br><br>

<?php
if ($privileges==0) {
  echo "<h2 class=\"dashboard_h2\">Welcome back, <b>Admin</b></h2>";
}

?>

<div class="add_new_car">
  
    <p class="title"> Add new car</p>
        
 

</div>

<div class="delete_car">
    <p class="title">Delete car by ID</p>
</div>

<div  class="feedbacks">
    <p class="title">Feedbacks</p>
<?php
$stmt = $conn->prepare("SELECT * from contact_form LIMIT 10");
$stmt->execute();

// set the resulting array to associative

?>
<table id="feedback">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>

<?php
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt as $contact_forms=>$contact_form) {
    ?>
    <tr id="alt">
    <td><?php echo $contact_form['id'];?></td>
    <td><?php echo $contact_form['name'];?></td>
    <td><?php echo $contact_form['email'];?></td>
    <td><?php echo $contact_form['subject'];?></td>
    <td><?php echo $contact_form['message'];?></td>
    </tr>
<?php
}
?>
</table>
<br><br><br><br><br><br>

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