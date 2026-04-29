<?php

require_once __DIR__ . "/../models/Auth.php";
require_once __DIR__ . "/../config/Mailer.php";

class AuthController {

    public function login(){

        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }

        if($_POST){

            $correo = trim($_POST['correo']);
            $password = $_POST['password'];

            $model = new Auth();
            $login = $model->login($correo, $password);

            if($login){

                $_SESSION['user'] = $login['Nombre'];
                $_SESSION['rol'] = trim(strtolower($login['Rol']));

                if($_SESSION['rol'] == 'admin'){
                    header("Location: index.php?controller=admin&action=index");
                    exit;
                }

                if($_SESSION['rol'] == 'empleado'){
                    header("Location: index.php?controller=empleado&action=index");
                    exit;
                }

                header("Location: index.php?controller=cliente&action=index");
                exit;
            }

            $error = "Correo o contraseña incorrecta";
        }

        require_once __DIR__ . "/../views/Auth/login.php";
    }

    public function register(){

        if($_POST){

            $model = new Auth();
            $resultado = $model->register($_POST);

            if(is_array($resultado)){
                $errores = $resultado;
                require_once __DIR__ . "/../views/Auth/register.php";
                return;
            }

            if($resultado === true){
                header("Location: index.php?controller=auth&action=login");
                exit;
            }
        }

        require_once __DIR__ . "/../views/Auth/register.php";
    }

    public function logout(){

        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }

        session_destroy();

        header("Location: index.php?controller=auth&action=login");
        exit;
    }

    public function forgotPassword(){

        if($_POST){

            $correo = trim($_POST['correo']);

            $model = new Auth();
            $user = $model->buscarPorCorreo($correo);

            if($user){

                $token = bin2hex(random_bytes(50));
                $model->guardarToken($correo, $token);

                $msg = "Revisa tu correo para recuperar la contraseña";
                $msg .= "<br><small>Link: index.php?controller=auth&action=resetPassword&token=".$token."</small>";

                Mailer::enviar($correo, "Recuperación de contraseña", $msg);

            } else {
                $msg = "Correo no registrado";
            }
        }

        require_once __DIR__ . "/../views/Auth/forgot_password.php";
    }

    public function recuperar(){

        if($_POST){

            $correo = trim($_POST['correo']);

            $model = new Auth();
            $user = $model->buscarPorCorreo($correo);

            if($user){

                $token = bin2hex(random_bytes(50));
                $model->guardarToken($correo, $token);

                $msg = "Revisa tu correo para recuperar la contraseña";
                $msg .= "<br><small><a href='index.php?controller=auth&action=resetPassword&token=".$token."'>Link: index.php?controller=auth&action=resetPassword&token=".$token."</a></small>";
                Mailer::enviar($correo, "Recuperación de contraseña", $msg);
            } else {
                $msg = "Correo no registrado";
            }
        }

        require_once __DIR__ . "/../views/Auth/forgot_password.php";
    }

    public function resetPassword(){

        if(isset($_GET['token'])){

            $model = new Auth();

            if(!$model->validarToken($_GET['token'])){
                echo "Token inválido o expirado";
                return;
            }

            require_once __DIR__ . "/../views/Auth/reset_password.php";

        } else {
            echo "Token inválido";
        }
    }

    public function guardarNuevaPassword(){

        if($_POST){

            $token = $_POST['token'];
            $password = $_POST['password'];

            if(strlen($password) < 6){
                echo "La contraseña debe tener mínimo 6 caracteres";
                return;
            }

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $model = new Auth();

            if($model->actualizarPassword($token, $passwordHash)){
                echo "Contraseña actualizada correctamente";
            } else {
                echo "Error al actualizar contraseña";
            }
        }
    }
}
?>