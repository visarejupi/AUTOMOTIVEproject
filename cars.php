<?php

include "classes/page.php";
include "classes/site.php";
include "includes/db.php";

$header = "includes/header.php";
$footer = "includes/footer.php";

$site = new site($conn, $header, $footer);

$static_content = file_get_contents("templates/cars.html");
$dynamic_content = array();

$cars = "";
try {
  $stmt = $conn->prepare("SELECT cars.name, cars.price, car_types.name as 'car_type', cars.picture_location, cars.date_posted, users.name as 'posted_by' FROM `cars` left join `car_types` on cars.car_type = car_types.id left join `users` on users.id=cars.posted_by");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt as $car_list=>$car_listing) {
    $cars.="<div class=\"box\"  id=\"box\">
    <img src=\"".$car_listing["picture_location"]."\" alt=\"\">
    <h2>".$car_listing["price"]."?>	&#128;</h2>
    <h1>".$car_listing["name"]."</h1>
    <p>".$car_listing["car_type"]."</p>
    </div> ";
  } 
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}


$dynamic_content["cars"]=$cars;


$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();