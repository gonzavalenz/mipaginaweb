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
    <title>GonzaValenz | Contacto</title>
    <!-- Favicon -->
    <link rel="icon" href="../img/icon.png" type="image/x-icon">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../styles/main.css">
    <!-- JavaSctipt -->
    <script src="../js/animation.js" defer></script>
    <script src="../js/validation.js" defer></script>

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- PHP -->
    <?php $connection = new mysqli('localhost', 'root', 'password', 'mipaginaweb');?>
  </head>
  <body>
      <!-- Barra de navagacion -->
      <nav class="header navbar navbar-expand-md navbarper">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-toggler">
            <a class="navbar-brand" href="../index.html">
              <div class="iconoper">G</div>
            </a>
            <ul class="navbar-nav d-flex justify-content-center align-items-center">
              <li class="nav-item">
                <a class="nav-link navlinkper" href="../index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlinkper" href="proyectos.html">Proyectos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlinkper" aria-current="page" href="#">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Seccion Hero -->
      <section class="hero align-items-stretch">
        <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
          <h1 id="titulo">CONTACTO</h1>
          <h2>Contactate conmigo para crear juntos.</h2>
        </div>
        <div>
          <i class="bi bi-arrow-down hero-flecha"></i>
        </div>
      </section>

      <!-- Seccion Formulario -->
      <section>
        <form id="formulario" novalidate action="">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <div class="invalid-feedback">Por favor ingrese un nombre válido.</div>
          </div>
          <div class="mb-3">
            <label for="pais" class="form-label">Pais:</label>
            <div class="invalid-feedback">Por favor seleccione un pais.</div>
            <select name="pais" id="pais" class="form-select"> selecione
              <option selected>Seleccione un país.</option>
              <?php 
              $query = $connection -> query ("Select * FROM paises order by nombre asc");
              while ($valores = mysqli_fetch_Array($query)) {
                echo "<option value='".$valores['id']."'>".$valores['nombre']."</option>";
              }
              ?>
            </select>            
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Por favor ingrese un email válido.</div>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" pattern="[0-9]{10}">
            <div class="invalid-feedback">Por favor ingrese un teléfono válido de 10 dígitos.</div>
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
            <div class="invalid-feedback">Por favor ingrese un mensaje válido.</div>
          </div>
          <div class="submitDiv">
            <button class="btn-card-per btn btn-primary submitBtnClass" id="enviar" type="submit">Enviar</button>
          </div>
        </form>                       
      </section>

      <!-- FOOTER -->
      <footer class="footerper d-flex flex-column align-items-center justify-content-center">
        <div class="iconos-redes-sociales d-flex flex-wrap align-items-center justify-content-center">
          <a href="https://github.com/gonzavalenz" target="_blank" rel="noopener noreferrer">
            <i class="rsi bi bi-github"></i>
          </a>
          <a href="https://www.linkedin.com/in/gonzalo-valenzuela/" target="_blank" rel="noopener noreferrer">
            <i class="rsi bi bi-linkedin"></i>
          </a>
        </div>
        <div>
          <p>by gonzavalenz</p>
        </div>
      </footer>
    <!-- SCRIPT BOOTSRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
