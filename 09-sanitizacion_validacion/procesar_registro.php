<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = sanitizeInput($_POST["nombre"]);
    $email = sanitizeInput($_POST["email"]);
    $rol = $_POST["rol"];
    $contrasenia = $_POST["password"];

    if (validateName($nombre) AND validateEmail($email) AND validateRol($rol) AND validatePassword($contrasenia)) {
        $hashedPassword = password_hash($contrasenia, PASSWORD_DEFAULT);
        
        if(password_verify($contrasenia, $hashedPassword )){
            echo "La contraseña conicide";
        }

    } else {
        echo "Datos invalidos. Intentalo de nuevo";
    }

}

function sanitizeInput($input){
    return htmlspecialchars(trim($input));
}

function validateName($name){
    return preg_match("/^[a-zA-Z ]{2,}$/", $name);
}

function validateEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateRol($rol){
    return in_array($rol, ["usuario", "admin"]);
}

function validatePassword($password){
    return strlen($password) >= 6;
}