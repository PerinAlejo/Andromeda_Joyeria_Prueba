<?php include('php-crud/con_db_crud.php') ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="Last-Modified" content="0" />
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate" />
    <meta http-equiv="Pragma" content="no-cache" />

    <!-- Normalizacion de navegadores -->
    <link rel="stylesheet" href="css/normalize.css" />

    <!-- Links con google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&display=swap"
      rel="stylesheet"
    />

    <!-- Link con archivo CSS  -->
    <link rel="stylesheet" href="css/style-heder-sin-bootstrap.css" />
    <link rel="stylesheet" href="css/style-footer.css" />
    <link rel="stylesheet" href="css/style-catalogo.css" />

    <!-- Link con archivo JS -->
    <script src="js/script.js" defer></script>

    <!-- Link con Fontawesome -->
    <script
      src="https://kit.fontawesome.com/11614eb144.js"
      crossorigin="anonymous"
    ></script>

    <title>Catálogo</title>
  </head>

  <body>
    
    <?php include("include/header.php")?>

    <main>

      <a href="index-crud.php" class="agregar"><i class="fas fa-plus"></i></a>

      <div class="conteiner">
        <?php
          $query = "SELECT* FROM productos";
          $result_product = mysqli_query($conexion, $query);
          while($row = mysqli_fetch_array($result_product)) {?>
          
            <div class="card">
              <img src="php-crud/assets/Imagenes/<?php echo $row['img']?>" alt="Producto" />
              <h4><?php echo $row['title'] ?></h4>
              <p>
                <?php echo $row['description'] ?> <br />
                <?php echo $row['price'] ?>
              </p>
              <a href="#">Comprar Producto</a>
            </div>
        <?php } ?>
      </div>



      <!-- <h1 class="title">Catálogo</h1> -->
      <!-- <div id="pulseras"></div>
      <br />
      <br />
      <h3 class="title_producto">Pulseras</h3>
      <div class="conteiner">
        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>

        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>

        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>

        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>

        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>
      </div>

      <div id="relojes"></div>
      <br />
      <br />
      <h3 class="title_producto">Relojes</h3>
      <div class="conteiner">
        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>

        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>

        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>

        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>

        <div class="card">
          <img src="assets/Imagenes/cards.png" alt="Producto" />
          <h4>Natueraleza</h4>
          <p>
            Pulsera de acero blanco <br />
            $500
          </p>
          <a href="#">Comprar Producto</a>
        </div>
      </div> -->
    </main>

    <?php include("include/footer.php")?>

  </body>
</html>
