<?php

require_once "./functions/funciones.php";
require_once "./send/envio_email.php";

$resultado = '';

if (isset($_POST["enviar"])) {
  // Obtener y sanitizar los datos del formulario
  $nombre = sanitizarInput($_POST["nombre"]);
  $email = sanitizarInput($_POST["email"]);
  $asunto = sanitizarInput($_POST["asunto"]);
  $mensaje = sanitizarInput($_POST["textarea"]);
  $estado = $_POST["estado"];
  $ciudad = $_POST["ciudad"];
  $codigoPostal = sanitizarInput($_POST["codigo_postal"]);
  $terminosCondiciones = $_POST["terminos_condiciones"];

  // Validar los datos del formulario
  $validaciones = [
    validarNombre($nombre),
    validarEmail($email),
    validarAsunto($asunto),
    validarMensaje($mensaje),
    validarEstado($estado),
    validarCiudad($ciudad),
    validarCodigoPostal($codigoPostal),
    validarTerminosYCondiciones($terminosCondiciones)
  ];

  $validacionExitosa = array_reduce($validaciones, function ($acumulador, $actual) {
    return $acumulador and $actual;
  }, true);

  if ($validacionExitosa) {
    // Enviar el correo

    if (enviarCorreo($nombre, $email, $asunto, $mensaje)) {
      $resultado = "exito";
    } else {
      $resultado = "error_envio";
    }
  } else {
    $resultado = "error_validacion";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario de contacto</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center vh-100 flex-column">
    <h4>Formulario de contacto</h4>
    <form action="./" method="post" class="border border-3 px-5 pt-4 w-50 rounded-5 flex-row">
      <div class="col-md-12 my-2">
        <label for="nombre" class="form-label"><b>Nombre</b></label>
        <input type="text" class="form-control" id="nombre" name="nombre" autofocus required />
      </div>

      <div class="col-md-12 my-2">
        <label for="email" class="form-label"><b>Correo</b></label>
        <input type="email" class="form-control" id="email" name="email" required />
      </div>

      <div class="col-md-12 my-2">
        <label for="asunto" class="form-label"><b>Asunto</b></label>
        <input type="text" class="form-control" id="asunto" name="asunto" required />
      </div>

      <div class="col-md-12 my-2">
        <label for="textarea" class="form-label"><b>Mensaje</b></label>
        <textarea class="form-control" id="textarea" name="textarea" rows="3"></textarea>
      </div>

      <div class="col-md-12 my-3">
        <label for="estado" class="form-label"><b>Estado</b></label>
        <select class="form-select" id="estado" name="estado" required>
          <option selected disabled value="">Selecciona...</option>
          <option value="estado_1">Estado 1</option>
          <option value="estado_2">Estado 2</option>
          <option value="estado_3">Estado 3</option>
          <option value="estado...">Estado ...</option>
        </select>
      </div>

      <div class="col-md-12 my-3">
        <label for="ciudad" class="form-label"><b>Ciudad</b></label>
        <select class="form-select" id="ciudad" name="ciudad" required>
          <option selected disabled value="">Selecciona...</option>
          <option value="ciudad_1">Ciudad 1</option>
          <option value="ciudad_2">Ciudad 2</option>
          <option value="ciudad_3">Ciudad 3</option>
          <option value="ciudad...">Ciudad ...</option>
        </select>
      </div>

      <div class="col-md-12 my-2">
        <label for="codigo_postal" class="form-label"><b>Código Postal</b></label>
        <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required />
      </div>

      <div class="col-12 my-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="terminos_condiciones" id="terminos_condiciones" name="terminos_condiciones" required />
          <label class="form-check-label" for="terminos_condiciones">
            Acepto los terminos y condiciones
          </label>
        </div>
      </div>

      <div class="col-12 text-center pb-2">
        <button class="btn btn-primary" type="submit" name="enviar" value="enviar">Enviar 📧</button>
      </div>
    </form>

    <?php if (isset($_POST["enviar"])) : ?>

      <?php if ($resultado === "error_validacion") : ?>

        <?php mostrarMensaje("danger", "Ocurrió un error en la validación de los datos. Por favor, revisa el formulario 😕"); ?>

      <?php endif; ?>

      <?php if ($resultado === "error_envio") : ?>

        <?php mostrarMensaje("danger", "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo 😕"); ?>

      <?php endif; ?>

      <?php if ($resultado === "exito") : ?>

        <?php mostrarMensaje("success", "El mensaje se envió correctamente."); ?>

      <?php endif; ?>

    <?php endif; ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>