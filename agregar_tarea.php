<?php
session_start();

// Asegúrate de que se haya enviado una tarea
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    // Inicializa la lista de tareas si no existe
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }
    // Agrega la tarea a la lista
    $_SESSION['tasks'][] = $task;
    // Redirige a la página principal o a la página de la lista
    header("Location: index.php");
    exit();
}
?>