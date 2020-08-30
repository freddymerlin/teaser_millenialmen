<?php
    $email = $_POST['email'];

    $email_from = 'contact@millennialmen.co.in';
    $email_subject = 'New Subscriber';
    $email_body = "New Registration \n".
                    "User Email: $email.\n";
    $to = "contact.millennialmen@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");

?>