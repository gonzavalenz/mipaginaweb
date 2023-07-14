<?php require '../php/validacionSesion.php'; ?>
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
    <link rel="stylesheet" href="../styles/main.css">
    <!-- JavaSctipt -->
    <script src="../js/animationmain.js" defer></script>
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;600;800&display=swap" rel="stylesheet">
  </head>
  <body>
      <!-- Barra de navagacion -->
      <?php include '../includes/header.php' ?>
      <!-- Seccion Hero -->
      <section class="hero align-items-stretch">
        <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
          <img class="hero-imagen-perfil" src="../img/gonzalo-valenzuela.jpg" alt="Imagen de gonzalo valenzuela">
          <h1 id="titulo">GONZALO VALENZUELA</h1>
          <h2>Desarrollador de Software y especialista de datos.</h2>
        </div>
        <div>
          <i class="bi bi-arrow-down hero-flecha"></i>
        </div>
      </section>

      <!-- Seccion sobre mi -->
      <section>
        <div class="accordionper accordion" id="accordionExample">
          <div class="accordion-item-per accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button-per accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Sobre mí
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Soy una persona organizada, curiosa y sincera. Me gustan los trabajos en equipo en los cuales me caracteriza mi empatía, compañerismo y mi sentido del humor. Poseo templanza, razonamiento crítico y lógico, lo cual me permite ser más eficaz a la hora de resolver problemas.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button-per accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Habilidades
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul>
                  <li>SQL</li>
                  <li>Python</li>
                  <li>Looker</li>
                  <li>BigQuery</li>
                  <li>Dataplex</li>
                  <li>Linux</li>
                  <li>Bash</li>
                  <li>Java</li>
                  <li>html</li>
                  <li>Photoshop</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button-per accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Experiencia laboral
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <h3>Analista de datos Jr.</h3>
                <p class="resaltado"><strong>La Caja de ahorro y seguros</strong> | Agosto 2022 - Actualidad</p>
                <p>Me encuentro en el equipo de data analytics participando en diferentes procesos como ingesta de datos, creación y mantención de diferentes tablas del Data Warehouse, testeos de calidad de datos, seguridad, documentación de los procesos. Por otro lado también trato con clientes internos asistiendo con sus necesidades.</p>
                <h4>Logros</h4>
                <ul>
                  <li>Proponer y realizar charlas estilo TED con el equipo para poner puntos en común y realizar debates sobre diferentes técnicas y herramientas.</li>
                </ul>
              <hr>
                <h3>Coordinador Administrativo</h3>
                <p class="resaltado"><strong>Gobierno de la Ciudad de Buenos Aires - Centro de testeo de La Rural</strong> | Enero 2021 - Abril 2022</p>
                <p>Mi rol se basa en la coordinación del equipo de Data Entry y la gestión de recursos dentro del dispositivo para garantizar la entrega correcta y a tiempo de resultados. Me destaco por ser resolutivo, eficaz y eficiente. Soy una persona organizada y detallista. En la atención al público garantizo la resolución de conflictos y la satisfacción de las personas. </p>
                <h4>Logros</h4>
                <ul>
                  <li>Cambio de proceso de carga de muestra, mejorando así la velocidad de carga de datos para todo el equipo de Data Entry. </li>
                  <li>Negociación con el sector de recursos para contar con mejores herramientas de trabajo que garanticen la eficiencia del proceso.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button-per accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Formación académica
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <h3>Universidad de Belgrano</h3>
                <p><i>Tecnicatura Universitaria en Programación de Computadoras</i> | 2022 - Actualidad</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FOOTER -->
      <?php include '../includes/footer.php' ?>
    <!-- SCRIPT BOOTSRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
