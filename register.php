<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "automotive";


$name = "Nderim";
$email = "nx35602@ubt-uni.net";
$hash = hash("sha256", "password", false);
$salt = base64_encode(random_bytes(10));
$salted_hash = hash("sha256", $hash.$salt, false);
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (name, email, salted_hash, salt, privileges)
  VALUES ('$name', '$email', '$salted_hash', '$salt', 1)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "User Registered Successfuly";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>