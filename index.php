<?php

include "includes/preload.php";

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