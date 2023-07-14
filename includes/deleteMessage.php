<button type="button" class="btn-card-per btn btn-danger" data-bs-toggle="modal"
    data-bs-target="#deleteModal<?php echo $valores['id_mensaje']; ?>">Delete</button>
<!-- Modal -->
<div class="modal fade" id="deleteModal<?php echo $valores['id_mensaje']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar mensaje</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Seguro que desea eliminar el mensaje?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="../php/deleteMessage.php" method="post">
                    <input type="hidden" name="deleteMessageId" value="<?php echo $valores['id_mensaje']; ?>">
                    <button type="submit" class="btn-card-per btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>