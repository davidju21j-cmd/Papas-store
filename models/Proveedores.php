<?php

require_once __DIR__ . "/../config/db.php";

class Proveedores {

    private $db;

    public function __construct(){
        $this->db = Database::Conectar();
    }

    public function mostrar(){
        $sql = "SELECT * FROM proveedores";
        $result = $this->db->query($sql);
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function save($nombre,$telefono,$correo,$direccion,$Id_producto,$contacto){

        $errores = [];

        if(empty($nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $nombre)){
            $errores[] = "Nombre inválido";
        }

        if(empty($telefono) || !preg_match("/^[0-9]+$/", $telefono)){
            $errores[] = "Teléfono inválido";
        }

        if(empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores[] = "Correo inválido";
        }

        if(empty($direccion)){
            $errores[] = "Dirección obligatoria";
        }

        if(empty($contacto) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $contacto)){
            $errores[] = "Contacto inválido";
        }

        if(empty($Id_producto) || !ctype_digit((string)$Id_producto)){
            $errores[] = "Producto inválido";
        }

        if(!empty($errores)){
            return $errores;
        }

        $Id_producto = (int)$Id_producto;

        $stmt = $this->db->prepare("INSERT INTO proveedores
        (nombre, telefono, correo, dirección, Id_producto, contacto)
        VALUES (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param(
            "ssssis",
            $nombre,
            $telefono,
            $correo,
            $direccion,
            $Id_producto,
            $contacto
        );

        return $stmt->execute();
    }

    public function update($Id,$nombre,$telefono,$correo,$direccion,$Id_producto,$contacto){

        $errores = [];

        if(empty($nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $nombre)){
            $errores[] = "Nombre inválido";
        }

        if(empty($telefono) || !preg_match("/^[0-9]+$/", $telefono)){
            $errores[] = "Teléfono inválido";
        }

        if(empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores[] = "Correo inválido";
        }

        if(empty($direccion)){
            $errores[] = "Dirección obligatoria";
        }

        if(empty($contacto) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $contacto)){
            $errores[] = "Contacto inválido";
        }

        if(empty($Id_producto) || !ctype_digit((string)$Id_producto)){
            $errores[] = "Producto inválido";
        }

        if(!empty($errores)){
            return $errores;
        }

        $Id = (int)$Id;
        $Id_producto = (int)$Id_producto;

        $stmt = $this->db->prepare("UPDATE proveedores SET
            nombre=?,
            telefono=?,
            correo=?,
            dirección=?,
            Id_producto=?,
            contacto=?
            WHERE Id_proveedores=?");

        $stmt->bind_param(
            "ssssisi",
            $nombre,
            $telefono,
            $correo,
            $direccion,
            $Id_producto,
            $contacto,
            $Id
        );

        return $stmt->execute();
    }

    public function delete($Id){
        $Id = (int)$Id;
        return $this->db->query("DELETE FROM proveedores WHERE Id_proveedores=$Id");
    }
}
?>