<?php


    include("con_db_crud.php");

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $archivo = $_FILES['img'];

    $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
    $img = $title.".".$extension;

    move_uploaded_file($archivo["tmp_name"], "assets/Imagenes/$img");
    
    $query = "INSERT INTO productos(title, description, price, img) VALUES ('$title', '$description', '$price', '$img')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("Query Failed");
    }


    $_SESSION['message'] = 'Agregado correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../index-crud.php");



?>