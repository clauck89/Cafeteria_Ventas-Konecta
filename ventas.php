<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- Creamos la tabla de Productos -->
      
  </form>

              </div>
            </div>
            <div class="col-md-9">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre Producto</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>

          <?php
          $query = "SELECT * FROM productos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['Nom_producto']; ?></td>
              <td><?php echo $row['Precio']; ?></td>
              <td><?php echo $row['Categoria']; ?></td>
              <td><?php echo $row['Stock']; ?></td>
             
              
              <td>
                  <a href="Ventas.php?id=<?php echo $row['id']?>" class="btn btn-success">
                  <i class="fas fa-shopping-cart"></i>

                  </a>
                                  
              </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>KONECTA </title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- Fuente -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="icon" href="img/konecta.jpg">
  </head>
  <body>

    