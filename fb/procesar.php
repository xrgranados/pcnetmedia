<?php
$fecha=date("d-m-Y");
$hora=date("H:i:s");
$destino="info@inet.com.gt";
$asunto="Informacion";
$desde= "PcNet Media";
$comentario = "
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Comentario: $_POST[comentario]\n
Enviado: $fecha a las $hora\n
\n
";
mail($destino, $asunto, $comentario, $desde);
echo 'se ha enviadeo el mensajes';
header ("Location: http://www.inet.com.gt/pcnet/contactus.php");
?>