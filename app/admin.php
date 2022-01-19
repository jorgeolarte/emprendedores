<?php include '../data/validar-sesion.php' ?>
<!DOCTYPE html>
<html>

<head>
  <?php 
  $title = "Administración de emprendedores";
  $descripcion = "Soñamos con una ciudad orgullosa de sus raíces. Generamos espacios de formación y networking que nos permiten irradiar la pasión del gen emprendedor";
  $keywords = "emprendedores, emprender, aprender, emprendimiento, emprendedores cartago, cartago, cartago valle del cauca";
  ?>

  <?php include '../templates/header.php'; ?>
</head>

<body class="admin animated fadeIn slower">

  <?php include 'templates/adminbar.php'; ?>

  <?php 
  
  // Variables de conexión
  include '../data/conexion.php';
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    // Se cae la conexión debe hacer algo
    die("Connection failed: " . $conn->connect_error);
  } 

  // Consulta para saber si el man ya se encuentra registrado
  $sql_buscar = "SELECT * FROM emprendedores ORDER BY id DESC";
  $result = $conn->query($sql_buscar);

  ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Administración de emprendedores</h1>
      </div>
    </div>
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Emprendimiento</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php while($rows = $result->fetch_assoc()) { ?>  
            <tr>
              <th scope="row"><?= $rows['id'] ?></th>
              <td><?= utf8_encode($rows['nombre']) ?></td>
              <td><?= utf8_encode($rows['emprendimiento']) ?></td>
              <td><?= $rows['telefono'] ?></td>
              <td><?= $rows['email'] ?></td>
              <td><a href="borrar-emprendedor.php?id=<?= $rows['id'] ?>" class="btn btn-sm btn-danger" alt="Eliminar a <?= utf8_encode($rows['nombre']) ?>"><i class="fas fa-trash"></i></a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  

  <?php include '../templates/footer.php'; ?>
  
</body>

</html>