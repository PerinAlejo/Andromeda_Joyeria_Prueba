<?php include("php/login_existente_be.php") ?> 

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link con Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Link con fichero css -->
    <link rel="stylesheet" href="css/style-sesion.css" />

    <!-- Titulo -->
    <title>Login Y Registro</title>
  </head>

  <body>
    <main>
      <div class="contenedor__todo">
        <!-- Fondo del Login y Registro -->
        <div class="caja__trasera">
          <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button id="btn__login">Iniciar Sesión</button>
          </div>
          <div class="caja__trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Regístrate para que puedas iniciar sesión</p>
            <button id="btn__register">Regístrate</button>
          </div>
        </div>

        <!-- Formulario de login y Registro -->
        <div class="contenedor__login-register">

          <!-- Login -->
          <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
            <h2 class="titulo_formulario">Iniciar Sesión</h2>
            <input
              type="email"
              placeholder="Correo Electrónico"
              class="formulario"
              name="email"
            />
            <input
              type="password"
              placeholder="Contraseña"
              class="formulario"
              name="contraseña"
            />
            <input type="submit" value="Entrar" class="btn_formulario" />
          </form>

          <!-- Registro -->
          <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
            <h2 class="titulo_formulario">Regístrarse</h2>
            <input
              type="text"
              name="nombre_completo"
              placeholder="Nombre Completo"
              class="formulario"
            />
            <input
              type="email"
              name="email"
              placeholder="Correo Electrónico"
              class="formulario"
            />
            <input
              type="text"
              name="usuario"
              placeholder="Nombre de Usuario"
              class="formulario"
            />
            <input
              type="password"
              name="contraseña"
              placeholder="Contraseña"
              class="formulario"
            />
            <input type="submit" value="Regístrarse" name="register" class="btn_formulario" />

          </form>
        </div>
      </div>
    </main>
    <!-- link con Java Script -->
    <script src="js/script-sesion.js"></script>
  </body>
</html>
