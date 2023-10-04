<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $upload_ok = 1;
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verificar si es una imagen real
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagen"]["name"]);

        if ($check !== false) {
            echo "El archivo es una imagen {$check['mime']} ";
            $upload_ok = 1;
        } else {
            echo "El archivo no es una imagen";
            $upload_ok = 0;
        }
    }

    // Verificar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "La imagen ya existe.";
        $upload_ok = 0;
    }

    // Verificar el tamaño de nuestra imagen
    if ($_FILES["imagen"]["size"] > 500000) {
        echo "La imagen es demasiado grande.";
        $upload_ok = 0;
    }

    // Permitir solo ciertos formatos de imagen
    if ($image_file_type !== "jpg" AND $image_file_type !== "png" AND $image_file_type !== "jpeg") {
        echo "Lo siento, solo se admiten formatos png, jpg y jpeg.";
        $upload_ok = 0;
    }

    // Verificar si la variable $upload_ok está en 0
    if ($upload_ok === 0) {
        echo " Lo siento, tu archivo no fue subido 😕";
    } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            echo "La imagen " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " ha sido subido 👍🏼";
        } else {
            echo "Lo siento hubo un error subiendo tu imagen";
        }
    }

}