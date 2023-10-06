<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
</head>
<body>

    <h1>Alta de usuarios</h1>

    <form action="procesar_registro.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Email: <input type="text" name="email"><br>
        Rol:
        <select name="rol">
            <option value="admin">Administrador</option>
            <option value="usuario">Usuario</option>
        </select><br>
        Contraseña: <input type="password" name="password"><br>
        <input type="submit" value="Crear">
    </form>
    
</body>
</html>