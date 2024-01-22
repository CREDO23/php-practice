<?php

namespace core;


class Router
{

    protected $routes = [];


    public function get($uri, $controller)
    {

        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {

        $this->add('POST', $uri, $controller);
    }

    public function put($uri, $controller)
    {

        $this->add('PUT', $uri, $controller);
    }

    public function patch($uri, $controller)
    {

        $this->add('PATCH', $uri, $controller);
    }

    public function delete($uri, $controller)
    {

        $this->add('DELETE', $uri, $controller);
    }


    /**
     * A helper method that helps to add new routes
     * 
     * @param string $method The name of the method
     * @param string $uri The uri
     * @param string $controller The controller file name
     * 
     * @return null
     */
    protected function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    /**
     * A function that finds the corresponding controller to
     * a given uri and method.
     * 
     * @param string $uri The uri to find the controller
     * @param string $method The method
     * 
     * @return mixed The controller's path.
     */
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] == $method) {
                return require  controller($route['controller']);
            }
        }

        abort();
    }
}
