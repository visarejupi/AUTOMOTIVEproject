<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "automotive";

$name = $_GET["username"];
$email = $_GET["email"];
$user_password = $_GET["password"];
$salt = base64_encode(random_bytes(10));
$salted_hash = hash("sha256", $user_password.$salt, false);
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

// create a cookie

header('Location: '."/index.php");

exit();
?>