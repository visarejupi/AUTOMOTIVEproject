<?php

include "classes/page.php";
include "classes/site.php";
include "includes/db.php";

$header = "includes/header.php";
$footer = "includes/footer.php";

$site = new site($conn, $header, $footer);

$static_content = file_get_contents("templates/dashboard.html");
$dynamic_content = array();

$feedback = "<table id=\"feedback\">
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th>Date posted</th>";


try {
  $stmt = $conn->prepare("SELECT * from contact_form LIMIT 10");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt as $contact_forms=>$contact_form) {
      $feedback .= "
      <tr id=\"alt\">
      <td>".$contact_form['id']."</td>
      <td>".$contact_form['name']."</td>
      <td>".$contact_form['email']."</td>
      <td>".$contact_form['subject']."</td>
      <td>".$contact_form['message']."</td>
      <td>".$contact_form['date_posted']."</td>

      </tr>";

  }
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$feedback .= "</table>
<br><br><br><br><br><br>";

$dynamic_content["feedback"]=$feedback;

$page = new page($static_content, $dynamic_content);

$site->setPage($page);

$site->render();