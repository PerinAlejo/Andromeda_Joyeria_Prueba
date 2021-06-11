<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['nombre_completo']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['usuario']) >= 1 &&
        strlen($_POST['contraseña']) >= 1
    ) {

        $nombre_completo = $_POST['nombre_completo'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $contraseña =  hash('sha512', $contraseña);

        $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contraseña) 
              VALUES ('$nombre_completo', '$email', '$usuario', '$contraseña')";

        //Verificar que el correo no se repita en la base de datos
        $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$email'");

        if (mysqli_num_rows($verificar_correo) > 0) {
            echo '
                <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "../Inicio_de_sesion.php";
                </script>
                ';
            exit();
        }

        //Verificar que el nombre de usuario no se repita en la base de datos
        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

        if (mysqli_num_rows($verificar_usuario) > 0) {
            echo '
                <script>
                alert("Este usuario ya está registrado, intenta con otro diferente");
                window.location = "../Inicio_de_sesion.php
                ';
            exit();
        }

        $ejecutar = mysqli_query($conexion, $query);

        if ($ejecutar) {
            echo '
                <script>
                alert("Usuario Registrado correctamente");
                window.location = "../Inicio_de_sesion.php";
                </script>
                ';
            exit();
        } else {
            echo '
                <script>
                alert ("Intentalo de nuevo, usuario no almacenado ");
                window.location = ../Inicio_de_sesion.php;
                <script/>
                ';
        }

        mysqli_close($conexion);
    }else{
        echo '
            <script>
            alert("Intentalo nuevamente, Campos vacios");
            window.location = "../Inicio_de_sesion.php";
            </script>
            ';
        exit();
    }
}
?>