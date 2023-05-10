<?php
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

        if (mail($to, $subject, $email_content, $headers)) {
            echo "Thx babe voor dit mooie mailtje. UwU";
        } else {
            echo "Sorry, maar je hebt kanker. Probeer het later nog eens";
        }
    } else {
        header("Location: gondagd.php");
        exit;
    }
?>
