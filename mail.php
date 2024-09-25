<?php
if (isset($_POST['name'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
}
if (isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
}

// Define subject and recipient
$subject = "Form Submission";
$recipient = "pnmohamedniyas26726@gmail.com";
$content = "From: $name";
$mailheader = "From: $email \r\n";

if (mail($recipient, $subject, $content, $mailheader)) {
    echo "Email sent!";
} else {
    echo "Failed to send email.";
}
?>
