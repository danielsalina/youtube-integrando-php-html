<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = sanitizeInput($_POST["nombre"]);
    $fecha_entrada = $_POST["fecha_entrada"];
    $fecha_salida = $_POST["fecha_salida"];

    if (validateName($nombre) AND validateDates($fecha_entrada, $fecha_salida)) {
        echo "Reserva con éxito 😎";
    } else {
        echo "Datos invalidos. Por favor, verifica la información.";
    }
}

function sanitizeInput($input){
    return htmlspecialchars(trim($input));
}

function validateName($name) {
    return preg_match("/^[a-zA-Z ]{2,}$/", $name);
}

function validateDates($start, $end){
    $today = date("Y-m-d");
    return $start >= $today AND $end > $start;
}