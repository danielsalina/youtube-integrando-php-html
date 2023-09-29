<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes get y post</title>
</head>
<body>

<h1>Solicitudes get y post</h1>

<script>

    const formData = new FormData();
    formData.append("nombre", "Fabricio");
    formData.append("edad", 44);


    let xhr = new XMLHttpRequest();

    // xhr.open("GET", "data_recibida.php?apellido=fabricio2&correo=123", true);
    xhr.open("POST", "05-data_recibida.php?apellido=fabricio2&correo=123", true);
    xhr.onreadystatechange = function (){
        if (xhr.readyState === 4 && xhr.status === 200) {
            let datosJS = xhr.responseText;
            console.log(datosJS);
        }
    }

    xhr.send(formData);

</script>
    
</body>
</html>