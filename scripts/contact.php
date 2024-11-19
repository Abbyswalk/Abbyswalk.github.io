<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "aswalker205@gmail.com";
    $subject = "Contact Form Submission: $name";
    $body = "You received a message from $name ($email):\n\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting me!";
    } else {
        echo "There was an error sending your message.";
    }
}
?>
