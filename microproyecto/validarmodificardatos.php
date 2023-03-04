<?php
    $nombre = $_POST["nombre"];
    $contra = $_POST["clave"];
    $tipo = $_POST["tipo"];

      $sql = "update usuario set nombre='$nombre', pass='$contra', tipo_usuario='$tipo' where id='".$_SESSION['id']."';";
        
    if (mysqli_query($con, $sql)) {
        echo "Usuario modificado satisfactoriamente";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
        mysqli_close($con);
?>