<?php

session_start();
ob_start();

require_once 'library/meekrodb.2.3.class.php';
DB::$user = 'roy';
DB::$dbName = "Intranet";

$taskID = $_POST['task_id'];
$completed = $_POST['completed'];

DB::query('UPDATE tasks SET is_completed=%s WHERE id=%s', $completed, $taskID);

?>
