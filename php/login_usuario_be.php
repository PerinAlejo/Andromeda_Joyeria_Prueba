<?php

    session_start();

    include ("con_db.php");

    $email =  $_POST['email'];
    $contraseña =  $_POST['contraseña'];
    $contraseña = hash('sha512', $contraseña);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 
    correo='$email' and contraseña='$contraseña'");

    if(mysqli_num_rows($validar_login) >  0){
        $_SESSION['usuario'] = $email;
        header("location: ../index-iniciado.php");
        exit;
    }else{
        echo '
        <script>
        alert("Este usuario no existe, por favor verificar lo datos");
        window.location = "../Inicio_de_sesion.php";
        </script>
        ';
        exit;
    }


?>