<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) 
        && !empty($_POST['email'])) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $asunto = $_POST['asunto'];
        $email = $_POST['email'];
        $cuerpo = $nombre . ' ' . $apellido . "\r\n";
        $cuerpo .= $email . "\r\n" ;
        $cuerpo .= $_POST['mensaje'];
        $destino = "mcferrocroce@gmail.com";
        $header = "From: " . $email . "\r\n";
        $header.= "Reply-To: " . $email . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        mail($destino,$asunto,$cuerpo,$header);
    }
}
?>