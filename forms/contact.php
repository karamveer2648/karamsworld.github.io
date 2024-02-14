<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'karamoberoi19@gmail.com'; // Replace with your actual email address.
    $subject = 'New Contact Form Submission';

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $message, $headers);
    echo 'Email sent successfully.';
} else {
    echo 'Invalid request.';
}
?>
