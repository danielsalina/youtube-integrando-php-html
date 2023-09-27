<?php

    $contador = 1;

    $frutas = ["Manzana", "Pera", "Banana", "Naranja", "Uva"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>
<body>
    <h1>Estrucuturas de control</h1>

    <h2>Bucle for</h2>
    <ul>
        <?php for ($i=1; $i <= 6 ; $i++): ?>
            <li>Elemeto <?= $i ?></li>
        <?php endfor; ?>
    </ul>

    <hr>

    <h2>Bucle while</h2>

    <ul>
        <?php while ($contador <= 10): ?>

            <li>Número <?= $contador ?></li>

        <?php
            $contador++;
            endwhile;
        ?>
    </ul>

    <hr>

    <h2>Bucle foreach</h2>

    <ul>
        <?php foreach($frutas as $fruta): ?>
            <li>Fruta: <?= "<b>$fruta</b>" ?></li>
        <?php endforeach; ?>
    </ul>


</body>
</html>