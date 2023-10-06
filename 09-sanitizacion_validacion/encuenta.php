<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de encuesta</title>
</head>
<body>
    <h1>Sistema de encuesta</h1>

    <form action="procesar_encueta.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Edad: <input type="number" name="edad"><br>
        ¿Cómo nos conociste?
        <select name="conocimiento">
            <option value="redes">Redes sociales</option>
            <option value="amigos">Recomendación de amigos</option>
            <option value="busqueda">Busqueda en línea</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>