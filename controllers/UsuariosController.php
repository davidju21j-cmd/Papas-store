<?php

require_once __DIR__."/../models/Usuarios.php";

class UsuariosController{
    public function index(){
        $Usuarios=new Usuarios();
        $datos=$Usuarios->mostrar();

        require_once __DIR__."/../views/Usuarios/listar.php";
    }

    public function crear(){
        if($_POST){
            $Usuarios=new Usuarios();
            $U=$Usuarios->save(
                $_POST['Nombre'],
                $_POST['Apellido'],
                $_POST['Documento'],
                $_POST['Telefono'],
                $_POST['Correo'],
                $_POST['Direccion']
            );
            header("Location: index.php");
        }
        require __DIR__. "/../views/Usuarios/crear.php";
    }

    public function editar(){
        $Usuarios=new Usuarios();
        if($_POST){
            $U=$Usuarios->update(
                $_POST['Nombre'],
                $_POST['Apellido'],
                $_POST['Documento'],
                $_POST['Telefono'],
                $_POST['Correo'],
                $_POST['Direccion']
            );
            header("Location: index.php");
        }

        $datos=$Usuarios->GetByid($_GET['Id']);
        require_once __DIR__."/../views/Usuarios/editar.php";
    }

    public function eliminar(){
        $Usuarios=new Usuarios();
        $U=$Usuarios->delete($_GET['Id']);
        header("Location: index.php");
    }

}

?>