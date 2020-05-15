<?php
namespace Mvc;
class  Router
{
	protected $routes = [];
	protected $params = [];
    public function __construct()
    {
        $arr = require 'routes.php';
        foreach ($arr as $key => $val) {
        	$this -> add($key, $val);
        } 
    }

     public function add($route, $params)
    {
      	$route = '#^'.$route.'$#';
      	$this->routes[$route] = $params;
    }

     public function match()
     	$url = $_SERVER['REQUEST_URI']
    {
        
    }

     public function run()
    {
        $this->match();
        //echo 'start';
    }
}

