<?php

require_once __DIR__ . "/../config/db.php";

class Productos {

    private $db;

    public function __construct(){
        $this->db = Database::Conectar();
    }

    //  MOSTRAR PRODUCTOS
    public function mostrar(){

        $sql = "SELECT 
                    p.*,
                    m.Marca AS Marcas,
                    c.Categorias AS Categorias,
                    t.Talla AS Tallas
                FROM productos p
                LEFT JOIN marcas m ON p.Id_marca = m.Id_marca
                LEFT JOIN categorias c ON p.Id_categoria = c.Id_categoria
                LEFT JOIN tallas t ON p.Id_talla = t.Id_talla";

        $result = $this->db->query($sql);

        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    //  CREAR PRODUCTO
    public function save($Nombre,$Precio,$Id_marca,$Id_categoria,$Id_talla,$Id_proveedor,$Id_inventario,$Id_detalle_producto){

        $errores = [];

        // VALIDACIONES
        if(empty($Nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ0-9 ]+$/", $Nombre)){
            $errores[] = "Nombre inválido (solo letras y números)";
        }

        if(empty($Precio) || !ctype_digit(str_replace('.', '', $Precio))){
            $errores[] = "Precio inválido (solo números)";
        }

        if(empty($Id_marca) || !ctype_digit((string)$Id_marca)){
            $errores[] = "Marca inválida";
        }

        if(empty($Id_categoria) || !ctype_digit((string)$Id_categoria)){
            $errores[] = "Categoría inválida";
        }

        if(empty($Id_talla) || !ctype_digit((string)$Id_talla)){
            $errores[] = "Talla inválida";
        }

        if(empty($Id_proveedor) || !ctype_digit((string)$Id_proveedor)){
            $errores[] = "Proveedor inválido";
        }

        if(empty($Id_inventario) || !ctype_digit((string)$Id_inventario)){
            $errores[] = "Inventario inválido";
        }

        if(empty($Id_detalle_producto) || !ctype_digit((string)$Id_detalle_producto)){
            $errores[] = "Detalle producto inválido";
        }

        if(!empty($errores)){
            return $errores;
        }

        // limpiar precio (por si viene con puntos)
        $Precio = str_replace('.', '', $Precio);

        // convertir a enteros
        $Id_marca = (int)$Id_marca;
        $Id_categoria = (int)$Id_categoria;
        $Id_talla = (int)$Id_talla;
        $Id_proveedor = (int)$Id_proveedor;
        $Id_inventario = (int)$Id_inventario;
        $Id_detalle_producto = (int)$Id_detalle_producto;

        $stmt = $this->db->prepare("INSERT INTO productos 
        (Nombre, Precio, Id_marca, Id_categoria, Id_talla, Id_proveedor, Id_inventario, Id_detalle_producto)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param(
            "siiiiiii",
            $Nombre,
            $Precio,
            $Id_marca,
            $Id_categoria,
            $Id_talla,
            $Id_proveedor,
            $Id_inventario,
            $Id_detalle_producto
        );

        return $stmt->execute();
    }

    //  ACTUALIZAR PRODUCTO
    public function update($Id,$Nombre,$Precio,$Id_marca,$Id_categoria,$Id_talla,$Id_proveedor,$Id_inventario,$Id_detalle_producto){

        $errores = [];

        // VALIDACIONES
        if(empty($Nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ0-9 ]+$/", $Nombre)){
            $errores[] = "Nombre inválido (solo letras y números)";
        }

        if(empty($Precio) || !ctype_digit(str_replace('.', '', $Precio))){
            $errores[] = "Precio inválido (solo números)";
        }

        if(empty($Id_marca) || !ctype_digit((string)$Id_marca)){
            $errores[] = "Marca inválida";
        }

        if(empty($Id_categoria) || !ctype_digit((string)$Id_categoria)){
            $errores[] = "Categoría inválida";
        }

        if(empty($Id_talla) || !ctype_digit((string)$Id_talla)){
            $errores[] = "Talla inválida";
        }

        if(empty($Id_proveedor) || !ctype_digit((string)$Id_proveedor)){
            $errores[] = "Proveedor inválido";
        }

        if(empty($Id_inventario) || !ctype_digit((string)$Id_inventario)){
            $errores[] = "Inventario inválido";
        }

        if(empty($Id_detalle_producto) || !ctype_digit((string)$Id_detalle_producto)){
            $errores[] = "Detalle producto inválido";
        }

        if(!empty($errores)){
            return $errores;
        }

        $Precio = str_replace('.', '', $Precio);

        $Id = (int)$Id;
        $Id_marca = (int)$Id_marca;
        $Id_categoria = (int)$Id_categoria;
        $Id_talla = (int)$Id_talla;
        $Id_proveedor = (int)$Id_proveedor;
        $Id_inventario = (int)$Id_inventario;
        $Id_detalle_producto = (int)$Id_detalle_producto;

        $stmt = $this->db->prepare("UPDATE productos SET
            Nombre=?,
            Precio=?,
            Id_marca=?,
            Id_categoria=?,
            Id_talla=?,
            Id_proveedor=?,
            Id_inventario=?,
            Id_detalle_producto=?
            WHERE Id_producto=?");

        $stmt->bind_param(
            "siiiiiiii",
            $Nombre,
            $Precio,
            $Id_marca,
            $Id_categoria,
            $Id_talla,
            $Id_proveedor,
            $Id_inventario,
            $Id_detalle_producto,
            $Id
        );

        return $stmt->execute();
    }

    // 🗑 ELIMINAR PRODUCTO
    public function delete($Id){
        $Id = (int)$Id;
        return $this->db->query("DELETE FROM productos WHERE Id_producto=$Id");
    }

    //  LISTAR MARCAS
    public function getMarcas(){
        $result = $this->db->query("SELECT * FROM marcas");
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    //  LISTAR CATEGORÍAS
    public function getCategorias(){
        $result = $this->db->query("SELECT * FROM categorias");
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    //  LISTAR TALLAS
    public function getTallas(){
        $result = $this->db->query("SELECT * FROM tallas");
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }
}
?>