<?php
include "includes/db.php";

$name = $_GET["username"];
$user_password = $_GET["password"];

try {
    $stmt = $conn->prepare("SELECT salted_hash, salt FROM users WHERE name='$name'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $salted_hash = $result["salted_hash"];
    $salt = $result["salt"];
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

$salted_hash_from_request = hash("sha256", $user_password.$salt, false);

if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];

if ($salted_hash == $salted_hash_from_request) {
    echo "Access Granted!";
    setcookie("username", $name, time() + (86400), "/");
    setcookie("pass_hash", hash("sha256", $salted_hash, false), time() + (86400), "/");

    header('Location: '.$uri."/index.php");
} else {
    header('Location: '.$uri."/login.php");
}

exit()
?>