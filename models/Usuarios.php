<?php

require_once __DIR__ . "/../config/db.php";

class Usuarios {

    private $db;

    public function __construct(){
        $this->db = Database::Conectar();
    }

    public function mostrar(){
        $sql = "SELECT * FROM Usuarios";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function update($data){

        if(empty($data['id'])){
            die("ID vacío");
        }

        $errores = [];

        // VALIDACIONES
        if(empty($data['nombre']) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $data['nombre'])){
            $errores[] = "Nombre inválido";
        }

        if(empty($data['apellido']) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $data['apellido'])){
            $errores[] = "Apellido inválido";
        }

        if(empty($data['documento']) || !ctype_digit($data['documento'])){
            $errores[] = "Documento inválido";
        }

        if(empty($data['telefono']) || !ctype_digit($data['telefono'])){
            $errores[] = "Teléfono inválido";
        }

        if(empty($data['correo']) || !filter_var($data['correo'], FILTER_VALIDATE_EMAIL)){
            $errores[] = "Correo inválido";
        }

        if(empty($data['direccion']) || strlen($data['direccion']) < 5){
            $errores[] = "Dirección inválida";
        }

        if(empty($data['rol'])){
            $errores[] = "Rol inválido";
        }

        if(!empty($errores)){
            return $errores;
        }

        $sql = "UPDATE Usuarios SET 
            Nombre='{$data['nombre']}',
            Apellido='{$data['apellido']}',
            Documento='{$data['documento']}',
            Telefono='{$data['telefono']}',
            Correo='{$data['correo']}',
            Direccion='{$data['direccion']}',
            Rol='{$data['rol']}'
        WHERE Id_usuarios={$data['id']}";

        return $this->db->query($sql);
    }

    public function updateConPassword($data){

        if(empty($data['id'])){
            die("ID vacío");
        }

        $errores = [];

        if(empty($data['contrasena']) || strlen($data['contrasena']) < 6){
            $errores[] = "Contraseña mínima 6 caracteres";
        }

        if(!empty($errores)){
            return $errores;
        }

        $password = password_hash($data['contrasena'], PASSWORD_DEFAULT);

        $sql = "UPDATE Usuarios SET 
            Nombre='{$data['nombre']}',
            Apellido='{$data['apellido']}',
            Documento='{$data['documento']}',
            Telefono='{$data['telefono']}',
            Correo='{$data['correo']}',
            Direccion='{$data['direccion']}',
            Rol='{$data['rol']}',
            Contraseña='$password'
        WHERE Id_usuarios={$data['id']}";

        return $this->db->query($sql);
    }

    public function crear($data){

        $errores = [];

        if(empty($data['nombre']) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $data['nombre'])){
            $errores[] = "Nombre inválido";
        }

        if(empty($data['apellido']) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $data['apellido'])){
            $errores[] = "Apellido inválido";
        }

        if(empty($data['documento']) || !ctype_digit($data['documento'])){
            $errores[] = "Documento inválido";
        }

        if(empty($data['telefono']) || !ctype_digit($data['telefono'])){
            $errores[] = "Teléfono inválido";
        }

        if(empty($data['correo']) || !filter_var($data['correo'], FILTER_VALIDATE_EMAIL)){
            $errores[] = "Correo inválido";
        }

        if(empty($data['direccion']) || strlen($data['direccion']) < 5){
            $errores[] = "Dirección inválida";
        }

        if(empty($data['contrasena']) || strlen($data['contrasena']) < 6){
            $errores[] = "Contraseña mínima 6 caracteres";
        }

        if(!empty($errores)){
            return $errores;
        }

        $password = password_hash($data['contrasena'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO Usuarios 
        (Nombre, Apellido, Documento, Telefono, Correo, Direccion, Contraseña, Rol)
        VALUES 
        ('{$data['nombre']}', '{$data['apellido']}', '{$data['documento']}', '{$data['telefono']}', '{$data['correo']}', '{$data['direccion']}', '$password', '{$data['rol']}')";

        return $this->db->query($sql);
    }

    public function eliminar($id){
        return $this->db->query("DELETE FROM Usuarios WHERE Id_usuarios=$id");
    }
}
?>