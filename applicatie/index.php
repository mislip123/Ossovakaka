<!doctype html>
<html lang="nl">
    <head>
        <title>KiKaKankerVakantie</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="..\Images\logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="CSS\StyleSheet.css">
    </head>
    <body class="ossovakaka">
        <div class="izjen_titel">
            <h class="titel">COUNTDOWN TOT OSSOVACANTION 2.0</h>
        </div>

        <div class="countdown">
            <?php
                // Set the target date and time to count down to
                $eind_datum = "2023-08-07 00:00:00";
                
                // Calculate the remaining time in seconds
                $overige_tijd = strtotime($eind_datum) - time();
                
                // Calculate the remaining time in days, hours, minutes, and seconds
                $overige_dagen = floor($overige_tijd / (60 * 60 * 24));
                $overige_uren = floor(($overige_tijd % (60 * 60 * 24)) / (60 * 60));
                $overige_minuten = floor(($overige_tijd % (60 * 60)) / 60);
                $overige_seconden = $overige_tijd % 60;
                
                // Output the remaining time
                echo "Aftellen tot $eind_datum<br>";
                echo "Tijd resterend: $overige_dagen dagen, $overige_uren uren, $overige_minuten minuten en $overige_seconden seconden";                
            ?>
        </div>
    </body>
</html>