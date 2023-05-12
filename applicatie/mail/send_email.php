<?php

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'applicatie/mail/PHPMailer-master/src/Exception.php';
require 'applicatie/mail/PHPMailer-master/src/PHPMailer.php';
require 'applicatie/mail/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.transip.email';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@ossovacantion.nl';
    $mail->Password   = 'OssoVacantion2023';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Thx babe voor dit mooie mailtje. UwU';
} catch (Exception $e) {
    echo "Sorry, maar je hebt kanker. Probeer het later nog eens. Mailer Error: {$mail->ErrorInfo}";
}
}

/*     

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $bericht = $_POST['bericht'];

        $to = 'mischalippmann@gmail.com';

        $subject = 'New Contact Form Submission';

        $email_content = "Naam: $naam\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$bericht\n";

        $headers = "From: $naam <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        mail($to, $subject, $email_content, $headers);

        // if (mail($to, $subject, $email_content, $headers)) {
        //     echo "Thx babe voor dit mooie mailtje. UwU";
        // } else {
        //     echo "Sorry, maar je hebt kanker. Probeer het later nog eens";
        // }
    } else {
        header("Location: gondagd.php");
        exit;
    }
?>