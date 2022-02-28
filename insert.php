<?php

include "includes/preload.php";

$name =  $_POST['name'];
$email = $_POST['email'];
$subject =  $_POST['subject'];
$message = $_POST['message'];

$send_message = "";

  try {
    $stmt = $conn->prepare("INSERT INTO contact_form  (name, email, subject, message) VALUES ('$name', '$email','$subject','$message')");
    $stmt->execute();
    $send_message .= "<h3>Thank you ".$name." for your feedback, <BR>
                       we will contact you soon!</h3> "; 
      
    $send_message .= "<p><strong>Name: </strong>$name<br> <strong>Email: </strong>$email<br>"
."<strong>Subject: </strong>$subject<br> <strong>Message: </strong>$message </p>";
  }
  catch(PDOException $e) {
    echo "ERROR: Hush! Sorry " . $e->getMessage();
  }

$dynamic_content["send_message"] = $send_message;

$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();