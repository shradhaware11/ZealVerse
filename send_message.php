<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $to = "info@zealverse.com"; // Replace with your email
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

  $body = "You have received a new message from the contact form on ZealVerse:\n\n";
  $body .= "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Subject: $subject\n";
  $body .= "Message:\n$message\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
  } else {
    echo "<script>alert('Failed to send message. Please try again.'); window.location.href='contact.php';</script>";
  }
}
?>
