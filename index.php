<?php

require 'dev.php';
require 'Router.php';

spl_autoload_register(function ($class){
    $path = str_replace('\\','/', $class);
    echo $path;
    if (file_exists($path)){
        require $path;
    }
});
$router = new Router;