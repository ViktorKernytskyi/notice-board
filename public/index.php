<?php


//require_once '../core/Router.php';
require_once (__DIR__ . '/app/models/Post.php');

//require_once '../app/controllers/PostsController.php';
require_once __DIR__ . '/app/controllers/PostsController.php';

echo "hello word";
$router = new Router();

// Додавання маршрутів
$router->add('', function() {
    $controller = new PostsController();
    $controller->index();
});

// інші маршрути

$router->dispatch($_SERVER['QUERY_STRING']);