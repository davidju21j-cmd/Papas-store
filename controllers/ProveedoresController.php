<?php
require_once __DIR__."/../models/Proveedores.php";

class ProveedoresController{

    public function index(){

        $Proveedores = new Proveedores();

        $datos = $Proveedores->mostrar();

        $errores = [];

        require_once __DIR__."/../views/Admin/proveedores-admin.php";
    }

    public function crear(){

        $errores = [];

        if($_POST){

            $nombre = trim($_POST['nombre']);
            $telefono = trim($_POST['telefono']);
            $correo = trim($_POST['correo']);
            $direccion = trim($_POST['direccion']);

            // VALIDACIONES
            if(empty($nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $nombre)){
                $errores['nombre'] = "❌ Nombre inválido";
            }

            if(empty($telefono) || !preg_match("/^[0-9]+$/", $telefono)){
                $errores['telefono'] = "❌ Teléfono inválido";
            }

            if(empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores['correo'] = "❌ Correo inválido";
            }

            if(empty($direccion)){
                $errores['direccion'] = "❌ Dirección obligatoria";
            }

            if(!empty($errores)){
                $Proveedores = new Proveedores();
                $datos = $Proveedores->mostrar();

                require_once __DIR__."/../views/Admin/proveedores-admin.php";
                return;
            }

            $Proveedores = new Proveedores();

            $resultado = $Proveedores->save(
                $nombre,
                $telefono,
                $correo,
                $direccion,
                $_POST['Id_producto']
            );

            if(is_array($resultado)){
                $errores = $resultado;
                $datos = $Proveedores->mostrar();

                require_once __DIR__."/../views/Admin/proveedores-admin.php";
                return;
            }

            header("Location: index.php?controller=Proveedores&action=index");
            exit();
        }
    }

    public function editar(){

        $errores = [];

        if($_POST){

            $nombre = trim($_POST['nombre']);
            $telefono = trim($_POST['telefono']);
            $correo = trim($_POST['correo']);
            $direccion = trim($_POST['direccion']);

            if(empty($nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $nombre)){
                $errores['nombre'] = "❌ Nombre inválido";
            }

            if(empty($telefono) || !preg_match("/^[0-9]+$/", $telefono)){
                $errores['telefono'] = "❌ Teléfono inválido";
            }

            if(empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores['correo'] = "❌ Correo inválido";
            }

            if(empty($direccion)){
                $errores['direccion'] = "❌ Dirección obligatoria";
            }

            if(!empty($errores)){
                $Proveedores = new Proveedores();
                $datos = $Proveedores->mostrar();

                require_once __DIR__."/../views/Admin/proveedores-admin.php";
                return;
            }

            $Proveedores = new Proveedores();

            $resultado = $Proveedores->update(
                $_POST['Id'],
                $nombre,
                $telefono,
                $correo,
                $direccion,
                $_POST['Id_producto']
            );

            if(is_array($resultado)){
                $errores = $resultado;
                $datos = $Proveedores->mostrar();

                require_once __DIR__."/../views/Admin/proveedores-admin.php";
                return;
            }

            header("Location: index.php?controller=Proveedores&action=index");
            exit();
        }
    }

    public function eliminar(){

        if(isset($_GET['Id'])){
            $Proveedores = new Proveedores();
            $Proveedores->delete($_GET['Id']);
        }

        header("Location: index.php?controller=Proveedores&action=index");
        exit();
    }
}
?>