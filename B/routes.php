<?php

$controllers = array(
    'trangchu' => ['home', 'error', 'logout'],
    'menu' => ['index'],
    'table' => ['detail', 'layout'],
    
); 
 if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'trangchu';
    $action = 'error';
}

include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();