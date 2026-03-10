<?php

class Router
{
    public array $routes = [];
    protected string $uri;
    protected string $method;

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $this->method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
    }

    public function match()
    {
        $matches = false;
        foreach ($this->routes as $route)
        {
            if (($route['uri'] == $this->uri) && ($route['method'] == strtoupper($this->method))) {
                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;
            }
        }
        if (!$matches) {
            abort();
        }
    }

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => '',
        ];
        return $this;
    }

    public function only($middleware)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $middleware;
        return $this;
    }

    public function get($uri, $controller)
    {
       return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE1');
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }
}