<?php


    include("con_db_crud.php");

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    $query = "INSERT INTO productos(title, description, price) VALUES ('$title', '$description', '$price')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("Query Failed");
    }


    $_SESSION['message'] = 'Agregado correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../index-crud.php");



?>