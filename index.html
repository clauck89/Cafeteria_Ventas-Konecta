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

      <!-- Creamos el Formulario -->
      <div class="card card-body">
          <form action="save_task.php" method="POST">
              <div class="form-group"><input type="text" name="Nom_producto" class="form-control" placeholder="Nombre Producto" autofocus  required></div>
              <div class="form-group"><input type="text" name="Referencia" class="form-control" placeholder="Referencia" autofocus  required></div>
              <div class="form-group"><input type="text" name="Precio" class="form-control" placeholder="Precio" autofocus required></div>
              <div class="form-group"><input type="text" name="peso" class="form-control" placeholder="Peso" autofocus required></div>
              <div class="form-group"><input type="text" name="Categoria" class="form-control" placeholder="Categoria" autofocus required></div>
              <div class="form-group"> <input type="text" name="Stock" class="form-control" placeholder="Stock" autofocus required></div>
              
      </div>
              <input type="submit" name="save_task" class="btn btn-success btn-block" value="GUARDAR PRODUCTO">        
         </form><br>

      </div>
    </div>
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre Producto</th>
            <th>Reerencia</th>
            <th>Precio</th>
            <th>Peso</th>
            <th>Categoria</th>
            <th>Stock</th>
            <th>Fecha</th>
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
              <td><?php echo $row['Referencia']; ?></td>
              <td><?php echo $row['Precio']; ?></td>
              <td><?php echo $row['peso']; ?></td>
              <td><?php echo $row['Categoria']; ?></td>
              <td><?php echo $row['Stock']; ?></td>
              <td><?php echo $row['Fecha']; ?></td>
              
              <td>
                  <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                  </a>
                 
                  <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
              </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
