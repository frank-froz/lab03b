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
// Función para eliminar una tarea
if (isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    unset($_SESSION['tasks'][$indice]);
    $_SESSION['tasks'] = array_values($_SESSION['tasks']);  // Reindexar el array
}

// Función para marcar una tarea como completada
if (isset($_GET['completar'])) {
    $indice = $_GET['completar'];
    $_SESSION['tasks'][$indice]['completada'] = true;
}  
header('Location: mostrar_tareas.php');
exit();  
?>