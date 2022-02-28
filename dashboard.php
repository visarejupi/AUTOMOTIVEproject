<?php

include "includes/preload.php";

$feedback = "<table id=\"feedback\">
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>";

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