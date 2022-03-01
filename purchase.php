<?php

include "includes/preload.php";


$car_picture="";
$car_title="";
$car_details="";
$car_price="";

//
$car_id = $_GET["id"];

try {
    $stmt = $conn->prepare("select cars.picture_location, cars.name, cars.price, 
    car_types.name as 'car_type', cars.doors, cars.transmission, cars.drivetrain, cars.fueltype, cars.horsepower 
    from `cars` left join `car_types` on cars.car_type = car_types.id where cars.id='$car_id'");
    $stmt->execute();
  
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $car_picture = $result["picture_location"];
    $car_title = $result["name"];
    $car_price = $result["price"];
    $car_details = "<p id=\"hirit\">".$result["car_type"]."</p> 
        <p>".$result["doors"]."</p>
        <p id=\"hirit\">".$result["transmission"]."</p>
        <p>".$result["drivetrain"]."</p>
        <p  id=\"hirit\">".$result["fueltype"]."</p>
        <p >".$result["horsepower"]."</p>";

    } 
    catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

//

$dynamic_content["car_picture"]=$car_picture;
$dynamic_content["car_title"]=$car_title;
$dynamic_content["car_details"]=$car_details;
$dynamic_content["car_price"]=$car_price;

$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();