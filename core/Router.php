<?php


class Router
{
    protected $routes = [];

    public function add($route, $action) {
        $this->routes[$route] = $action;
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url]();
        }
        // Обробка неіснуючого маршруту
    }
}