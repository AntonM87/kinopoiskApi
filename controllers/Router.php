<?php

class Router{
    public array $routes = [];
    protected string $uri = '';
    protected $method;

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'],'/');
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
    public function match():void
    {
        foreach ($this->routes as $route){
            if ( ($route['uri'] == $this->uri) && ($route['method'] == strtoupper($this->method))){
                require $route['controller'];
                return;
            }
        }
        abort(404);
    }
    public function add($uri, $controller, $method):void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];
    }
    public function get($uri, $controller):void
    {
        $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller):void
    {
        $this->add($uri, $controller, 'POST');
    }
    public function delete($uri, $controller):void
    {
        $this->add($uri, $controller, 'DELETE');
    }
}