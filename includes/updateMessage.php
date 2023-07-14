<button type="button" class="btn-card-update-per btn-card-per btn btn-danger" data-bs-toggle="modal"
  data-bs-target="#updateModal<?php echo $valores['id_mensaje']; ?>">Update</button>
<div class="modal fade" id="updateModal<?php echo $valores['id_mensaje']; ?>" tabindex="-1"
  aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="encapsuladorojo-modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar mensaje</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="udpateForm" action="../php/updateMessage.php" method="POST">
          <input type="hidden" name="messageId" value="<?php echo $valores['id_mensaje']; ?>">
          <div class="mb-3">
            <label for="message-text" class="modal-mensaje col-form-label">Mensaje:</label>
            <textarea class="text-area-modal form-control" id="message" name="message" required><?php echo $valores['mensaje'] ?></textarea>
            <button class="btn-card-per btn btn-primary submitBtnClass" id="enviar" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>