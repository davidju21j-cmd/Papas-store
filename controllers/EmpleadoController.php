<?php

class EmpleadoController{

    public function index(){

        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }

        if(!isset($_SESSION['user'])){
            header("Location: index.php?controller=auth&action=login");
            exit;
        }
         require_once __DIR__."/../views/Empleado/index.php";
    }

}
?>