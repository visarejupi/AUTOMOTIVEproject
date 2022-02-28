<?php
include "classes/page.php";
include "classes/site.php";
include "includes/db.php";

$header = "includes/header.php";
$footer = "includes/footer.php";

$template_file_name = explode(".", basename($_SERVER["REQUEST_URI"]))[0].".html";
if ($template_file_name == "login.html" || $template_file_name == "signup.html") $footer="";
if ($template_file_name == ".html") $template_file_name = "index.html";

$site = new site($conn, $header, $footer);

$static_content = file_get_contents("templates/$template_file_name");
$dynamic_content = array();