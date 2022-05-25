<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Restaurante Tritón</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	color: #33C;
}
a:hover {
	color: #0CF;
}
a:visited {
	color: #306;
}
a:active {
	color: #09F;
}
-->
</style></head>

<body>
<div id="central_principal">
  <div id="logo"><img src="imagenes/logo.png" width="343" height="341" /></div>
  <div id="contenido_contacto">
  <div id="contacto_form">
  
<?php
$envio = $_POST["envio"];

if($envio == 99)
	{
		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
		$telefono = $_POST["telefono"];
		$comentarios = $_POST["comentarios"];
		
		$cabeceras = "From: $email";
		$destino = "restaurantetriton@yahoo.com.mx";
		$asunto = "comentario desde la página Restaurante Triton";
		
		$mensaje = "Mensaje de $nombre \r\n\nTelefono: $telefono \r\n $comentarios";
		
		if(mail ($destino, $asunto, $mensaje, $cabeceras))
		{
			echo "<h1>Agradecemos sus comentarios.</h1>";
			echo "<input type=\"button\" onClick=\"document.location = 'index.html'\" value=\"Regresar al Menú\" />";
		}
		else
			echo "ERROR: No se pudo enviar el mensaje";
	}
else
	{
		?>
    <form name="contacto_form" method="post" action="contactanos.php">
      <table width="100%" border="0">
        <tr>
          <td width="54%">
          <input name="nombre" type="text" class="inserta_texto" id="nombre" border="0"/>
            <label>
          		<input name="email" type="text" class="inserta_texto" id="email" />
        	</label>
            <label>
          		<input name="telefono" type="text" class="inserta_texto" id="telefono" />
        	</label>
            <label>
              <textarea name="comentarios" cols="45" class="inserta_comentario" id="textarea">Comentarios: </textarea>
        	</label>
          </td>
          <td width="46%"><label>
            <input name="button" type="submit" class="enviar_comentario" id="button" value="Enviar" />
          </label></td>
        </tr>
      </table>
      <input name="envio" type="hidden" value="99" />
    </form>
    <?php } ?>
  </div>
  </div>
</div>


</body>
</html>
