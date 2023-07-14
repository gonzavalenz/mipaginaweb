<?php
if (isset($_SESSION['messageInfoUD'])):
  ?>
  <p class="mensaje" id="error">
    <?php echo $_SESSION['messageInfoUD'] ?>
  </p>
  <?php
endif;
unset($_SESSION['messageInfoUD'])
  ?>
<div class="container-sm">
  <?php
  include('../php/database.php');
  $q = 'SELECT m.id_mensaje, m.username, m.mensaje, m.fecha_hora, p.nombre as pais
  FROM mensajes m
  INNER JOIN usuarios u on m.username = u.username
  INNER JOIN paises p on u.pais_id = p.id
  ORDER BY 4 DESC
  ';
  $query = mysqli_query($conn, $q);
  while ($valores = mysqli_fetch_array($query)) {
    $username = $valores['username'];
    $mensaje = $valores['mensaje'];
    $fecha_hora = $valores['fecha_hora'];
    $pais = $valores['pais'];
    $MessageId = $valores['id_mensaje'];
    echo '<div class="encapsuladorojo card-mensaje card">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $username . '</h5>';
    echo '<h6 class="card-subtitle mb-2 text-body-secondary">' . $pais . ' - ' . $fecha_hora . '</h6>';
    echo '<p class="card-text">' . $mensaje . '</p>';

    // Botones Update y Delete
    echo '<div class="button-container">';
    if ($_SESSION['username'] === $username) {
      include('updateMessage.php');
      include('deleteMessage.php');
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';

  }
  ?>
</div>