<?php

include "classes/page.php";
include "classes/site.php";
include "includes/db.php";

$header = "includes/header.php";
$footer = "";

$site = new site($conn, $header, $footer);

$static_content = file_get_contents("templates/login.html");
$dynamic_content = array();

$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();