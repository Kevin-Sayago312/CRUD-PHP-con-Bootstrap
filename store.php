<?php
    require('conexion.php');
    require ('carga.php');

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];
    $img = $archivo;

    $insert = $conexion -> prepare("INSERT INTO productos(nombre, descripcion, precio, existencia, img) VALUES (?, ?, ?, ?, ?)");

    $insert -> bind_param("ssdis", $nombre, $descripcion, $precio, $existencia, $archivo);

    // INSERT
    $insert->execute();
    header ("location: index.php");

    //CERRAMOS LAS CONEXIONES
    $insert->close();
    $conexion->close();
?>