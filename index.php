<?php

session_start();

$controller = strtolower($_GET['controller'] ?? 'auth');
$action = $_GET['action'] ?? 'login';

$controllerClass = ucfirst($controller) . "Controller";
$controllerFile = __DIR__ . "/controllers/" . $controllerClass . ".php";

if(!file_exists($controllerFile)){
    die("Controlador no encontrado: " . $controllerFile);
}

require_once $controllerFile;

if(!class_exists($controllerClass)){
    die("La clase no existe: " . $controllerClass);
}

$obj = new $controllerClass();

if(method_exists($obj, $action)){
    $obj->$action();
}else{
    die("Acción no existe: " . $action);
}
?>