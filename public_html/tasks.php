<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="library/pure-min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
	<title>Taken</title>

	<script src="library/jquery-2.2.3.min.js"></script>
</head>
<body>
<?php
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
}

require_once 'library/meekrodb.2.3.class.php';
DB::$user = 'roy';
DB::$dbName = "Intranet";

$userID = DB::queryFirstRow('SELECT * FROM users WHERE username = %s', $_SESSION['username'])['id'];
$tasksIDs = DB::query('SELECT * FROM link_user_task WHERE user_id = %s', $userID);
$tasks = DB::query('SELECT * FROM tasks task INNER JOIN link_user_task link ON task.id=link.task_id WHERE link.user_id=%s', $userID);
?>

<script>
	function openTask (task_id) {
		$.ajax({
			url: "openTask.php",
			type: "POST",
			data: {task_id:task_id},
			success:function(result){
				$("#task").html(result);
			}
		});
	}

	function completeTask (checkbox, task_id) {
		completed = checkbox.checked ? 1 : 0;
		console.log(completed + " " + checkbox.checked);
		$.ajax({
			url: "completeTask.php",
			type: "POST",
			data: {task_id:task_id, completed:completed},
			success:function(){
				openTask(task_id);
			}
		});
	}
</script>

<div class="site-container">
	<div class="pure-menu pure-menu-horizontal">
		<ul class="pure-menu-list">
			<li class="pure-menu-item"><a href="tasks.php" class="pure-menu-link pure-menu-selected">Taken</a></li>
			<li class="pure-menu-item"><a href="reports.php" class="pure-menu-link">Verslagen</a></li>
			<li class="pure-menu-item"><a href="chat.php" class="pure-menu-link">Chat</a></li>
			<li class="pure-menu-item"><a class="pure-menu-link" href="logout.php"> <?php echo '[' . $_SESSION['username'] . ']' ?> Uitloggen</a></li>
		</ul>
	</div>

	<div class="pure-menu pure-menu-horizontal" style="padding-top: 10px">
		<ul class="pure-menu-list">
			<li class="pure-menu-item"><a href="createTask.php" class="pure-menu-link pure-button create-task-button">Taak aanmaken</a></li>
		</ul>
	</div>

	<div class="pure-g task-container">
		<div class="pure-u-1-5 task-sidebar">
			<div class="pure-menu">
				<span class="pure-menu-heading">Taken</span>
				<ul class="pure-menu-list">
					<?php
					foreach ($tasks as $task) {
						?>
							<li class="pure-menu-item task-sidebar-item">
								<button type="button" onclick="openTask( <?php echo $task['id'] ?> )"> <?php echo $task['name'] ?> </button>
							</li>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
		<div class="pure-u-4-5 task" id="task">

		</div>
	</div>
</div>
</body>
</html>