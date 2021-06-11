<!-- Este codigo evita que puedas entrar a la pagina principal sin antes haber iniciado sesion -->

<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
        alert("Por favor debes iniciar sesión");
        window.location = "Inicio_de_sesion.php";
        </script>
        ';
        session_destroy();
        die(); 
    }


?>