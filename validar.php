
<?php
// define variables and set to empty values
$nombreErr = $domicilioErr = $telefonoErr = $correoErr = $comentariosErr = "";
$nombre = $domicilio = $telefono = $correo = $comentarios = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreErr = "El nombre es obligatorio";
  } else {
    $nombre = test_input($_POST["nombre"]);
  }

  if (empty($_POST["domicilio"])) {
    $domicilio = "";
  } else {
    $domicilio = test_input($_POST["domicilio"]);
  }  

    if (empty($_POST["telefono"])) {
    $telefonoErr = "Telefono es obligatorio";
  } else {
    $telefono = test_input($_POST["telefono"]);
  }

  if (empty($_POST["correo"])) {
    $correoErr = "Correo es obligatorio";
  } else {
    $correo = test_input($_POST["correo"]);
  }
    
  if (empty($_POST["comentarios"])) {
    $comentarios = "";
  } else {
    $comentarios = test_input($_POST["comentarios"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!--
echo "<h2>Datos ingresados:</h2>";
echo $nombre;
echo "<br>";
echo $domicilio;
echo "<br>";
echo $telefono;
echo "<br>";
echo $correo;
echo "<br>";
echo $comentarios;
?>
-->
