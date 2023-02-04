<?php
  if (isset($_POST['submit'])) {
    $to = 'your@email.com';
    $subject = 'Website Contact Form';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: " . $email . "\r\n";
    mail($to, $subject, $message, $headers);
    header('Location: thanks.html');
  }
?>
