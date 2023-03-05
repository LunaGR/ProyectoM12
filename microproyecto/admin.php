<?php
session_start();
if (empty($_SESSION['usuario'])) {
    header('location:login.php');
}
;
?>

<!DOCTYPE html>
<html>
<head>
    <!--Añado el link del css y las etiquetas del body y del div.  -->
<link rel="stylesheet" href="Style.css">
</head>
<body id="admin">
    <h1>Página del Admin</h1>
    <center>
    <h2>
        Bienvenido, por favor selecciona la tarea que deseas realizar
    </h2>
    <div id="access">
        <a href="registrousuario.php"><button class="btn success">Dar de alta usuario</button><br><br>
        <a href="verdatos.php"><button class="btn success">Modificar datos Usuario</button><br><br>
        <a href="cerrarsesion.php"><button class="btn success">Cerrar sesión</button>
    </div>
    </center>
</body>
</html>
