<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// La creación de instancias y pasar `true` habilita las excepciones 
$mail = new PHPMailer(true);

try {
	  $mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
	);
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '72866529@continental.edu.pe';                     // SMTP username
    $mail->Password   = '72866529J';                               // SMTP password
    $mail->SMTPSecure =  'tls';          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('72866529@continental.edu.pe', 'jhonny');
    $mail->addAddress('jhonny.lopez7.jlp@gmail.com');     // Add a recipient
  
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'nueva actualizacion de los cursos';
    $mail->Body    = 'actualizacion de nuevos videos gracias';
    
    $mail->send();
    echo 'mensaje enviado';
} catch (Exception $e) {
    echo 'mensaje de Error: ', $mail->ErrorInfo;
}
?>