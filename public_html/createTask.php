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

$username = $_SESSION['username'];
$userID = DB::queryFirstRow('SELECT * FROM users WHERE username = %s', $username)['id'];
?>
<div class="site-container">
	<div class="pure-g">
		<div class="pure-menu pure-menu-horizontal pure-u-1">
			<ul class="pure-menu-list">
				<li class="pure-menu-item"><a class="pure-menu-link" href="tasks.php">Terug</a></li>
			</ul>
		</div>

		<h2 class="pure-u-1">Taak aanmaken</h2>

		<form class="pure-form pure-u-1" action="createTaskForm.php" method="post">
			<p>
				<label for="taskname">Taak</label>
				<input type="text" name="taskname" id="taskname">
			</p>
			<p>
				<label for="description">Beschrijving</label>
				<textarea type="text" name="description" id="description" cols="30" rows="6"></textarea>
			</p>
			<p>
				<a></a>
				<a class="pure-button" href="tasks.php">Annuleren</a>
				<input class="pure-button" type="submit" value="Aanmaken">
			</p>
		</form>
	</div>
</div>
</body>
</html>