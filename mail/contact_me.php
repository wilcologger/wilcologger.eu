<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name           = $_POST['name'];
    $email_adres    = $_POST['email'];
    $message        = $_POST['message'];

    $to      = 'stageplek@unifact.eu';
    $subject = 'Contact';
    $messages = $message;
    $email_body = '
        <html>
            <body>
                <p>Naam: %s</p>
                <p>Mail: %s</p>
                <p>Message: %s</p>
            </body>
        </html>';
    $headers = 'From: ' . $email_adres;

    $body = sprintf($email_body, $name, $email_adres, $message);

    mail($to, $subject, $body, $headers);

}
?>