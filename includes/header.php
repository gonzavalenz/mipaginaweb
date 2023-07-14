<!-- Codigo que contiene la barra de navegacion para todas las paginas -->
<header>
  <nav class="navbar navbar-expand-md navbarper">
    <div class="container-fluid">
      <a class="navbar-brand" href="/mipaginaweb/">
        <div class="iconoper">G</div>
      </a>
      <?php
      if (isset($_SESSION['username'])):
        ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon ml-auto"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
          <ul class="navbar-nav d-flex justify-content-center align-items-center">
            <li class="nav-item">
              <a class="nav-link navlinkper" aria-current="page" href="home.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navlinkper" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navlinkper" href="contacto.php">Contacto</a>
            </li>
          </ul>
          <a href="../php/logout.php" class="loginlinkper">Logout</a>

        </div>
        <?php
      endif;
      ?>
    </div>
  </nav>
</header>