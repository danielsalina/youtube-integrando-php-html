<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h1><?php echo "Este es un texo php";  ?></h1>

    <h2><?= "Otra manera de imprimir php con HTML" ?></h2>

    <hr>

    <h3>Condicionales</h3>

    <?php

        $edad = 115;

        if ($edad < 18):
            echo "Eres menor de edad";
        elseif ($edad >= 18 && $edad < 65):
            echo "Eres mayor de edad";
        else:
            echo "Eres un adulto mayor";
        endif;

    ?>

    <hr>

    <h3>Clasificiación de calificaciones</h3>

    <?php

        $calificacion = 85;

        if ($calificacion < 60):
            echo "Calificación: F";
        elseif ($calificacion >= 60 && $calificacion < 70):
            echo "Calificación: D";
        elseif ($calificacion >= 70 && $calificacion < 80):
            echo "Calificación: C";
        elseif ($calificacion >= 80 && $calificacion < 90):
            echo "Calificación: B";
        else:
            echo "Calificación: A";
        endif;


    ?>

</body>
</html>