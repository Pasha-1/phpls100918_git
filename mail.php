<?php
require_once 'vendor/autoload.php';
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('PHGBTU.FOUNDATION@gmail.com')
    ->setPassword('@2018');
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['@doe.com' => 'John Doe'])
    ->setTo(['@gmail.com'])
    ->setBody('Here is the message itself');
// Send the message
$result = $mailer->send($message);
