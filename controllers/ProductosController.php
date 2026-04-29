<?php
require_once __DIR__."/../models/Productos.php";

class ProductosController{

    public function index(){

        $Productos = new Productos();

        $datos = $Productos->mostrar();
        $marcas = $Productos->getMarcas();
        $categorias = $Productos->getCategorias();
        $tallas = $Productos->getTallas();

        $errores = [];

        require_once __DIR__."/../views/Productos/listar.php";
    }

    public function crear(){

        $errores = [];

        if($_POST){

            $nombre = trim($_POST['Nombre']);
            $precio = trim($_POST['Precio']);

            // VALIDACIONES BÁSICAS (las tuyas)
            if(empty($nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $nombre)){
                $errores['Nombre'] = "❌ Nombre inválido (solo letras)";
            }

            if(empty($precio) || !preg_match("/^[0-9]+$/", $precio)){
                $errores['Precio'] = "❌ Precio inválido (solo números)";
            }

            if(!empty($errores)){
                $Productos = new Productos();

                $datos = $Productos->mostrar();
                $marcas = $Productos->getMarcas();
                $categorias = $Productos->getCategorias();
                $tallas = $Productos->getTallas();

                require_once __DIR__."/../views/Productos/listar.php";
                return;
            }

            $Productos = new Productos();

            $resultado = $Productos->save(
                $nombre,
                $precio,
                $_POST['Id_marca'],
                $_POST['Id_categoria'],
                $_POST['Id_talla'],
                $_POST['Id_proveedor'],
                $_POST['Id_inventario'],
                $_POST['Id_detalle_producto']
            );

            // CAPTURAR ERRORES DEL MODELO
            if(is_array($resultado)){
                $errores = $resultado;

                $datos = $Productos->mostrar();
                $marcas = $Productos->getMarcas();
                $categorias = $Productos->getCategorias();
                $tallas = $Productos->getTallas();

                require_once __DIR__."/../views/Productos/listar.php";
                return;
            }

            header("Location: index.php?controller=Productos&action=index");
            exit();
        }
    }

    public function editar(){

        $errores = [];

        if($_POST){

            $nombre = trim($_POST['Nombre']);
            $precio = trim($_POST['Precio']);

            if(empty($nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $nombre)){
                $errores['Nombre'] = "❌ Nombre inválido (solo letras)";
            }

            if(empty($precio) || !preg_match("/^[0-9]+$/", $precio)){
                $errores['Precio'] = "❌ Precio inválido (solo números)";
            }

            if(!empty($errores)){
                $Productos = new Productos();

                $datos = $Productos->mostrar();
                $marcas = $Productos->getMarcas();
                $categorias = $Productos->getCategorias();
                $tallas = $Productos->getTallas();

                require_once __DIR__."/../views/Productos/listar.php";
                return;
            }

            $Productos = new Productos();

            $resultado = $Productos->update(
                $_POST['Id'],
                $nombre,
                $precio,
                $_POST['Id_marca'],
                $_POST['Id_categoria'],
                $_POST['Id_talla'],
                $_POST['Id_proveedor'],
                $_POST['Id_inventario'],
                $_POST['Id_detalle_producto']
            );

            // CAPTURAR ERRORES DEL MODELO
            if(is_array($resultado)){
                $errores = $resultado;

                $datos = $Productos->mostrar();
                $marcas = $Productos->getMarcas();
                $categorias = $Productos->getCategorias();
                $tallas = $Productos->getTallas();

                require_once __DIR__."/../views/Productos/listar.php";
                return;
            }

            header("Location: index.php?controller=Productos&action=index");
            exit();
        }
    }

    public function eliminar(){

        if(isset($_GET['Id'])){
            $Productos = new Productos();
            $Productos->delete($_GET['Id']);
        }

        header("Location: index.php?controller=Productos&action=index");
        exit();
    }
}
?>