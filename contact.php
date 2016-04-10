<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="styles/pure/pure-min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<div class="content contact">
    <h2>Contact formulier</h2>

    <form class="pure-form contact-form" action="contactForm.php" method="post">
        <p>
            <label for="name">Naam:</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="email">Emailadres:</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label></label>
            <TextArea class="message" name="message" id="message" cols="50" rows="10"></TextArea>
        </p>
        <p>
            <a></a>
            <a class="pure-button" href="index.php">Annuleren</a>
            <input class="pure-button" type="submit">
        </p>
    </form>
</div>
</body>
</html>