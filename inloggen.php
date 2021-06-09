<?php

require_once 'app/src/components.php';

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/screen_768px.css">
    <title>Inloggen - VioletView</title>
</head>

<body>
    <header>
        <?= HTML_KLEIN_LOGO ?>
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main>
        <h1>Inloggen</h1>
        <form action="log_in.php" method="POST">
            <ul>
                <li>
                    <label for="gebruikersnaam">Gebruikersnaam*</label>
                    <input type="text" name="gebruikersnaam" id="gebruikersnaam" >
                </li>
                <li>
                    <label for="wachtwoord">Wachtwoord*</label>
                    <input type="text" name="wachtwoord" id="wachtwoord">
                </li>
                <li>
                    <input type="submit" value="Log In" class="button">
                </li>
            </ul>
        </form>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>