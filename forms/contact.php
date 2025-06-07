<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'vishnuvardhanv046@gmail.com';

  $message = "From: " . $_POST['name'] . "\n";
  $message .= "Email: " . $_POST['email'] . "\n\n";
  $message .= $_POST['message'];

  $headers = "From: " . $_POST['email'] . "\r\n";
  $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  if (mail($receiving_email_address, $_POST['subject'], $message, $headers)) {
      echo json_encode(["ok" => true]);
  } else {
      echo json_encode(["ok" => false, "error" => "Could not send mail"]);
  }
?>
