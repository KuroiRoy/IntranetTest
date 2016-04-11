<?php

session_start();
ob_start();

require_once 'library/meekrodb.2.3.class.php';
DB::$user = 'roy';
DB::$dbName = "Intranet";

$taskname = $_POST['taskname'];
$description = $_POST['description'];

$currentUserQuery = DB::queryFirstRow('SELECT * FROM users WHERE username = %s', $_SESSION['username']);
$userID = $currentUserQuery['id'];

DB::insert('tasks', array(
	'name' => $taskname,
	'description' => $description,
	'is_completed' => false,
	'creator_id' => $currentUserQuery['id']
));

$taskID = DB::insertId();

DB::insert('link_user_task', array(
	'user_id' => $userID,
	'task_id' => $taskID
));

header('Location: tasks.php');

?>
