<?php

$HOSTNAME = "localhost";//SERVIDOR
$USERNAME = "root";		//USUARIO
$PASSWORD = "";		//CONTRASEÑA que escribiste en la instalación
$DATABASE = "mar000928_db";	//BASE DE DATOS

$ENLACE=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
//var_dump($_SERVER["REQUEST_METHOD"]);
/*if (isset($_POST["submit"])){} Another way of doing it, looking for the submit type named submit*/
//titulo descrip nom_autor imagen 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //htmlspecialchars() function to grab data from users safely
    $titulo = $_POST["titulo"];
    $descrip = $_POST["descrip"];
    $nom_autor = $_POST["nom_autor"];
    $imagen = $_POST["imagen"];
    //htmlentities() for security too
    echo "Creación de una publicación";
    echo "<br>";
    echo $titulo;
    echo "<br>";
    echo $descrip;
    echo "<br>";
    echo $nom_autor;
    echo "<br>";
    echo $imagen;
    //A veces escribo en inglés, bueno 
    //https://www.youtube.com/watch?v=bOqTCDfc7Tk&t=13s
    $insertarDatos= "INSERT INTO articulo VALUES('$titulo', '$descrip', '$nom_autor', '$imagen', CURRENT_TIMESTAMP)";

    $ejecutarInsertar=mysqli_query($ENLACE, $insertarDatos);
  
}

