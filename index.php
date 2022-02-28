<?php

include "classes/page.php";
include "classes/site.php";
include "includes/db.php";

$header = "includes/header.php";
$footer = "includes/footer.php";

$site = new site($conn, $header, $footer);

$static_content = file_get_contents("templates/index.html");
$dynamic_content = array();

$welcome_message = "";
if ($site->privileges==0) {
    $welcome_message.= "<h2>You are the Admin</h2>";
}
    else if ($site->privileges>0) {
    $welcome_message.= "<h2>You are ".$site->user."</h2>";
}
$dynamic_content["welcome_message"]=$welcome_message;


$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();

?>