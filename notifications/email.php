<?php

function sendEmailNotification(string $to, string $subject, string $body): bool
{
    if ($to === '' || $subject === '' || $body === '') {
        return false;
    }

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: SEO Client Management System <no-reply@example.com>\r\n";

    return mail($to, $subject, $body, $headers);
}
