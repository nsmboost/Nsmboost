<?php
// Check if the form is submitted
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send the email
    $to = 'admin@example.com';
    $subject = 'Contact Form Submission';
    $body = 'Name: ' . $name . "\n";
    $body .= 'Email: ' . $email . "\n";
    $body .= 'Message: ' . $message;

    // Check if the email is sent
    if (mail($to, $subject, $body)) {
        // Display a success message
        echo 'Message sent successfully';
    } else {
        // Display an error message
        echo 'Error sending message';
    }
} else {
    // Display an error message
    echo 'Please fill in all fields';
}
?>
