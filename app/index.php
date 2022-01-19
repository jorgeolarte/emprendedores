<!DOCTYPE html>
<html>

<head>
  <?php 
  $title = "App";
  $descripcion = "Soñamos con una ciudad orgullosa de sus raíces. Generamos espacios de formación y networking que nos permiten irradiar la pasión del gen emprendedor";
  $keywords = "emprendedores, emprender, aprender, emprendimiento, emprendedores cartago, cartago, cartago valle del cauca";
  ?>

  <?php include '../templates/header.php'; ?>
</head>

<body class="signin animated fadeIn slower pt-5 text-light">

    <form class="form-signin p-5 text-center" action="../data/iniciar-sesion.php" id="form-signin" method="post">
        <img class="mb-4 w-75" src="../img/logo-emprendedores.png" alt="Emprendedores Cartago">
        <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
        <label for="inputEmail" class="sr-only">Correo electrónico</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Correo electrónico" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Teléfono</label>
        <input type="number" id="inputPassword" name="telefono" class="form-control" placeholder="Teléfono" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fas fa-walking"></i> <b>Ingresar</b></button>
        <div class="alert alert-primary mb-0 text-center" role="alert" id="resp">
        </div>
    </form>

    <?php include '../templates/footer.php'; ?>
  
</body>

</html>