<?php

define('BASE_PATH', __DIR__);
define('BASE_URL', 'http://localhost/simple-blog');
define('ASSETS_PATH', BASE_URL . '/assets');
define('CSS_PATH', ASSETS_PATH . '/css');
define('CONTROLLERS_PATH', BASE_PATH . '/controllers');
define('VIEWS_PATH', BASE_PATH . '/views');
define('PARTIALS_PATH', VIEWS_PATH . '/partials');


return [
    'host' => 'localhost',
    'port' => '3306',
    'db' => 'simple_blog',
    'user' => 'root',
    'pass' => '',
    'charset' => 'utf8mb4',
];