<?php

function sanitizarInput($input)
{
    // toma el valor del parámetro, quita espacios en blanco y escapa carácteres especiales en HTML
    return htmlspecialchars(trim($input));
}

function validarNombre($nombre)
{
    // toma el valor del parámetro y se asegura que al menos dos caracteres (mayúsculas o minúsculas) o espacios en blanco
    return preg_match("/^[a-zA-Z ]{2,}$/", $nombre);
}

function validarEmail($email)
{
    // toma el valor del parámetro y verifica si es una dirección de correo electrónico válida
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validarAsunto($asunto)
{
    // toma el valor del parámetro y se asegura que al menos dos caracteres (mayúsculas o minúsculas) o espacios en blanco
    return preg_match("/^[a-zA-Z ]{2,}$/", $asunto);
}

function validarMensaje($mensaje)
{
    // toma el valor del parámetro y se asegura que al menos dos caracteres (mayúsculas o minúsculas) o espacios en blanco
    return preg_match("/^[a-zA-Z ]{2,}$/", $mensaje);
}

function validarEstado($estado)
{
    // toma el valor del parámetro y verifica si el valor se encuentra en la lista predefinida de estados válidos
    return in_array($estado, ["estado_1", "estado_2", "estado_3", "estado..."]);
}

function validarCiudad($ciudad)
{
    // toma el valor del parámetro y verifica si el valor se encuentra en la lista predefinida de ciudades válidos
    return in_array($ciudad, ["ciudad_1", "ciudad_2", "ciudad_3", "ciudad..."]);
}

function validarCodigoPostal($codigo_postal)
{
    // La expresión regular permite letras mayúsculas y minúsculas, números y el carácter "-"
    return preg_match("/^[a-zA-Z0-9\- ]{2,}$/", $codigo_postal);
}

function validarTerminosYCondiciones($terminos_condiciones)
{
    // Verifica si el checkbox ha sido marcado (valor igual a "terminos_condiciones")
    return $terminos_condiciones === "terminos_condiciones";
}

function mostrarMensaje($tipo, $mensaje)
{
    echo '<div class="my-3 alert alert-' . $tipo . '" role="alert">
        <span>' . $mensaje . '</span>
    </div>';
}
