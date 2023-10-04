<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>
<body>
    <h1>Formulario POST</h1>

    <!-- Calculadora básica -->

    <form action="calcular.php" method="post">
        <label for="num1">Número 1: </label>
        <input type="number" name="num1" id="num1"><br>
        <label for="num2">Número 2: </label>
        <input type="number" name="num2" id="num2"><br>
        <label for="operacion">Operación: </label>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="division">División</option>
            <option value="multiplicacion">Multiplicación</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>