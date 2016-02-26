<?php

if(isset($_POST['submit'])){
if(empty($_POST['name'])){ die("Necesitas introducir tu nombre."); }
if(empty($_POST['email'])){ die("Necesitas introducir tu E-Mail."); }
if(empty($_POST['tel'])){ die("Necesitas introducir un teléfono de contacto (Opcional llenar en ceros)."); }
if(empty($_POST['message'])){ die("Necesitas enviar un mensaje."); }
}

$email = 'izignamx@gmail.com';
$subject = "Ha recibido mensaje de " . $_POST['name'] . " en su formulario Hispano WEB "
//$mensaje.= '<html><head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"></head><body style="background-color: #eee;margin-top: -20px;">';
//$mensaje.= "<div class='col-md-6 col-xs-12' style='height: 153.25px;'><img title='Made by Izigna Mx, Full-Stack Edgar Zorrilla' alt='Izigna.mx Agencia Digital' src='../img/izignamx-agencia-digital.png' class='col-md-3 col-xs-2' style='max-width: 100%;margin: 10px auto;display:block;' />";
//$mensaje.= "<p class='col-md-9 col-xs-10' style='text-align:left;font-size:2rem;margin: 35px auto 0px;'>Env&iacute;o autom&aacute;tico de formularios<br /><small>Izigna Mx</small></p> <br /></div>";
//$mensaje.= "<div class='col-md-6 col-xs-12' style='background-color:salmon;height: 153.25px;'><img title='Hispano Fashion Film Festival' class='col-md-3 col-xs-2' alt='Hispano Fashion Film Festival' src='../img/logo.png' style='margin: 10px auto;clear: both;max-width: 100%;max-height: 115px;display:block;' />";
//$mensaje.= "<p class='col-md-9 col-xs-10' style='text-align:left;font-size:1.5rem;margin: 35px auto 0px;color:#000;'>Hispano Fashion Film Festival</p><br /></div>";
//$mensaje.= "<div class='col-md-6 col-xs-12' style='background-color: #e2e2e2;clear: both;padding: 30px 0px;'><h3 class='col-md-12' style='text-align:center;clear:both;color:#fff;margin:0 auto;'>Datos de Formulario</h3><br /></div>";
//$mensaje.= "<div class='col-md-12'><hr style='margin: 5px auto;'> <br /></div><p class='col-md-12' style='text-align:left;width:100%;padding: 0px 50px;'>";
$mensaje.= "Nombre:    ".$_POST['name']."\n<br />";
$mensaje.= "Correo:    ".$_POST['email']."\n<br />";
$mensaje.= "Tel&eacute;fono:  ".$_POST['tel']."\n<br />";
$mensaje.= "Fecha:     ".date("d/m/Y")."\n<br />";
$mensaje.= "Hora:      ".date("h:i:s a")."\n<br />";
//$mensaje.= "IP:        ".$_SERVER['REMOTE_ADDR']."\n\n<br />";
$mensaje.= "</p><hr> <br />";
$mensaje.= "<p class='col-md-12' style='text-align:left;width:100%;padding: 0px 20px;'>" . $_POST['message'] . "</p><br />";
$mensaje.= "<hr> <br />";
$mensaje.= '</body></html>';

$headers= "From: " . $_POST['email'] . "\r\n";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";

mail($email, $subject, $mensaje, $headers);

echo"<script>alert('Su mensaje fue enviado'); javascript:window.history.back();</script>";

?>