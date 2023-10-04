<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar imagen</title>
</head>
<body>
    <h1>Enviar imagen</h1>

    <form action="08-procesar_imagen.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imagen" accept="image/*">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>