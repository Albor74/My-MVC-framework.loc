<?php
if (PHP_MAJOR_VERSION < 8.0){
    die("Require PHP version  >= 8");
}

require_once __DIR__ . '/../config/init.php';// подключаем файл с константами


require_once ROOT . '/vendor/autoload.php';


//new \PHPFramework\Test();