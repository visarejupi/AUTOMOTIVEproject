<?php

include "includes/preload.php";

$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();