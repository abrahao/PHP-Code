<?php

namespace Rotas;

class Router
{

    protected RouteCollection $route_collection;

    public function __construct()
    {
        $this->route_collection = new RouteCollection();
    }

    public function get($pattern, $callback): static
    {
        $this->route_collection->add('get', $pattern, $callback);
        return $this;
    }

    public function dispatch(): void{
        $uri = $_SERVER['REQUEST_URI'];

        echo $this->route_collection->find($uri, 'get')();
    }
}