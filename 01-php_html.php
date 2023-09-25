<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Y HTML</title>
</head>
<body>
    <h1>Hola comunidad!</h1>
    <p>Este es un ejemplo de como imprimir HTML desde un archivo PHP</p>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
        <?php
            $datos = [["Juan",25],["Maria",30],["Carlos",28]];

            foreach($datos as $dato) {
                echo "<tr>";
                echo "<td>" . $dato[0] . "</td>";
                echo "<td>" . $dato[1] . "</td>";
                echo "</tr>";
            }

        ?>
    </table>


    <h2>Lista de alimentos</h2>
    <ul>
        <?php
            $elementos = ["Manzana", "Pera", "Banana", "Naranja", "Uva"];

            foreach($elementos as $elemento){
                echo "<li>$elemento</li>";
            }
        ?>
    </ul>

</body>
</html>