<?php
session_start();
if (empty($_SESSION['usuario'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h1>Página del Usuario</h1>
    <a href="cerrarsesion.php"><button class="btn success">Cerrar sesión</button>
</body>

</html>