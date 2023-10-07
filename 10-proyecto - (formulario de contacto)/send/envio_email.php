<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

function enviarCorreo($nombre, $email, $asunto, $mensaje)
{

    try {
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0; // Habilitar salida de depuración detallada
        $mail->isSMTP(); // Enviar usando SMTP
        $mail->Host = 'smtp.gmail.com'; // Configuramos el servidor SMTP para enviar
        $mail->SMTPAuth = true; // Habilitar la autenticación SMTP
        $mail->Username = ''; // Correo para loguearnos
        $mail->Password = ''; // Password para loguearnos
        $mail->SMTPSecure = 'tls'; // configurando PHPMailer para una conexión segura mediante TLS/SSL
        $mail->Port = 587; // Puerto TCP al que conectarse

        $mail->setFrom('desde@gmail.com', 'Dani'); // Nombre Remitente
        $mail->addAddress('para@gmail.com', 'Dani'); // Correo a donde lo queremos enviar
        $mail->isHTML(true); // Establecer el formato de correo electrónico en HTML
        $mail->Subject = $asunto; // Asunto del correo electronico
        $mail->Body = "$nombre <br> $email <br> $mensaje"; // Cuerpo del correo electronico

        $mail->send(); // Enviar correo electronico
        return true;
    } catch (Exception $e) {
        return false;
    }
}
