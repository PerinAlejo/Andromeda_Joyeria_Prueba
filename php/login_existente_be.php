<!-- Este codigo detecta  que ya hay una sesion iniciada y te manda directo a la pagina principal -->

<?php

  session_start();

  if(isset($_SESSION['usuario'])){
    header("location: index-iniciado.php"); 
  }

?>
