<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();

    if (!isset($_SESSION["tareas"])) {
        $_SESSION["tareas"] = [];
    }

    $tarea = $_POST["tarea"];

    if (!empty($tarea)) {
        array_push($_SESSION["tareas"], $tarea);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <form action="agregar_tarea.php" method="post">
        <label for="tarea">Nueva Tarea:</label>
        <input type="text" name="tarea" id="tarea">
        <input type="submit" value="agregar">
    </form>

    <h2>Tareas Pendientes:</h2>
    <ul>
        <?php if (isset($_SESSION["tareas"])):
            foreach($_SESSION["tareas"] as $t): ?>
            <li>Tarea: <b><?= $t ?></b></li>
        <?php endforeach; endif;?>
    </ul>
</body>
</html>