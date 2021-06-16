<?php

    include("con_db_crud.php");

    $title = '';
    $description= '';
    $price= '';

    if  (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM productos WHERE id=$id";
        $result = mysqli_query($conexion, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $title = $row['title'];
          $description = $row['description'];
          $price = $row['price'];
        }
      }

      if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $title= $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
      
        $query = "UPDATE productos set title = '$title', description = '$description', price = '$price' WHERE id=$id";
        mysqli_query($conexion, $query);
        $_SESSION['message'] = 'Editado correctamente';
        $_SESSION['message_type'] = 'edit_crud';
        header('Location: ../index-crud.php');
      }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Etiquetas meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Normalizacion de navegadores -->
    <link rel="stylesheet" href="css/normalize.css" />

    <!-- Links con google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-- Link con archivo CSS  -->
    <link rel="stylesheet" href="../css/style-edit-crud.css" />
    <link rel="stylesheet" href="../css/style-heder-sin-bootstrap.css" />
    <link rel="stylesheet" href="../css/style-footer.css" />
    
    <!-- Link con archivo JS -->
    <script src="js/script.js" defer></script>

    <!-- Link con Fontawesome -->
    <script
      src="https://kit.fontawesome.com/11614eb144.js"
      crossorigin="anonymous"
    ></script>

    <title>Editar Articulos</title>
</head>

<body>
    
    

    <div class="edit-container">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <input
            type="text"
            name="title"
            placeholder="Introducir Producto"
            class="info_producto"
            autofocus
            required
          />
          <textarea
            name="description"
            rows="4"
            placeholder="Descripcion del Producto"
            class="info_producto"
          ></textarea>
          <input
            type="text"
            name="price"
            placeholder="Introducir Precio"
            class="info_producto"
            required
          />
          <input 
            type="file" 
            name="img" 
            id="file_input"
            required>
          <label for="file_input" class="info_producto label_file">
            <span>Añadir Imagen</span>
          </label>
          <input
            type="submit"
            name="submit"
            value="Editar Producto"
            class="cargar_producto"
          />
        </form>
    </div>

</body>
</html>
