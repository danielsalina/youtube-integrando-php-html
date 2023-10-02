<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>
    <h1>Formulario GET</h1>

    <!-- Formulario Básico -->
    <!-- <form action="procesar.php" method="GET">
        <label for="nombre"> Nombre </label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="edad"> Edad </label>
        <input type="text" id="edad" name="edad"><br>
        <input type="submit" value="Enviar">
    </form> -->

    <!-- Formulario con Array -->

    <!-- <form action="procesar.php" method="get">
        <label for="numeros">Números (separados por comas): </label>
        <input type="text" id="numeros" name="numeros"><br>
        <input type="submit" value="Enviar">
    </form> -->

    <!-- Formulario con multiples selecciones -->

    <form action="06-procesar.php" method="get">
        <p>Elige tus frutas favoritas</p>
        <input type="checkbox" id="fruta1" name="frutas[]" value="manzana">
        <label for="fruta1">Manzana</label><br>
        <input type="checkbox" id="fruta2" name="frutas[]" value="banana">
        <label for="fruta1">Banana</label><br>
        <input type="checkbox" id="fruta3" name="frutas[]" value="uva">
        <label for="fruta1">Uva</label><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>