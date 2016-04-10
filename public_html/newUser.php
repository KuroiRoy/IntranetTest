<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gebruiker aanmaken</title>
    <link rel="stylesheet" type="text/css" href="library/pure-min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
require_once 'library/meekrodb.2.3.class.php';
DB::$user = 'roy';
DB::$dbName = "Intranet";

$userLevels = DB::query('SELECT * FROM user_levels');
$groups = DB::query('SELECT * FROM groups');
?>
<div class="site-container">
    <div class="pure-g">
        <div class="pure-menu pure-menu-horizontal pure-u-1">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a class="pure-menu-link" href="index.php">Home</a></li>
            </ul>
        </div>

        <h2 class="pure-u-1">Gebruiker aanmaken</h2>

        <form class="pure-form pure-u-1" action="newUserForm.php" method="post">
            <p>
                <label for="username">Gebruikersnaam:</label>
                <input type="text" name="username" id="username">
            </p>

            <p>
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">
            </p>

            <p>
                <label for="userlevel">Gebruikersniveau:</label>
                <select name="userlevel">
                    <?php foreach ($userLevels as $option) { ?>
                        <option value=<?php echo $option['name'] ?>>
                            <?php
                            echo $option['name'];
                            ?>
                        </option>
                    <?php } ?>
                </select>
                <!--                <input type="text" name="userlevel" id="userlevel">-->
            </p>
            <p>
                <label for="group">Groep:</label>
                <select name="group">
                    <?php foreach ($groups as $option) { ?>
                        <option value=<?php echo $option['name'] ?>>
                            <?php
                            echo $option['name'];
                            ?>
                        </option>
                    <?php } ?>
                </select>
                <!--                <label for="group">Groep:</label>-->
                <!--                <input type="text" name="group" id="group">-->
            </p>
            <p>
                <a></a>
                <a class="pure-button" href="newUser.php">Annuleren</a>
                <input class="pure-button" type="submit">
            </p>
        </form>
    </div>
</div>
</body>
</html>