<?php

// Formulario Básico

/* if (!empty($_GET["nombre"]) AND !empty($_GET["edad"])) {
     $nombre = $_GET["nombre"];
     $edad = $_GET["edad"];

     echo "Nombre: $nombre <br>";
     echo "Edad: $edad";
 } else {
     echo "Completa todos los campos";
 }*/

 // Formulario con Array

 /*
 if (!empty($_GET["numeros"])) {
    $numeros = $_GET["numeros"];
    $numeros_array = explode(",", $numeros);

    echo "Números: ";

    foreach ($numeros_array as $numero) {
        echo $numero;
    }
 } else {
    echo "Completa todos los campos";
}
*/

// Formulario con multiples selecciones

if (!empty($_GET["frutas"])) {
    $frutas = $_GET["frutas"];
    echo "Frutas favoritas: " . ucwords(implode(", ", $frutas));
} else {
    echo "Selecciona algún campo";
}