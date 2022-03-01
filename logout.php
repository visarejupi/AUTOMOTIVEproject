<?php
setcookie("username", "", time() + (86400), "/");
setcookie("pass_hash", "", time() + (86400), "/");
header("Location: index.php");
exit();