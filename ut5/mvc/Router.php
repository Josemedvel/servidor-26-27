<?php
class Router{
    public array $routes = [];
    
    public function addRoute(string $method, string $pattern, callable $handler){
        $routes[$method][] = ["pattern" => $pattern, "handler" => $handler];
    }
}
