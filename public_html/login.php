<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inloggen</title>
    <link rel="stylesheet" type="text/css" href="library/pure-min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="content">
    <div class="pure-g">
        <div class="pure-menu pure-menu-horizontal pure-u-1">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a class="pure-menu-link" href="index.php">Terug</a></li>
                <li class="pure-menu-item"><a class="pure-menu-link" href="contact.php">Contact</a></li>
            </ul>
        </div>

        <h2 class="pure-u-1">Inloggen</h2>

        <form class="pure-form pure-u-1" action="loginForm.php" method="post">
            <p>
                <label for="username">Gebruikersnaam:</label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">
            </p>
            <p>
                <a></a>
                <a class="pure-button" href="index.php">Annuleren</a>
                <input class="pure-button" type="submit">
            </p>
        </form>
    </div>
</div>
</body>
</html>