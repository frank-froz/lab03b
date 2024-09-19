<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-Index-</title>
</head>
<body>
    <h2>---Trabajo Grupal---</h2>
    <form id="formulario-tarea">
        <label for="tarea">Nombre de la tarea:</label>
        <input type="text" id="tarea" name="tarea" required>
       <button type="submit"> Agregar Tarea</button><br><br>
       <button> <a href="agregar_tarea.php"> Ver lista</a> </button>
    </form>

    
</body>
</html>
