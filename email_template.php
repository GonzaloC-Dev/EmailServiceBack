<?php
$FullName = "Juan Perez";
$BuisnessName = "NombreEmpresa";
$contactTellphone = "8112345678";
$emailTo = "gonzalo_cantu_t@hotmail.com";
$emailFrom = "gonzalo_cantu_t@hotmail.com";

ini_set('display_errors', 1);
error_reporting(E_ALL);
$to = $emailTo; // Email address of the recipient
$subject = "Interesado"; // Subject of the email
$message = `Hola me llamó ${FullName}, la empresa ${BuisnessName} esta interesado en tu 
producto y te dejo un numero para llamarle que este es ${contactTellphone} de otro modo si 
quiere contactarlo via correo este es ${emailFrom}`; // Body of the email
$from = $emailFrom; // Email address of the sender
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>