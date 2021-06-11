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

    <!-- Link con bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <!-- Link con archivo CSS  -->
    <link rel="stylesheet" href="css/style-header.css" />
    <link rel="stylesheet" href="css/style-footer.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Link con archivo JS -->
    <script src="js/script.js" defer></script>

    <!-- Link con Fontawesome -->
    <script
      src="https://kit.fontawesome.com/11614eb144.js"
      crossorigin="anonymous"
    ></script>

    <title>Andromeda</title>
  </head>

  <body>
    
    <?php include("include/header.php")?>

    <main>
      <!-- Registro e inicio de sesión -->
      <p class="Bienvenida">¡¡Bienvenido a Andromeda Joyeria!!</p>
      <a href="php/cerrar_sesion.php" class="cerrar_sesion">Salir<i class="fas fa-sign-out-alt"></i></a>


      <!-- Carousel -->
      <div
        id="carouselExampleIndicators"
        class="carousel slide div_carousel"
        data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="assets/Imagenes/Anillo_corousel.jfif"
              class="d-block w-100 img-carousel"
              alt="Anillo"
            />
          </div>
          <div class="carousel-item">
            <img
              src="assets/Imagenes/Pulsera_carousel_1.jfif"
              class="d-block w-100 img-carousel"
              alt="Pulsera"
            />
          </div>
          <div class="carousel-item">
            <img
              src="assets/Imagenes/Reloj_corousel.jfif"
              class="d-block w-100 img-carousel"
              alt="Reloj"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- enlace catalogo -->
      <a href="index-catalogo.php" class="catalogo">Catálogo</a>

      <!-- Quienes somos -->
      <div class="intro" >
        <h2>¿Quíenes somos?</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sint
          voluptate tenetur ducimus, culpa corporis quasi necessitatibus,
          commodi at odio asperiores labore error ipsam aspernatur! Laborum
          eaque debitis atque temporibus!
        </p>
      </div>

      <!-- Enlace a Instagram -->
      <div class="enlace_ig">
        <img src="assets/Imagenes/ig_logo.png" alt="Logo Instagram"/>
        <a href="https://www.instagram.com/andromeda.jw/?hl=en" target="_blank"> @Andromeda.jw </a>
      </div>
    </main>

    <?php include("include/footer.php")?>

    <?php include("include/scripts_bootstrap.php")?>
  </body>
</html>
