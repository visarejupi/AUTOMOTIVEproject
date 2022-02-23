<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "automotive";

$name = "Nderim";
$hash = hash("sha256", "password", false);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

$salted_hash_from_request = hash("sha256", $hash.$salt, false);

if ($salted_hash == $salted_hash_from_request) {
    echo "Access Granted!";
} else {
    echo "Access Denied.";
}
?>