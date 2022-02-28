<?php
include "includes/db.php";

$name = $_GET["username"];
$email = $_GET["email"];
$user_password = $_GET["password"];

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false || strlen($user_password)<8) {
  header("Location:/signup.php");
}
else {
  $salt = base64_encode(random_bytes(10));
  $salted_hash = hash("sha256", $user_password.$salt, false);
  try {
    $sql = "INSERT INTO users (name, email, salted_hash, salt, privileges)
    VALUES ('$name', '$email', '$salted_hash', '$salt', 1)";

    $conn->exec($sql);
    setcookie("username", $name, time() + (86400), "/");
    setcookie("pass_hash", hash("sha256", $salted_hash, false), time() + (86400), "/");
  }
  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;

  header('Location: '."/index.php");
}

exit();
?>