<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="library/pure-min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <title>Taken</title>
</head>
<body>
<?php
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
}
?>

<div class="content">
    <div class="pure-menu pure-menu-horizontal">
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="tasks.php" class="pure-menu-link pure-menu-selected">Taken</a></li>
            <li class="pure-menu-item"><a href="reports.php" class="pure-menu-link">Verslagen</a></li>
            <li class="pure-menu-item"><a href="chat.php" class="pure-menu-link">Chat</a></li>
            <li class="pure-menu-item"><a class="pure-menu-link" href="logout.php">Uitloggen</a></li>
        </ul>
    </div>

    <div class="pure-g">
        <div class="pure-u-4-5">
            <form class="pure-form" action="postForm.php" method="post">
                <TextArea name="microBlog" id="microBlog" rows="10"></TextArea>
                </br>
                <input type="submit" class="pure-button">
            </form>
        </div>
    </div>

    <?php
    //    if (isset($_SESSION['loggedin'])) {
    //        echo '<form class="pure-form" action="postForm.php" method="post">
    //                <TextArea name="microBlog" id="microBlog" cols="30" rows="10"></TextArea>
    //                </br>
    //                <input type="submit" class="pure-button">
    //              </form>';
    //    }
    //
    //    require_once 'meekrodb.2.3.class.php';
    //    DB::$user = 'roy';
    //    // DB::$password = 'root';
    //    DB::$dbName = 'microblog';
    //    $results = DB::query("SELECT post FROM MicroBlog");
    //    foreach ($results as $row) {
    //        echo "<div class='microBlog'>" . $row['post'] . "</div>";
    //    }
    ?>
</div>
</body>
</html>