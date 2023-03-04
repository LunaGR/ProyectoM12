<?php
include("conexion.php");
if (empty($_SESSION['usuario'])) {
  header('location:login.php');
}
;
?>

<?php

$sql = "select * from usuario where id='" . $_SESSION['id'] . "';";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $nombre = $row['nombre'];
    $contra = $row['pass'];
    $tipo = $row['tipo_usuario'];
  }
}

?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="Style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  </link>

  <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet">
  </link>


</head>

<body id="verdatos">
  <div class="container">


    <form id="formregistro" action="modificardatos.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre"><b>Nombre</b></label>
        <input type="text" class="form-control" id="nombre" name="nombre" value=<?php echo ($nombre) ?> required >

      </div>
      <div class="form-group">
        <label for="clave"><b>Contraseña</b></label>
        <input type="password" class="form-control" id="clave" name="clave" value=<?php echo ($contra) ?> required>
        <div class="invalid-feedback"></div>
      </div>

      <div class="form-group">
        <label for="tipo"><b>Tipo usuario</b></label>
        <select name="tipo" id="tipo">
          <option value="0">Admin</option>
          <option value="1">Usuario</option>
        </select><br>
      </div>

      <center>
        <button type="submit" class="btn btn-success" name="modificar">Modificar</button>
        <a class="btn btn-success" href="login.php">Volver al login</a>
        <a class="btn btn-success" href="admin.php">Volver al menu de admin</a>
      </center>
    </form>

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

</body>

</html>

<?php
if (isset($_REQUEST['modificar'])) {
  include('validarmodificardatos.php');
}
?>