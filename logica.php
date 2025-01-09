<?php
$nombre  = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$genero = $_POST["genero"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logica</title>
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="./css/estiloLogica.css">
</head>
<body>
    <main>
        <div class="box has-background-success"><?= "Nombre: $nombre" ?></div>
        <div class="box has-background-danger"><?= "Apellido: $apellido" ?></div>
        <div class="box has-background-warning"><?= "Telefono: $telefono" ?></div>
        <div class="box has-background-info"><?= "Direccion: $direccion" ?></div>
        <div class="box has-background-dark has-text-white-ter"><?= "Genero: $genero" ?></div>
    </main>
    
</body>
</html>