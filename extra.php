<!-- función conectar -->
<?php
$HOSTNAME = "localhost";//SERVIDOR
$USERNAME = "root";		//USUARIO
$PASSWORD = "";		//CONTRASEÑA que escribiste en la instalación
$DATABASE = "form";	//BASE DE DATOS

$ENLACE=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

//$res=mysql_query("Select * id, nombre, domicilio, telefono, correo, comentarios, fecha FROM clientes")or die(mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=“utf-8”>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulario</title>
<style type="text/css">
@import url("design.css");
.red {color: #FF0000;}
</style>
<script defer src="script.js"></script>
</head>
<body>
<div class="header">
  <h1>Sitio Web de Montserrat</h1>
</div>
<ul> 
  <li><a href="index.html">Inicio</a></li>
  <li><a class="active" href="extra.php" >Contáctame</a></li>
</ul>
<div class="spacebar"></div>
<div class="page">
 <!-- Titulo del form --> 
<h2>Formulario</h2>
<p>Hola, porfavor compartanos sus comentarios para ayudarnos a mejorar nuestro sitio.</p>

<!--'id', 'nombre', 'domicilio', 'telefono', 'correo', 'comentarios', 'fecha'-->

<!-- FORMULARIO -->
<div class="red" id="error"></div>
<form id="form" action="#" name="form" method="POST" onsubmit="return confirmalerta();">
<p>
Nombre*: <input type="text" name="nombre" id="nombre" required><br><br>  <!-- VARCHAR -->
Dirección*: <input type="text" name="domicilio" id="domicilio" required><br><br>
Telefono*: <input type="number" placeholder="00-0000-0000" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" name="telefono" id="telefono" required><br><br>
Correo*: <input type="email" name="correo" id="correo" placeholder="example@es.com" required></span><br><br>
Comentario: <textarea name="comentarios" rows="5" cols="40"></textarea><br><br>
</p>
<input type="submit" name="registro" value="Enviar" > 
<!-- JAVASCRIPT VALIDAR -->
<script languaje="javascript">
  //var cadena1="\tHola mundo";
  //alert(cadena2);
</script>


<?php 
if (isset($_POST['registro'])){
  $nombre = $_POST['nombre'];
  $domicilio = $_POST['domicilio'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $comentarios = $_POST['comentarios'];

  $insertarDatos= "INSERT INTO clientes VALUES('', '$nombre', '$domicilio', '$telefono', '$correo', '$comentarios', CURRENT_TIMESTAMP)";

  $ejecutarInsertar=mysqli_query($ENLACE, $insertarDatos);
}
?>


</form>
</div>

<!-- Footer -->
<div class="spacebar"></div>
<footer>
    <h3>@2024 Montserrat Almodovar Ruvalcaba</h3>
</footer>
</body>
</html>