<?php

require_once __DIR__ . "/../models/Usuarios.php";

class AdminController{

    public function index(){
        require_once __DIR__."/../views/Admin/index.php";
    }

    public function usuarios(){

        $Usuarios = new Usuarios();
        $datos = $Usuarios->mostrar();

        require_once __DIR__."/../views/Admin/usuarios-admin.php";
    }

    // conecta tus otras vistas
    public function productos(){
        require_once __DIR__."/../views/Admin/productos-admin.php";
    }

    public function inventario(){
        require_once __DIR__."/../views/Admin/inventario-admin.php";
    }

    public function pedidos(){
        require_once __DIR__."/../views/Admin/pedidos-admin.php";
    }

    public function clientes(){
        require_once __DIR__."/../views/Admin/cliente-admin.php";
    }

    public function proveedores(){
        require_once __DIR__."/../views/Admin/proveedores-admin.php";
    }

    public function reportes(){
        require_once __DIR__."/../views/Admin/reportes-admin.php";
    }

    public function configuracion(){
        require_once __DIR__."/../views/Admin/configuracion-admin.php";
    }
}
?>