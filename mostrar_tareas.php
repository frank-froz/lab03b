<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <style>
        .completada {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
<?php 
if (isset($_SESSION['tasks']) && !empty($_SESSION['tasks'])) {
    echo "<h1>Lista de Tareas</h1>";
    echo "<ul>";
    foreach ($_SESSION['tasks'] as $indice => $task) {
        
        echo "<li class= >" . htmlspecialchars($task);
        echo ' <a href="agregar_tarea.php?completar=' . $indice . '">[Marcar como completada]</a>';
        echo '<a href="agregar_tarea.php?eliminar=' . $indice . '">[Eliminar]</a>';
        echo "</li>";
        
    }
    echo "</ul>";
} else {
    echo "<h1>No hay tareas.</h1>";
}
?>
    <a href="index.php">Volver a la página principal</a>
</body>
</html>
