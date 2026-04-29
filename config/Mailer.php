<?php


require_once __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Mailer {

    public static function enviar($destino, $asunto, $mensaje) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'davidju21j@gmail.com';
            $mail->Password   = 'qejr sxdr bkzw xtxf';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('davidju21j@gmail.com', 'Paspas Store');
            $mail->addAddress($destino);

            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body    = $mensaje;

            $mail->send();
            return true;

        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
    }
}