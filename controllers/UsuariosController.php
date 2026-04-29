<?php

require_once __DIR__."/../models/Usuarios.php";

class UsuariosController{

    public function editar(){

        $Usuarios = new Usuarios();

        if($_POST){

            if(!empty($_POST['contrasena'])){
                $resultado = $Usuarios->updateConPassword($_POST);
            } else {
                $resultado = $Usuarios->update($_POST);
            }

            if(is_array($resultado)){
                // aquí podrías manejar errores si quieres
                return;
            }

            header("Location: index.php?controller=admin&action=usuarios");
            exit;
        }
    }

    public function crear(){

        if($_POST){

            $Usuarios = new Usuarios();

            $resultado = $Usuarios->crear($_POST);

            if(is_array($resultado)){
                // manejar errores si quieres
                return;
            }

            header("Location: index.php?controller=admin&action=usuarios");
            exit;
        }
    }

    public function eliminar(){
        $Usuarios = new Usuarios();
        $Usuarios->eliminar($_GET['Id']);
        header("Location: index.php?controller=admin&action=usuarios");
    }
}
?>