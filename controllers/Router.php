<?php

class Router{
    public array $routes = [];
    protected string $url = '';
    protected mixed $method;

    public function __construct()
    {
        $this->url = trim(parse_url($_SERVER['REQUEST_URI'])['path'],'/');
        $this->method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
    }
    public function matchRoute():void
    {
        foreach ($this->routes as $route){
            if ( ($route['url'] == $this->url) && ($route['method'] == strtoupper($this->method))){
                require $route['controllers'];
                return;
            }
        }
        abort(404);
    }
    public function add($url, $controller, $method):void
    {
        $this->routes[] = [
            'url' => $url,
            'controllers' => $controller,
            'method' => $method,
        ];
    }
    public function get($url, $controller):void
    {
        $this->add($url, $controller, 'GET');
    }
    public function post($url, $controller):void
    {
        $this->add($url, $controller, 'POST');
    }
    public function delete($url, $controller):void
    {
        $this->add($url, $controller, 'DELETE');
    }
}