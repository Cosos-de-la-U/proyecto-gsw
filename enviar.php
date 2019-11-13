<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$nombre=$_POST["name"];
$correo=$_POST["email"];
$mensaje=$_POST["message"];
$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;

/// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pupusasvirtuales@gmail.com';                     // SMTP username
    $mail->Password   = 'lasPupusas123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('pupusasvirtuales@gmail.com', 'Pupusas Virtuales');     // Add a recipient
    $mail->addAddress('pupusasvirtuales@gmail.com', 'Pupusas Virtuales');

    //$mail->setFrom('pupusasvirtuales@gmail.com', 'Pupusas Virtuales');
    //$mail->addAddress($correo, $nombre);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Pupusas Virtuales';
    $mail->Body    =  $contenido;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>