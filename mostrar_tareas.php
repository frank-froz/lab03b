<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
<?php 
if (isset($_SESSION['tasks']) && !empty($_SESSION['tasks'])) {
    echo "<h1>Lista de Tareas</h1>";
    echo "<ul>";
    foreach ($_SESSION['tasks'] as $task) {
        echo "<li>" . htmlspecialchars($task) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<h1>No hay tareas.</h1>";
}
?>
    <a href="index.php">Volver a la página principal</a>
</body>
</html>
