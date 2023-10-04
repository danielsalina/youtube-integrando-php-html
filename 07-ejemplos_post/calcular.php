<?php

// Calculadora básica

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            echo "Resultado: $resultado";
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            echo "Resultado: $resultado";
            break;
        case 'division':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "Resultado: $resultado";
            } else {
                echo "No se puede dividir entre cero";
            }
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            echo "Resultado: $resultado";
            break;
        
        default:
            echo "Operación no valida";
            break;
    }

}