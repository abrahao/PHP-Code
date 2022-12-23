<?php

namespace Src;

class RouteCollection
{
    protected $routes_post = [];
    protected $routes_get = [];
    protected $routes_put = [];
    protected $routes_delete = [];


    public function add($request_type, $pattern, $callback)
    {
        switch ($request_type) {
            case 'post':
                return $this->addPost($pattern, $callback);
            break;
            case 'get':
                return $this->addGet($pattern, $callback);
            break;
            case 'put':
                return $this->addPut($pattern, $callback);
            break;
            case 'delete':
                return $this->addDelete($pattern, $callback);
            break;
                defautl:
                throw new \Exception('Tipo de requisição não implementado');
        }
    }

    public function where($request_type, $pattern)
    {

        switch ($request_type) {
            case 'post':
                return $this->findPost($pattern);
                break;
            case 'get':
                return $this->findGet($pattern);
                break;
            case 'put':
                return $this->findPut($pattern);
                break;
            case 'delete':
                return $this->findDelete($pattern);
                break;
            default:
                throw new \Exception('Tipo de requisição não implementado');
        }
    }
    protected function parseUri($uri)
    {

        return implode('/', array_filter(explode('/', $uri)));
    }


    protected function definePattern($pattern)
    {

        $pattern = implode('/', array_filter(explode('/', $pattern)));
        return '/^' . str_replace('/', '\/', $pattern) . '$/';
    }

    protected function addPost($pattern, $callback)
    {
    }

    protected function addGet($pattern, $callback)
    {
    }

    protected function addPut($pattern, $callback)
    {
    }

    protected function addDelete($pattern, $callback)
    {
    }
}
