<?php
namespace Rotas;

class RouteCollection {

    private $routes = [];
    public function add(string $method, string $pattern, callable $callback): void
    {
        $method = strtolower($method);
        $this->isValidMethod($method);
        $this->routes[$method][$pattern] = $callback;
    }

    private function isValidMethod(string $method): void
    {
        if (in_array($method,['get'], true) === false ){
            throw new \RuntimeException('Invalid method');
        }
    }

    public function find(mixed $uri, string $method): callable
    {
        $method = strtolower($method);
        $this->isValidMethod($method);
        if (in_array($uri, array_keys($this->routes[$method]), true) === false) {
            throw new \RuntimeException('URI not found for method ' . $method);
        }
        return $this->routes[$method][$uri];
    }
}