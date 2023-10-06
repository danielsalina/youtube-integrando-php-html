<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = sanitizeInput($_POST["nombre"]);
    $edad = $_POST["edad"];
    $conocimiento = $_POST["conocimiento"];

    if (validateName($nombre) AND validateAge($edad)) {
        echo "Muchas gracias por participar!";
    } else {
        echo "Datos invalidos. Por favor, verifica la información";
    }
}

function sanitizeInput($input){
    return htmlspecialchars(trim($input));
}

function validateName($name){
    return preg_match("/^[a-zA-Z ]{2,}$/", $name);
}

function validateAge($age){
    return is_numeric($age) AND $age >= 18 AND $age <= 200;
}