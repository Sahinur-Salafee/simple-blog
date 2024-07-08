<?php

$config = require dirname(__DIR__) . '/config.php';
require PARTIALS_PATH . '/header.php';
require VIEWS_PATH . '/create.view.php';
require PARTIALS_PATH . '/footer.php';

require '../Database.php';

$db = new Database($config);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // INSERT INTO `posts` (`id`, `title`, `description`, `user_id`) VALUES (NULL, 'this is another post for john.', 'johns another posts.', '1');

    $query = "INSERT INTO posts (title, description, user_id) VALUES (:title, :description, :user_id)";

    // execute the query
    $db->query($query, [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'user_id' => 2,
    ]);

    echo 'Post created successfully';
}