<?php

session_start();
ob_start();

require_once 'library/meekrodb.2.3.class.php';
DB::$user = 'roy';
DB::$dbName = "Intranet";

$username = $_POST['username'];
$userlevel = $_POST['userlevel'];
$group = $_POST['group'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$currentUserQuery = DB::queryFirstRow('SELECT * FROM users WHERE username = %s', $_SESSION['username']);
$adminIdQuery = DB::queryFirstRow('SELECT * FROM user_levels WHERE name = %s', 'Administrator');

$userLevelQuery = DB::queryFirstRow('SELECT * FROM user_levels WHERE name = %s', $userlevel);
$groupsQuery = DB::queryFirstRow('SELECT * FROM groups WHERE name = %s', $group);

if (isset($currentUserQuery['user_level_id']) && $currentUserQuery['user_level_id'] == $adminIdQuery['id']) {
    DB::insert('users', array(
        'username' => $username,
        'password' => $hash,
        'group_id' => $groupsQuery['id'],
        'user_level_id' => $userLevelQuery['id']
    ));

    header('Location: newUser.php');
} else {
    echo "Alleen toegestaan voor administrators!";
}

?>
