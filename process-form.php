<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "methesonal19@gmail.com";
    
    // Set the email subject
    $subject = "Contact Form Submission from $name";
    
    // Compose the email message
    $message = "Name: $name\nEmail: $email\n\n$message";
    
    // Send the email
    mail($to, $subject, $message);
}
?>
