
<?php include('php-crud/con_db_crud.php') ?>

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
    <link rel="stylesheet" href="css/style-crud.css" />
    <link rel="stylesheet" href="css/style-heder-sin-bootstrap.css" />
    <link rel="stylesheet" href="css/style-footer.css" />
    
    <!-- Link con archivo JS -->
    <script src="js/script.js" defer></script>
    
    <!-- Link con Fontawesome -->
    <script
      src="https://kit.fontawesome.com/11614eb144.js"
      crossorigin="anonymous"
    ></script>

    <title>Agregar Articulos</title>
  </head>

  <body>
    <?php include('include/header.php')?>
    <main>
      <?php if(isset($_SESSION['message'])){ ?>
        <div class="alert <?=  $_SESSION['message_type'];?>" id="alert_box">
          <span class="msg"><?=  $_SESSION['message'];?></span>
          <div class="close-btn">
            <span class="fas fa-times btn_cierre" id="btn_cierre" onclick="btn_cierre(this)"></span>
          </div>
         </div>
      <?php  }  ?>

      <script>
        function btn_cierre(alert_box){
        alert_box.parentNode.parentNode.style.display="none"
        }
      </script>
      
      <div class="edit-container">
        <form action="php-crud/save_product.php" method="POST">
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
            id="file_input">
          <label for="file_input" class="info_producto label_file">
            <span>Añadir Imagen</span>
          </label>
          <input
            type="submit"
            name="submit"
            value="Cargar Producto"
            class="cargar_producto"
          />
        </form>
      </div>

      <div class="table">
        <table>
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Precio</th>
              <th>Fecha de creacion</th>
              <th>Imagen</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT* FROM productos";
            $result_product = mysqli_query($conexion, $query);

            while($row = mysqli_fetch_array($result_product)) {?>
              <tr>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['fecha_reg'] ?></td>
                <td></td>
                <td>
                  <a href="php-crud/edit.php?id=<?php echo $row['id']?>" class="icon edit">
                  <i class="fas fa-marker"></i>
                  </a>
                  <a href="php-crud/delate_product.php?id=<?php echo $row['id']?>" class="icon delate">
                  <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>

            <?php } ?>

          </tbody>
        </table>  

      </div>
    </main>
  </body>
</html>
