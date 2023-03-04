<?php
include('conexion.php');

if (empty($_SESSION['usuario'])) {
  header('location:login.php');
}
;

?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


  <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet">
  </link>


</head>

<body>
  <div class="container">


    <form id="formregistro" action="verdatos.php" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="usuario"><b>Usuario</b></label>
        <select class="form-control" id="nombre" name="nombre">
          <?php
      $sql = "select id from usuario";
      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $idusuario = $row['id'];
          echo $idusuario;
        }

      }

      $sql = "select * from usuario";
      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $usuario2 = $row['nombre'];
          echo $usuario2;

          echo "<option value=" . $row['nombre'] . ">" . $row['nombre'] . "</option>";
        }

      }
      ?>

        </select>
        <div class="invalid-feedback"></div>
      </div>


      <button type="submit" class="btn btn-success" name="Enviar">Seleccionar usuario</button><br><br>
      <button type="submit" class="btn btn-success" name="borrar">Borrar datos</button><br><br>
      <a class="btn btn-success" href="modificardatos.php">Modificar datos</a><br><br>

    </form>

    <?php

 if (isset($_REQUEST['Enviar'])) {
   $variable = $_POST['nombre'];
   $sql = "select * from usuario where nombre='" . $variable . "';";
   $result = mysqli_query($con, $sql);

   if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
       $_SESSION['id'] = $id;
       $nombre = $row['nombre'];
       $contra = $row['pass'];
       $tipo = $row['tipo_usuario'];
       echo "<div span style=\"text-align: center\">";
       echo "<div>";
       echo "<span style=\"font-weight: bold\">  Nombre: </span>" . $nombre . "<br>";
       echo "<span style=\"font-weight: bold\">  ID del usuario: </span>" . $id . "<br>";
       echo "<span style=\"font-weight: bold\">  Contraseña: </span>" . $contra . "<br>";
       echo "<span style=\"font-weight: bold\">  Tipo de usuario: </span>" . $tipo . "<br>";
       echo "</div>";
       echo "</div>" . "<br>" . "<br>";
     }
     mysqli_close($con);
   }
 }
 ;
 ?>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
    integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
    crossorigin="anonymous"></script>

  <?php
    if (isset($_REQUEST['borrar'])) {
      include('borrardatos.php');
    }
    ?>


</body>

</html>
<a href="login.php"><button class="btn success">Volver al login</button><br><br>
  <a href="admin.php"><button class="btn success">Volver al menu de admin</button>