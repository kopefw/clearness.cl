<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$para = 'administracion@clearness.cl';
$titulo = 'Contacto Clearness.cl';
$header = 'De: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Telefono: $telefono\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
	echo "<script language='javascript'> window.location.href = 'http://www.clearness.cl' </script>";
	} else {
		echo 'Falló el envio';
	}
}else{
	echo 'Falló el envio';
}

echo $_POST['submit'];
?>