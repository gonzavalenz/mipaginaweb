<form class="encapsuladorojo" id="formularioCreate" action="../php/createMessage.php" method="POST">
  <div class="mb-3">
    <label for="messageInput" class="form-label">Mensaje:</label>
    <textarea class="form-control" id="messageInput" name="messageInput" required></textarea>
  </div>
<?php
if (isset($_SESSION['messageInfo'])):
  ?>
  <p class="mensaje" id="error"><?php echo $_SESSION['messageInfo']?></p>
<?php
endif;
unset($_SESSION['messageInfo'])
  ?>
  <div class="submitDiv">
    <button class="btn-card-per btn btn-primary submitBtnClass" id="enviar" type="submit">Send</button>
  </div>
</form>