<?php 

$to = 'recipient@example.com';
$subject = 'Hello from WordPress!';
$body = 'This is the content of the email.';

$headers = array(
    'Content-Type: text/html; charset=UTF-8',
);

$result = wp_mail($to, $subject, $body, $headers);

if ($result) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}


