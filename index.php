<?php
  // unset($_SESSION['username']);
  session_start();
  require 'php/validacionIndex.php';   
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- METADATOS -->
    <meta charset="UTF-8" />
    <meta name="author" content="Gonzalo Valenzuela" />
    <meta name="description" content="Sitio web sobre gonzalo valenzuela, con su cv y portfolio." />
    <meta name="keywords" content="HTML, CSS, PYTHON, JavaScript, Developer, Programador, Data" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Titulo -->
    <title>GonzaValenz</title>
    <!-- Favicon -->
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- JavaSctipt -->
    <script src="js/animationmain.js" defer></script>
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;600;800&display=swap" rel="stylesheet">
  </head>
  <body>
      <!-- Seccion Hero -->
      <section class="hero align-items-stretch">
        <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
          <h1 id="titulo">Gonzalo Valenzuela</h1>
          <h2>Por favor, iniciar sesión o registrarse</h2>
        </div>
        <div>
          <i class="bi bi-arrow-down hero-flecha"></i>
        </div>
        <div>
          <p class="plogin">
            <a class="loginlinkper" href="pages/login.php">Login</a> o <a class="loginlinkper" href="pages/signup.php">SignUp</a>
          </p>
        </div>
      </section>

    <!-- SCRIPT BOOTSRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
