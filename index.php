<?php
session_start();
$_SESSION['usuario'] = 'Perez'; // Establece el nombre de usuario en la sesión
echo $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form action="agregar_tarea.php" method="POST">
            <h1>Insertar tarea</h1>

            <div class="input-box">
                <input type="text" name="task" placeholder="Escribe" required>
                <i class='bx bxs-user'></i>
            </div>

            <button class="btn" type="submit">Registrar</button><br><br>
            <button class="btn"><a href="mostrar_tareas.php">Lista</a> </button><!-- Corrección aquí -->

            <div class="register-link">
                <p>Escribe una tarea a la vez</p>
            </div>
        </form>
    </div>
</body>
</html>


