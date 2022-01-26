<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $Nom_producto = $_POST['Nom_producto'];
  $Referencia = $_POST['Referencia'];
  $precio = $_POST['Precio'];
  $peso = $_POST['peso'];
  $Categori = $_POST['Categoria'];
  $Stock = $_POST['Stock'];
  
  
  
  $query = "INSERT INTO `productos` (`id`, `Nom_producto`, `Referencia`, `Precio`, `peso`, `Categoria`, `Stock`, `Fecha`) VALUES (NULL, '$Nom_producto', '$Referencia','$precio', '$peso', '$Categori', '$Stock', current_timestamp())";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Producto Guardado Satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
