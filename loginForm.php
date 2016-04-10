<?php

session_start();
ob_start();

require_once 'meekrodb.2.3.class.php';
DB::$user = 'roy';
DB::$dbName = "MicroBlog";

$username = $_POST['username'];
$password = $_POST['password'];

$result = DB::queryFirstRow('SELECT * FROM Credentials WHERE username = %s', $username);
$hash = $result['password'];

if (password_verify($password, $hash)) {
    $_SESSION['loggedin'] = 1;
    header('Location: http://localhost');
} else {
    echo "Login failed";
}

?>