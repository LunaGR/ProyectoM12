<?php
require("conexion.php");
$banderanombre = 1;
$sql = "select nombre from usuario where nombre='" . $_POST['nombre'] . "'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Aviso. El usuario existe";
    $banderanombre = 0;
}

if ($banderanombre == 1) {
 
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $tipo = $_POST["tipo"];

    $sql = "insert into usuario(id, nombre, pass, tipo_usuario) values('', '$nombre', $clave, '$tipo')";

    if (mysqli_query($con, $sql)) {
        echo "Nuevo usuario creado satisfactoriamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>