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

</head>
<body>
    <h1>Página del Admin</h1>
    <a href="registrousuario.php"><button class="btn success">Dar de alta usuario</button><br><br>
    <a href="verdatos.php"><button class="btn success">Modificar datos Usuario</button><br><br>
    <a href="cerrarsesion.php"><button class="btn success">Cerrar sesión</button>
</body>
</html>