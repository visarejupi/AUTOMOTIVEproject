<?php

include "includes/preload.php";

$cars = "";

$parameters = array();
if (isset($_GET["price"])) array_push($parameters, "cars.price<'".$_GET["price"]."'");
if (isset($_GET["category"])) array_push($parameters, "cars.car_type='".$_GET["category"]."'");
if (isset($_GET["fuel"])) array_push($parameters, "cars.fueltype='".$_GET["fuel"]."'");
if (isset($_GET["doors"])) array_push($parameters, "cars.doors='".$_GET["doors"]."'");
if (isset($_GET["transmission"])) array_push($parameters, "cars.transmission='".$_GET["transmission"]."'");
if (isset($_GET["drivetrain"])) array_push($parameters, "cars.drivetrain='".$_GET["drivetrain"]."'");

$query_appendix = "";
for ($i=0; $i<count($parameters); $i++) {
  if ($i == 0) $query_appendix .= " WHERE ";
  else $query_appendix .= " AND ";
  $query_appendix .= $parameters[$i];
}

"cars.doors='4/5' and cars.fueltype='diesel' and cars.price<'33000' and cars.drivetrain='awd' and cars.car_type='7' and cars.transmission='automatic'";

$query = "SELECT cars.id, cars.name, cars.price, car_types.name as 'car_type', cars.picture_location, cars.date_posted, users.name as 'posted_by' 
FROM `cars` left join `car_types` on cars.car_type = car_types.id left join `users` on users.id=cars.posted_by $query_appendix";

try {
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt as $car_list=>$car_listing) {
    $cars.="<a href=\"/purchase.php"."?id=".$car_listing["id"]."\" style=\"margin:10px;text-decoration:none\"><div class=\"box\"  id=\"box\">
    <img src=\"".$car_listing["picture_location"]."\" alt=\"\">
    <h2>".$car_listing["price"]."	&#128;</h2>
    <h1>".$car_listing["name"]."</h1>
    <p>".$car_listing["car_type"]."</p>
    </div></a> ";
  } 
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}


$dynamic_content["cars"]=$cars;


$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();