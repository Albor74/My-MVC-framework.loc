<?php

namespace PHPFramework;

class Response
{
    public function setResponceCod(int $code): void
    {
        http_response_code($code);
    }

}