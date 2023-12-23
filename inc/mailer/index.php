<?php

function send_mail($to, $from, $subject, $message)
{

// $to      = 'nobody@example.com';
// $subject = 'the subject';
// $message = 'hello';

$headers = array(
    'From' => $from,
    'Reply-To' => $from,
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

}