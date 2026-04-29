<?php

require_once __DIR__ . "/../config/db.php";

class Auth {

    private $db;

    public function __construct(){
        $this->db = Database::Conectar();
    }

    public function login($correo, $password){

        if(empty($correo) || empty($password)){
            return false;
        }

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            return false;
        }

        $correo = $this->db->real_escape_string($correo);

        $sql = "SELECT * FROM Usuarios WHERE Correo='$correo'";
        $result = $this->db->query($sql);

        if($result && $result->num_rows > 0){

            $user = $result->fetch_assoc();

            if(password_verify($password, $user['Contraseña'])){
                return $user;
            }
        }

        return false;
    }

    public function register($data){

        $errores = [];

        $nombre = trim($data['nombre'] ?? '');
        $apellido = trim($data['apellido'] ?? '');
        $documento = trim($data['documento'] ?? '');
        $telefono = trim($data['telefono'] ?? '');
        $correo = trim($data['correo'] ?? '');
        $direccion = trim($data['direccion'] ?? '');
        $password = $data['password'] ?? null;

        // VALIDACIONES COMPLETAS

        if(empty($nombre) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $nombre)){
            $errores[] = "Nombre inválido (solo letras)";
        }

        if(empty($apellido) || !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $apellido)){
            $errores[] = "Apellido inválido (solo letras)";
        }

        if(empty($documento) || !ctype_digit($documento)){
            $errores[] = "Documento inválido (solo números)";
        }

        if(empty($telefono) || !ctype_digit($telefono)){
            $errores[] = "Teléfono inválido (solo números)";
        }

        if(empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores[] = "Correo inválido";
        }

        if(empty($direccion) || strlen($direccion) < 5){
            $errores[] = "Dirección inválida";
        }

        if(empty($password) || strlen($password) < 6){
            $errores[] = "Contraseña mínima 6 caracteres";
        }

        if(!empty($errores)){
            return $errores;
        }

        // DUPLICADOS 
        $checkSql = "SELECT * FROM Usuarios 
                     WHERE Correo='$correo' 
                     OR Telefono='$telefono'
                     OR Documento='$documento'";

        $checkResult = $this->db->query($checkSql);

        if($checkResult && $checkResult->num_rows > 0){

            while($user = $checkResult->fetch_assoc()){

                if($user['Correo'] == $correo){
                    return ["Correo ya registrado"];
                }

                if($user['Telefono'] == $telefono){
                    return ["Teléfono ya registrado"];
                }

                if($user['Documento'] == $documento){
                    return ["Documento ya registrado"];
                }
            }
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Usuarios 
        (Nombre, Apellido, Documento, Telefono, Correo, Direccion, Contraseña, Rol)
        VALUES 
        ('$nombre','$apellido','$documento','$telefono','$correo','$direccion','$passwordHash','cliente')";

        return $this->db->query($sql);
    }

    public function buscarPorCorreo($correo){
        $correo = $this->db->real_escape_string($correo);
        $sql = "SELECT * FROM Usuarios WHERE Correo='$correo'";
        $result = $this->db->query($sql);
        return $result && $result->num_rows > 0 ? $result->fetch_assoc() : null;
    }

    public function guardarToken($correo, $token){
        $correo = $this->db->real_escape_string($correo);
        $token = $this->db->real_escape_string($token);
        $sql = "UPDATE Usuarios SET token='$token', token_expiracion=DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE Correo='$correo'";
        return $this->db->query($sql);
    }

    public function validarToken($token){
        $token = $this->db->real_escape_string($token);
        $sql = "SELECT * FROM Usuarios WHERE token='$token' AND token_expiracion > NOW()";
        $result = $this->db->query($sql);
        return $result && $result->num_rows > 0 ? $result->fetch_assoc() : null;
    }

    public function actualizarPassword($token, $passwordHash){
        $token = $this->db->real_escape_string($token);
        $passwordHash = $this->db->real_escape_string($passwordHash);
        $sql = "UPDATE Usuarios SET Contraseña='$passwordHash', token=NULL, token_expiracion=NULL WHERE token='$token'";
        return $this->db->query($sql);
    }
   public function resetPassword(){
        $_GET['token'] = $this->db->real_escape_string($_GET['token']);
        $token = $this->db->real_escape_string($token);
        $sql = "SELECT * FROM Usuarios WHERE token='$token' AND token_expiracion > NOW()";
        $result = $this->db->query($sql);
        return $result && $result->num_rows > 0 ? $result->fetch_assoc() : null;
    }
}
?>