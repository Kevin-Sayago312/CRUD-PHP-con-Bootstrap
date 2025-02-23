<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$dbname = "unidad4";

// CREAR CONEXION
$conexion = new mysqli($servidor, $usuario, $password, $dbname);

if($conexion->connect_error){
    die ("Falló la conexion: ". $conexion->connect_error);
}

//echo "La conexion se realizo con exito";

//$conexion -> close();


?>