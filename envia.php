<?php
$remitente = $_POST['email'];
$destinatario = 'contacto@grupoavile.com.mx,cto.grupo.avile@gmail.com,direccion.grupo.avile@gmail.com,juridicointegral1@hotmail.com'; // en esta l&Atilde;&shy;nea va el mail del destinatario.
$asunto = 'Solicitud Información Administración Grupo Avile'; // aca se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Telefono: " . $_POST["telefono"] . "\r\n";
    $cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
    //las l&Atilde;&shy;neas de arriba definen el contenido del mail. Las palabras que est&Atilde;&iexcl;n dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo ac&Atilde;&iexcl;.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirma.html'; //se debe crear un html que confirma el env&Atilde;&shy;o
}
?>
