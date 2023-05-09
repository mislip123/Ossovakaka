<!doctype html>
<html lang="nl">
    <head>
        <title>Ossovacantion</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="..\images\logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="CSS\StyleSheet.css">
    </head>
    <body class="padvinders">
        <div class="izjen_titel">
            <h class="titel">COUNTDOWN TOT TSJECHIË</h>
        </div>

        <div id="countdown" class="countdown">
            Aftellen tot 2023-07-24<br>
            Tijd resterend: 0 dagen, 0 uren, 0 minuten en 0 seconden
        </div>

        <script>
            function updateCountdownPadvinders() {
                var eind_datum = new Date("2023-07-24 00:00:00");
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

                    document.getElementById("countdown").innerHTML = "Aftellen tot 2023-07-24<br>" +
                        "Tijd resterend: " + dagen + " dagen, " + uren + " uren, " + minuten + " minuten en " + seconden + " seconden";
                }
            }

            updateCountdownPadvinders();

            var intervalId = setInterval(updateCountdownPadvinders, 1000);
        </script>
    </body>
</html>