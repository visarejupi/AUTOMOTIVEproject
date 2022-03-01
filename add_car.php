<?php
include "classes/download.php";
include "includes/preload.php";

if ($site->privileges > 0) {
    header("Location: index.php");
    exit();
}

$message="";

$target_dir = "images/cars/carpictures/";
$is_uploaded = 1;

$parameters = array();
if (isset($_POST['name']) && $_POST['name']!="") $parameters["name"] =  $_POST['name'];
if (isset($_POST['car_type']) && $_POST['car_type']!="") $parameters["car_type"] = $_POST['car_type'];
if (isset($_POST['price']) && $_POST['price']!="") $parameters["price"] =  $_POST['price'];
if (isset($_POST['buidlyear']) && $_POST['buidlyear']!="") $parameters["buildyear"] = $_POST['buidlyear'];
if (isset($_POST['firstregistration']) && $_POST['firstregistration']!="") $parameters["firstregistration"] = $_POST['firstregistration'];
if (isset($_POST['odometerreading']) && $_POST['odometerreading']!="") $parameters["odometerreading"] = $_POST['odometerreading'];
if (isset($_POST['cylindercapacity']) && $_POST['cylindercapacity']!="") $parameters["cylindercapacity"] = $_POST['cylindercapacity'];
if (isset($_POST['transmission']) && $_POST['transmission']!="") $parameters["transmission"] = $_POST['transmission'];
if (isset($_POST['fueltype']) && $_POST['fueltype']!="") $parameters["fueltype"] = $_POST['fueltype'];
if (isset($_POST['doors']) && $_POST['doors']!="") $parameters["doors"] = $_POST['doors'];
if (isset($_POST['drivetrain']) && $_POST['drivetrain']!="") $parameters["drivetrain"] = $_POST['drivetrain'];
if (isset($_POST['horsepower']) && $_POST['horsepower']!="") $parameters["horsepower"] = $_POST['horsepower'];
if ($_FILES['picture_location']!="" && $_FILES['picture_location']!=null){
    $parameters["picture_location"] = $target_dir.basename($_FILES['picture_location']["name"]);
    $is_uploaded = download($_FILES['picture_location'], $target_dir);
}
if ($is_uploaded == 0) {
    $message = "File failed to upload.";
}
else {
    $parameters['posted_by']='0';

    $keys_to_insert="";
    $values_to_insert="";

    foreach($parameters as $key => $val) {
        $keys_to_insert .= " `$key`,";
        $values_to_insert .= "'$val',";
    }
    $keys_to_insert=substr($keys_to_insert, 0, -1);
    $values_to_insert=substr($values_to_insert, 0, -1);

    try {
        $stmt = $site->db_conn->prepare("INSERT INTO cars  ($keys_to_insert) VALUES ($values_to_insert)");
        $stmt->execute();
        $message .= "<h3>Car has been recorded!</h3> "; 
      }
      catch(PDOException $e) {
        $message .= "ERROR: Hush! Sorry " . $e->getMessage();
      }
}

$dynamic_content["message"] = $message;

$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();