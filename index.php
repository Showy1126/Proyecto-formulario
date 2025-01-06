<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de inicio(2)</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1>Formulario de registro</h1>
        <span>Nombre</span><br>
        <input type="text" name="nombre" required><br>
        <span>Apellido</span><br>
        <input type="text" name="apellido" required><br>
        <span>Telefono</span><br>
        <input type="number" name="telefono" required><br>
        <span>Direccion</span><br>
        <input type="text" name="direccion" required><br>
        <span>Genero</span><br>
        <select name="genero">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br><br>
        <input type="submit">
    </form>
</body>
</html>
