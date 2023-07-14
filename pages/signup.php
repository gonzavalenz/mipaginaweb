<?php require '../php/validacionIndex.php'; ?>
<?php require '../php/database.php'; ?>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- CSS -->
  <link rel="stylesheet" href="../styles/main.css">
  <!-- JavaSctipt -->
  <script src="../js/animationmain.js" defer></script>
  <script src="../js/validationSignUp.js" defer></script>
  <!-- Fuentes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;600;800&display=swap" rel="stylesheet">
</head>

<body>
  <?php require '../includes/header.php'?>

  <!-- Seccion Hero -->
  <section class="hero align-items-stretch">
    <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
      <h1 id="titulo">SignUp</h1>
    </div>
    <div>
      <i class="bi bi-arrow-down hero-flecha"></i>
    </div>
  </section>


  <section>
    <form action="../php/validarSignUp.php" id="formulario" novalidate method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
        <div class="invalid-feedback">Por favor ingrese un username válido.</div>
      </div>
      <div class="mb-3">
        <label for="pais" class="form-label">Pais:</label>
        <select name="pais" id="pais" class="form-select">
          <option value='' selected>Seleccione un país</option>
          <?php
          include('../php/database.php');
          $query = mysqli_query($conn, "SELECT * FROM paises ORDER BY nombre ASC");
          while ($valores = mysqli_fetch_array($query)) {
            echo "<option value='" . $valores['id'] . "'>" . $valores['nombre'] . "</option>";
          }
          ?>

        </select>
        <div class="invalid-feedback">Por favor seleccione un país.</div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">Por favor ingrese un email válido.</div>
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena">
        <div class="invalid-feedback">Las contraseñas no coinciden</div>
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Reingrese la contraseña:</label>
        <input type="password" class="form-control" id="confirmacion_contrasena" name="confirmacion_contrasena">
        <div class="invalid-feedback">Las contraseñas no coinciden</div>
      </div>
      <div class="submitDiv d-flex justify-content-center">
        <button class="btn-login btn-card-per btn btn-primary submitBtnClass" id="enviar" type="submit">Enviar</button>
      </div>
    </form>

    <?php 
      if(isset($_SESSION['message'])): 
    ?>
      <p class="error"><?php echo $_SESSION['message'] ?></p>
    <?php 
      endif;
      unset($_SESSION['message'])
    ?> 

    <span class="plogin">or <a class="loginlinkper" href="login.php">login</a></span>
  </section>

  <!-- FOOTER -->
  <?php include '../includes/footer.php' ?>

  <!-- SCRIPT BOOTSRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

    
</body>

</html>