<?php

include "classes/page.php";
include "classes/site.php";
include "includes/db.php";

$header = "includes/header.php";
$footer = "includes/footer.php";

$site = new site($conn, $header, $footer);

$static_content = file_get_contents("templates/services.html");
$dynamic_content = array();

$services = "";
try {
  $stmt = $conn->prepare("SELECT * FROM `services`");
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt as $entry=>$service_item) {
    $services.="
<div class=\"service\">

    <div class=\"serviceimg\">   
        <img src=\"".$service_item["picture_location"]."\" alt=\"\" width=\"200px\">
    </div>
    <div class=\"service_text\">
        <h1>".$service_item["name"]."</h1>
        <p>".$service_item["description"]."</p>
        <ul>
            <li>".$service_item["specific1"]."</li>
            <li>".$service_item["specific2"]."</li>
            <li>".$service_item["specific3"]."</li> 
        </ul>
    </div>
</div>";
  } 
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$dynamic_content["services"]=$services;

$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();