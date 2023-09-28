<?php

    $nombre = "Juan";
    $datos = ["Nombre" => "Maria", "Edad" => 25];
    $jsonDatos = json_encode($datos);
    $valor = 1234;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasando data de PHP a JS</title>
</head>
<body>
    
<h1>Pasando data de PHP a JS</h1>

<!-- <h2>Primer ejemplo</h2>
<script>
    let nombreJS = "<?php //  "Este es el nombre: $nombre"; ?>";
    console.log(nombreJS);
</script> -->



<!-- <h2>Ejemplo 2</h2>

<script>
    let datosJS = '<?php // $jsonDatos; ?>';
    console.log(datosJS);
</script> -->

<!-- <h2>Ejemplo 3</h2>

<input type="text" id="valor" value="<?php // echo $valor; ?>">

<script>
    let valorJS = document.getElementById("valor").value;
    console.log(valorJS);
</script> -->

<h2>Ejemplo 4</h2>

<script>
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "04-data.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let datosJS = JSON.parse(xhr.responseText);
            console.log(datosJS);
        }
    }
    xhr.send();
</script>

</body>
</html>