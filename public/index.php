<?php
if (PHP_MAJOR_VERSION < 8.0){
    die("Require PHP version  >= 8");
}

require_once __DIR__ . '/../config/init.php';// подключаем файл с константами
require_once ROOT . '/vendor/autoload.php';


$app = new \PHPFramework\Application();

require_once CONFIG . '/routes.php';

//dump($app->router->getRoutes());

 $app ->run();


// для урока 6
//dump($app->router->getRoutes());
//
//echo call_user_func($app->router->getRoutes()['POST']['/contact']);
// т.е. мы обращаемся к нашеиу массиву routes и по вложенным массивам GET или POST
// ищем значение(callback функцию) по ключу($path )
/*
<form action="post">
    <input type="hidden" name="_method" value="DELETE">
</form>
*/

/** @var string $test */

//var_dump($test);
