<?php

require_once 'meekrodb.2.3.class.php';
DB::$user = 'roy';
// DB::$password = 'bla';
DB::$dbName = 'microblog';

DB::debugMode();

$microBlog = $_POST['microBlog'];

DB::insert('microblog', array(
        'post' => $microBlog)
);

header('Location: http://localhost')

?>
