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

        <div id="countdown" class="countdown">
            Aftellen tot 2023-08-07 00:00:00<br>
            Tijd resterend: 0 dagen, 0 uren, 0 minuten en 0 seconden
        </div>

        <script>
            function updateCountdownOssovacantion() {
                var eind_datum = new Date("2023-08-07 00:00:00");
                var nu = new Date();
                var overige_tijd = eind_datum - nu;

                if (overige_tijd <= 0) {
                    clearInterval(intervalId);
                    document.getElementById("countdown").innerHTML = "De countdown is voorbij!";
                } else {
                    var dagen = Math.floor(overige_tijd / (1000 * 60 * 60 * 24));
                    var uren = Math.floor((overige_tijd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minuten = Math.floor((overige_tijd % (1000 * 60 * 60)) / (1000 * 60));
                    var seconden = Math.floor((overige_tijd % (1000 * 60)) / 1000);

                    document.getElementById("countdown").innerHTML = "Aftellen tot 2023-08-07 00:00:00<br>" +
                        "Tijd resterend: " + dagen + " dagen, " + uren + " uren, " + minuten + " minuten en " + seconden + " seconden";
                }
            }

            updateCountdownOssovacantion();

            var intervalId = setInterval(updateCountdown, 1000);
        </script>
    </body>
</html>
