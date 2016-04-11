<?php

session_start();
ob_start();

require_once 'library/meekrodb.2.3.class.php';
DB::$user = 'roy';
DB::$dbName = "Intranet";

$taskID = $_POST['task_id'];
$task = DB::queryFirstRow('SELECT * FROM tasks WHERE id = %s', $taskID);
$taskname = $task['name'];
$description = $task['description'];
$isCompleted = $task['is_completed'];
$creator = DB::queryFirstRow('SELECT * FROM users WHERE id = %s', $task['creator_id']);

?>

<div class="pure-g">
	<div class="pure-u-1">
		<h3 class="task-title"> <?php echo $taskname ?> </h3>
	</div>
	<div class="pure-u-1">
		<p class="task-description"> <?php echo $description ?> </p>
	</div>
	<div class="pure-u-1-2 task-creator">
		Aangemaakt door: <?php echo $creator['username'] ?>
	</div>
	<div class="pure-u-1-2">
		<div class="task-checkbox">
			<label for="complete">Voltooid</label>
			<input type="checkbox" name="complete" onchange="completeTask( this, <?php echo $taskID ?> )"
				<?php
				echo 'complete: ' . $isCompleted;
					if ($isCompleted == 1) {
						?>
							checked
						<?php
					}
				?>
			>
		</div>
	</div>
</div>