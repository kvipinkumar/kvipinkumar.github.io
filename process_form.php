<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your@email.com"; // Replace with your email address
    $subject = "[Website Contact Form]: New Message";

    $emailBody = "Name: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Message:\n$message";

    // Additional headers for better email formatting
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    mail($to, $subject, $emailBody, $headers);

    // Redirect the user to a thank you page
    header("Location: /thank-you/");
    exit;
}
?>
