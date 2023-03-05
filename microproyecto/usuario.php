<?php
session_start();
if (empty($_SESSION['usuario'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <!--se crea el link al css y las etiquetas precisas -->
    <link rel="stylesheet" href="Style.css">
</head>

<body id="user">
    <h1>Página del Usuario</h1>
    <div id="text">
        Bienvenido/a, acabas de iniciar sesión. </br>
        <p>Pronto será San Patricio, una festividad proveniente de Irlanda
        ¿Sabias que existe una leyenda en relación a un leprechaun, los treboles
        y una olla de oro?</p>  </br>
        <div id="btn">
            <a href="cerrarsesion.php"><button class="btnsuccess">Cerrar sesión</button>
        </div>
    </div>

</body>

</html>
