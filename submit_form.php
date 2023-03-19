<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // TODO: Validate form inputs

  // TODO: Send email with form data

  // Redirect to thank you page
  header('Location: thank-you.php');
  exit;
}

?>
