<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'konecta'
) or die(mysqli_error($mysqli));

?>
