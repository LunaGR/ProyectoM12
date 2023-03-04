<?php
    // insertar en la tabla de usuarios .. un usuario nuevo   
      $sql = "delete from usuario where id='".$_SESSION['id']."';";
        
    if (mysqli_query($con, $sql)) {
        echo "Usuario borrado satisfactoriamente"."<br>";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
        mysqli_close($con);
?>