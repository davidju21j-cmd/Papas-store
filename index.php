<?php

session_start();

$controller = $_GET['controller'] ?? 'auth';
$action = $_GET['action'] ?? 'login';

$controllerClass = ucfirst($controller)."Controller";
$controllerFile = __DIR__."/controllers/".$controllerClass.".php";

// Cargar controlador
if(file_exists($controllerFile)){
    require_once $controllerFile;
}else{
    die("Controller no encontrado: ".$controllerClass);
}

// Crear objeto controlador
if(!class_exists($controllerClass)){
    die("Clase no encontrada: ".$controllerClass);
}

$controllerObj = new $controllerClass();

// Ejecutar acción
if(method_exists($controllerObj,$action)){
    $controllerObj->$action();
}else{
    die("La acción no existe");
}

?>