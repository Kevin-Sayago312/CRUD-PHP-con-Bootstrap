<?php

$directorio = "uploads/";
$archivo = basename($_FILES["img"]["name"]);
$cargaOk = 1;


$tipoimg = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["img"]["name"]);
  if($check !== false) {
    echo "Es una imagen - " . $check["mime"] . ".";
    $cargaOk = 1;
  } else {
    echo " <p> No es una imagen </p>";
    $cargaOk = 0;
  }
}

// CODIGO PARA VER SI LA IMAGEN YA EXISTE
if (file_exists($archivo)){
    echo "<p> ¡La imagen ya existe!</p>";
    $cargaOk = 0;
}

// CODIGO PARA CARGAR LA IMAGEN
if ($cargaOk==1){
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $archivo)){
        echo "<p> La imagen se cargo correctamente </p>";
    }
    move_uploaded_file($_FILES["img"]["tmp_name"], $directorio.$archivo);
}


?>