<?php
if (PHP_MAJOR_VERSION < 8.0){
    die("Require PHP version  >= 8");
}

require_once __DIR__ . '/../config/init.php';// подключаем файл с константами
require_once ROOT . '/vendor/autoload.php';


$app = new \PHPFramework\Application();
require_once CONFIG . '/routes.php';


//dump($app->router->getRoutes());
//
//echo call_user_func($app->router->getRoutes()['POST']['/contact']);// т.е. мы обращаемся к нашеиу массиву GET
