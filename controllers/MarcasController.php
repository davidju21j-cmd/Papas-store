<?php
require_once __DIR__."/../models/Marcas.php";

class MarcasController {

    public function index(){
        $modelo = new Marcas();
        $datos = $modelo->getAll();

        require_once __DIR__."/../views/Marcas/listar.php";
    }

    public function crear(){
        $modelo = new Marcas();
        $modelo->save($_POST['Marca']);

        header("Location: index.php?controller=Marcas&action=index");
    }

    public function editar(){
        $modelo = new Marcas();
        $modelo->update($_POST['Id'], $_POST['Marca']);

        header("Location: index.php?controller=Marcas&action=index");
    }

    public function eliminar(){
        $modelo = new Marcas();
        $modelo->delete($_GET['Id']);

        header("Location: index.php?controller=Marcas&action=index");
    }
}