<?php

class AdminController{

    public function index(){

        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }

        if(!isset($_SESSION['user']) || $_SESSION['rol'] != 'admin'){
            header("Location: index.php?controller=auth&action=login");
            exit;
        }

        echo "Panel Administrador";
    }

}
?>