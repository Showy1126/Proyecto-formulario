<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Este es el index</title>
    <link rel="stylesheet" href="./css/estiloIndex.css">
</head>
<body>
    <main>
    <form action="logica.php" method="POST">
        <h1>Formulario de registro</h1>
        <span>Nombre</span><br>
        <input type="text" name="nombre" class="texto" required><br>
        <span>Apellido</span><br>
        <input type="text" name="apellido"  class="texto" required><br>
        <span>Telefono</span><br>
        <input type="number" name="telefono"  class="texto" required><br>
        <span>Direccion</span><br>
        <input type="text" name="direccion"  class="texto" required><br>
        <span>Genero</span><br>
        <select name="genero">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br><br>
        <div class="boton-container">
            <input type="submit">
        </div>
    </form>
    </main>
</body>
</html>
