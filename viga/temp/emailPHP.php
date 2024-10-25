<?php
$to      = 'brambilla.matteo@issvigano.org';
$subject = 'the subject';
$message = 'Prova';
$headers = 'From: pre-production@vigainsider.it' . "\r\n" .
    'Reply-To: pre-production@vigainsider.it' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
