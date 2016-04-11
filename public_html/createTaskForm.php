<?php

session_start();
ob_start();

require_once 'library/meekrodb.2.3.class.php';
DB::$user = 'roy';
DB::$dbName = "Intranet";

$taskname = $_POST['taskname'];
$description = $_POST['description'];

$currentUserQuery = DB::queryFirstRow('SELECT * FROM users WHERE username = %s', $_SESSION['username']);

DB::insert('tasks', array(
	'name' => $taskname,
	'description' => $description,
	'is_completed' => false,
	'creator_id' => $currentUserQuery['id']
));

header('Location: tasks.php');

?>
