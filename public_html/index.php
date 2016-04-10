<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="library/pure-min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <title>Microblogging Site</title>
</head>
<body>
<?php
if (isset($_SESSION['loggedin'])) {
    header('Location: tasks.php');
}
?>

<div class="site-container">
    <div class="pure-g">
        <div class="pure-menu pure-menu-horizontal pure-u-1">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a class="pure-menu-link" href="login.php">Inloggen</a></li>
                <li class="pure-menu-item"><a class="pure-menu-link" href="contact.php">Contact</a></li>
            </ul>
        </div>

        <h4 class="pure-u-1">Welkom op het intranet van 'Bedrijf'</h4>

        <p class="pure-u-1">Log in met de knop hierboven of neem contact op met de servicedesk via het contact
            formulier</p>

        <?php
        //
        //    if (isset($_SESSION['loggedin'])) {
        //        echo '<form class="pure-form" action="postForm.php" method="post">
        //                <TextArea name="microBlog" id="microBlog" cols="30" rows="10"></TextArea>
        //                </br>
        //                <input type="submit" class="pure-button">
        //              </form>';
        //    }
        //
        //    require_once 'library/meekrodb.2.3.class.php';
        //    DB::$user = 'roy';
        //    // DB::$password = 'root';
        //    DB::$dbName = 'microblog';
        //    $results = DB::query("SELECT post FROM MicroBlog");
        //    foreach ($results as $row) {
        //        echo "<div class='microBlog'>" . $row['post'] . "</div>";
        //    }
        ?>
    </div>
</div>
</body>
</html>
