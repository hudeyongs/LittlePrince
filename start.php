<?php

// 识别控制器和方法

$query_string_arr = explode('&', $_SERVER['QUERY_STRING']) ?: die('参数错误');

$controller = substr($query_string_arr[0], 2);

$action = substr($query_string_arr[1], 2);

$param = substr($query_string_arr[2], 2);


include 'controller/' . $controller . '.php';


// 依次执行路由中间件
$middleware = include('kernel.php');

$routeMiddleware = $middleware['routeMiddleware'];

$rm = array_reduce($routeMiddleware, function($stack, $item){
	
});

$rm();

(new $controller)->$action($param);
