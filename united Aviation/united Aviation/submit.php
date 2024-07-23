<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Recipient Email Address
    $to = "ardemo786@gmail.com"; // Replace with your own email address
    
    // Email subject
    $subject = "New Contact Form Submission";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $name <$email>";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p>Your message has been sent successfully. We will get back to you soon!</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
} else {
    // If not a POST request, redirect to the contact form
    header("Location: contact.html");
    exit;
}
?>