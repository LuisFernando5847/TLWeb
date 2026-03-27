<?php

ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.toplabel.com.mx'; // Cambia esto por tu servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'ti@toplabel.com.mx'; // Cambia esto por tu usuario SMTP
        $mail->Password = 'Jqaz&N*3mE$C'; // Cambia esto por tu contraseña SMTP    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración de codificación
        $mail->CharSet = 'UTF-8'; // Muy importante para acentos y eñes
        $mail->Encoding = 'base64'; // Evita problemas con caracteres especiales

        // Configuración del correo
        $mail->setFrom($email);
        $mail->addAddress('sistemas4@toplabel.com.mx'); // Cambia esto por el correo del destinatario
        $mail->Subject = 'Nuevo mensaje de contacto';
        $mail->Body = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email\nMensaje: $mensaje";

        // Enviar el correo
        $mail->send();      
        // despues de enviar el correo y mostrar el mensaje de exito, redirige al usuario a la pagina de contacto
        echo "<script>setTimeout(function(){ window.location.href = 'contacto.php'; },);</script>";
        echo "<script>mostraralerta();</script>";
        // se limpian los campos del formulario despues de enviar el correo
        echo "<script>document.querySelector('.form-contact').reset();</script>";
    
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}
?>