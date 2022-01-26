<?php
include("db.php");

$Nom_producto = '';
$Referencia = '';
$precio = '';
$peso = '';
$Categori = '';
$Stock = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM productos WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nom_producto = $row['Nom_producto'];
    $Referencia = $row['Referencia'];
    $precio = $row['Precio'];
    $peso = $row['peso'];
    $Categori = $row['Categoria'];
    $Stock = $row['Stock'];
   
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $Nom_producto = $_POST['Nom_producto'];
  $Referencia = $_POST['Referencia'];
  $precio = $_POST['Precio'];
  $peso = $_POST['peso'];
  $Categori = $_POST['Categoria'];
  $Stock = $_POST['Stock'];

  $query = "UPDATE productos set Nom_producto = '$Nom_producto', Referencia = '$Referencia',Precio = '$precio',Categoria = '$Categori',Stock = '$Stock' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Producto Actualizado Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        
        <div class="form-group">
          <input name="Nom_producto" type="text" class="form-control" value="<?php echo $Nom_producto; ?>" placeholder="Nombre del Producto">
        </div>
        <div class="form-group">
          <input name="Referencia" type="text" class="form-control" value="<?php echo $Referencia; ?>" placeholder="Referencia">
        </div>
        <div class="form-group">
          <input name="Precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Precio">
        </div>
        <div class="form-group">
          <input name="peso" type="text" class="form-control" value="<?php echo $peso; ?>" placeholder="peso">
        </div>
        <div class="form-group">
          <input name="Categoria" type="text" class="form-control" value="<?php echo $Categori; ?>" placeholder="Categoria">
        </div>
        <div class="form-group">
          <input name="Stock" type="text" class="form-control" value="<?php echo $Stock; ?>" placeholder="Stock">
        </div>

        <button class="btn-success" name="update">
          Actualizar Productos
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
