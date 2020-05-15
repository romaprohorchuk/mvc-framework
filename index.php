<?php
use Mvc\Router;
use Mvc\Db;

require 'dev.php';
//require 'Router.php';


spl_autoload_register(function ($class){
    $path = str_replace('\\','/', $class);
    $path = str_replace('Mvc', realpath(__DIR__), $path);
    $path = $path.".php";
    echo $path."</br>";
    if (file_exists($path)){
        require $path;
    }
});

session_start();

$router = new Router;
$db = new Db;
$router->method();
