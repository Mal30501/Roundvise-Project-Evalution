<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('from@example.com');
//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com');
//Set who the message is to be sent to
$mail->addAddress('sendto@example.com');
//Set the subject line
$mail->Subject = 'verification';
$mail->Body = 'body text';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
