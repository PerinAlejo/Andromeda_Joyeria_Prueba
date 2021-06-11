<?php

include("con_db_crud.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM productos WHERE id = $id";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Eliminado Correctamente';
  $_SESSION['message_type'] = 'danger';
  header("Location: ../index-crud.php");
}

?>