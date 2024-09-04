<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "your-email@example.com";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    echo "Thank you for contacting us!";
}
?>
