<?php

namespace PHPFramework;

class Request
{
    public string $uri;
    public function __construct(string $uri)
    {
        $this->uri = trim(urldecode($uri), '/');
    }

    public function getPath():string
    {
        return $this->uri;
    }

    public function getMethod():string
    {
        /*$methods = ['DELETE', 'PUT', 'PATCH'];
        if (isset($_POST['_method']) && in_array($_POST['_method'], $methods)) {
            return $_POST['_method'];
        }*/
        return strtoupper($_SERVER['REQUEST_METHOD']); // GET POST
    }
}