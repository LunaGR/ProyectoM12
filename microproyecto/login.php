<?php
require("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $sql = "select * from usuario where nombre='" . $usuario . "' AND pass='" . $contraseña . "'";

    $resultado = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($resultado);

    if ($row["tipo_usuario"] == "1") {
        $_SESSION["usuario"] = $usuario;
        header("location:usuario.php");
    } elseif ($row["tipo_usuario"] == "0") {
        $_SESSION["usuario"] = $usuario;
        header("location:admin.php");
    } else {
        echo "El usuario o contraseña son incorrectos";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <!--se crea el link del css y las etiquetas de body  -->
    <link rel="stylesheet" href="Style.css">
</head>

<body id="login">
    <center>
        <div id="containerLogin">
            <h1>Login</h1>
            <br><br><br>
            <form action="#" method="POST">
                <div>
                    Usuario: <input type="text" name="usuario" required>
                </div>
                <br>
                <div>
                    Contraseña: <input type="password" name="contraseña" required>
                </div>
                <br>
                <div>
                    <input type="submit" value="login">
                </div>
                <br>
            </form>
        </div>
    </center>
</body>


</html>
