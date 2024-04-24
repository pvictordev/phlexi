<?php

class Router
{
    protected $routes = [];

    public function get($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }
    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }
    public function delete($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE'
        ];
    }
    public function patch($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }
    public function put($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }
    public function route($uri, $method, $db)
    {
        // function routeToController($uri, $routes, $db)
        // {
        //     if (array_key_exists($uri, $routes)) {
        //         // if user is unauth he will not be able to access these routes
        //         if (in_array($uri, ['/profile', '/market'])) {
        //             isAuth();
        //         }
        //         require base_path($routes[$uri]);
        //     } else {
        //         abort();
        //     }
        // }
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                if (in_array($uri, ['/profile', '/market'])) {
                    isAuth();
                }
                return require base_path($route['controller']);
            }
        }
        // otherwise abort
        abort();
    }
}
