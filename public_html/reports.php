<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="library/pure-min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
	<title>Verslagen</title>
</head>
<body>
<?php
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
}
?>

<div class="site-container">
	<div class="pure-menu pure-menu-horizontal">
		<ul class="pure-menu-list">
			<li class="pure-menu-item"><a href="tasks.php" class="pure-menu-link">Taken</a></li>
			<li class="pure-menu-item"><a href="reports.php" class="pure-menu-link pure-menu-selected">Verslagen</a></li>
			<li class="pure-menu-item"><a href="chat.php" class="pure-menu-link">Chat</a></li>
			<li class="pure-menu-item"><a class="pure-menu-link" href="logout.php"> <?php echo '['.$_SESSION['username'].']' ?> Uitloggen</a></li>
		</ul>
	</div>
</div>
</body>
</html>