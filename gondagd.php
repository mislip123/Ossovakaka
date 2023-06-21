<!doctype html>
<html lang="nl">
    <head>
        <title>Ossovacantion</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="..\images\logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="CSS\StyleSheet.css">
    </head>
    <body class="ossovakaka">
        <nav class="topbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="vreetschuur.php">Vreetschuur</a></li>
                <li><a href="planning.php">Planning</a></li>
                <li><a href="broodschappen.php">Broodschappen</a></li>
                <li><a href="poeptaken.php">Poeptaken</a></li>
                <li><a href="dienant.php">Dinand</a></li>
                <li><a href="gondagd.php">Gondagd</a></li>
            </ul>
        </nav>

        <div class="izjen_titel">
            <h class="titel">GONDAGD</h>
        </div>

        <div class="gondagd">
            <form action="..\mail\send_email.php" method="post">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="bericht">Bericht:</label><br>
                <textarea id="bericht" name="bericht" rows="4" required></textarea><br><br>

                <input type="submit" value="Send Email"> 
            </form>
        </div>
    </body>
</html>